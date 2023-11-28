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

class SendForumEmailNotificationJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $data;

    public function __construct($emaildata)
    {
        $this->data = $emaildata;
    }

    public function handle()
    {
        //dd($this->recipient);
        $to_name = 'Seth Raddue';
        // $to_email = 'ahmedarain588@gmail.com';
        $to_email = 'seth@aris360.com';

        $to_name2 = 'Team ARIS360';
        // $to_email2 = 'ahmedarain588@gmail.com';
        $to_email2 = 'info@aris360.com';

        $to_name3 = 'Patrick';
        // $to_email3 = 'ahmedarain588@gmail.com';
        $to_email3 = 'patrick@aris360.com';

        $to_name4 = isset($this->data['user']['first_name']) ? $this->data['user']['first_name'] : $this->data['user']['first_name'];
        // $to_email4 = 'ahmedarain588@gmail.com';
        $to_email4 = $this->data['user']['email'];


        Mail::send('emails.threadCreatedbyUser', ['data' => $this->data], function($message) use ($to_name, $to_email, $to_name2, $to_email2, $to_name3, $to_email3) {
            $message->to($to_email, $to_name)
                    ->to($to_email2, $to_name2)
                    ->to($to_email3, $to_name3)
                    ->bcc('max@tristarfinance.com')
                    ->subject('New Thread Created by ' . isset($this->data['user']['first_name']) ? $this->data['user']['first_name'] : $this->data['user']['first_name'] );
            $message->from('no-reply@aris360.com','ARIS360');
        });


        //Sending the second email
        Mail::send('emails.threadCreated', ['data' => $this->data], function($message) use ($to_name4, $to_email4) {
            $message->to($to_email4, $to_name4)
                    ->subject('You have created New Thread');
            $message->from('no-reply@aris360.com','ARIS360');
        });
    }
}
