<?php

namespace App\Http\Controllers;

use App\Events\UserNotification;
use App\Models\ForumCategory;
use App\Models\ForumThread;
use App\Jobs\SendForumEmailNotificationJob;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForumThreadController extends Controller
{
    public function create(ForumCategory $category)
    {
        return view('forum.threads.create', compact('category'));
    }

    public function store(Request $request)
    {


        $request->validate([
            // 'category_id' => 'required|exists:forum_categories,id',
            'title' => 'required',
            'description' => 'required',
        ]);

        $thread = ForumThread::create([
            'forum_category_id' => $request->input('forum_category_id'),
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'user_id' => auth()->id()
        ]);
            $data['type'] = 'New Topic';
            $data['time'] = Carbon::now();
            $data['path'] = asset('public/images/userdp/');
            $data['link'] = url('categories/'.$request->input('forum_category_id'));
            $link = 'categories/'.$request->input('forum_category_id');
            $data['user'] = User::where('id', getUserId())->first()->toArray();
            $data['message'] = Auth::user()->first_name. ' Created a topic '. $thread->title.' '.$request->input('content');
           
        createNotification(getUserId(),'Forum New Topic',Auth::user()->first_name. ' Created a topic '. $thread->title.' '.$request->input('content'),'New Topic ',null,null,$thread->id,$link);
        event(new UserNotification($data));
        $emailData = ForumThread::with('forum_category','user','forum_comments')->where('id',$thread->id)->first()->toArray(); 

       // dd($emailData);
        // // Dispatch a job to send email notification to the thread creator
         SendForumEmailNotificationJob::dispatch($emailData)->delay(now()->addSeconds(10));
        return redirect()->route('forum.categories.show', $request->input('forum_category_id'));
    }

    public function show(ForumThread $thread)
    {
        $thread->load([
            'forum_comments.user',
            'forum_comments.childComments.user' // Load the child comments with their respective users
        ]);
       // dd($thread);
        return view('forum.threads.show', compact('thread'));
    }
}
