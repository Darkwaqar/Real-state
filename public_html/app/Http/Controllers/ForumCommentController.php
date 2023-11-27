<?php

namespace App\Http\Controllers;

use App\Events\UserNotification;
use App\Models\ForumThread;
use App\Models\ForumComment;
use App\Jobs\SendForumCommentEmailNotificationJob;
use App\Jobs\SendForumCommentAddedOnEmailNotificationJob;
use App\Jobs\SendForumCommentAddedOnThreadEmailNotificationJob;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForumCommentController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'forum_thread_id' => 'required|exists:forum_threads,id',
            'forum_comment_id' => 'nullable|exists:forum_comments,id',
            'content' => 'required',
        ]);

        $comment = ForumComment::create([
            'forum_thread_id' => $request->input('forum_thread_id'),
            'forum_comment_id' => $request->input('forum_comment_id'),
            'content' => $request->input('content'),
            'user_id' => auth()->id(),
        ]);
           $topic = ForumThread::where('id',$request->input('forum_thread_id'))->first();
            $data['type'] = 'Topic Comment';
            $data['time'] = Carbon::now();
            $data['path'] = asset('public/images/userdp/');
            $data['link'] = url('threads/'.$topic->id);
            $link = 'threads/'.$topic->id;
            $data['user'] = User::where('id', getUserId())->first()->toArray();
            $data['message'] = Auth::user()->first_name. ' Commented On '. $topic->title.' '.$request->input('content');
           
            // $agent = User::where('id',Auth::user()->id)->first()->toArray();
        createNotification(getUserId(),$request->input('content').$topic->title, Auth::user()->first_name. ' Commented On '. $topic->title.' '.$request->input('content'),'Topic Comment ',null,null,$topic->id,$link);
        event(new UserNotification($data));
        $forum_thread_id = intval($comment->forum_thread_id);
        // // Dispatch a job to send email notification to the thread creator
        $emailData = ForumComment::with('thread.user','user','parentComment.user','childComments.user')->where('id',$comment->id)->first()->toArray();
        //dd($emailData);
        SendForumCommentEmailNotificationJob::dispatch($emailData);

        if($comment->thread != null)
        {
            SendForumCommentAddedOnEmailNotificationJob::dispatch($emailData);
          
        }

        // Dispatch a job to send email notification to the comment creator
        if ($comment->parentComment != null) { 
            SendForumCommentAddedOnThreadEmailNotificationJob::dispatch($emailData);
        }

        return redirect()->route('forum.threads.show', $forum_thread_id);
    }
}
