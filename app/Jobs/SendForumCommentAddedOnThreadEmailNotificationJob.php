<?php

namespace App\Jobs;

use App\Models\User;
use App\Models\ForumThread;
use App\Models\ForumComment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendForumCommentAddedOnThreadEmailNotificationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $data;

    public function __construct($emailData)
    {
        $this->data = $emailData;

    }

    public function handle()
    {
       // dd($this->data);
        $to_name = 'Seth Raddue';
        //  $to_email = 'ahmedarain588@gmail.com';
        $to_email = 'seth@aris360.com';

        $to_name2 = 'Team ARIS360';
        //  $to_email2 = 'ahmedarain588@gmail.com';
       $to_email2 = 'info@aris360.com';

        $to_name3 = 'Patrick';
        //  $to_email3 = 'ahmedarain588@gmail.com';
        $to_email3 = 'patrick@aris360.com';

        $to_name4 = $this->data['parent_comment']['user']['first_name'];
        // $to_email4 = 'ahmedarain588@gmail.com';
        $to_email4 = $this->data['parent_comment']['user']['email'];


        Mail::send('emails.ReplyAddedByuser', ['data' => $this->data], function($message) use ($to_name, $to_email, $to_name2, $to_email2, $to_name3, $to_email3) {
            $message->to($to_email, $to_name)
                    ->to($to_email2, $to_name2)
                    ->to($to_email3, $to_name3)
                    ->bcc('max@tristarfinance.com')
                    ->subject('New Comment Added On the comment of ' . $this->data['parent_comment']['user']['first_name']);
            $message->from('no-reply@aris360.com','ARIS360');
        });


        //Sending the second email
        Mail::send('emails.commentReply', ['data' => $this->data], function($message) use ($to_name4, $to_email4) {
            $message->to($to_email4, $to_name4)
                    ->subject('You have received a new comment on your comment');
            $message->from('no-reply@aris360.com','ARIS360');
        });
    }
}
