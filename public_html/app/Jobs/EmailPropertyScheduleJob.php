<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class EmailPropertyScheduleJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $to_name = 'Seth Raddue';
        // $to_email = 'ahmedarain588@gmail.com';
        $to_email = 'seth@aris360.com';

        $to_name2 = 'Team ARIS360';
        // $to_email2 = 'ahmedarain588@gmail.com';
        $to_email2 = 'info@aris360.com';

        $to_name3 = 'Patrick';
        // $to_email3 = 'ahmedarain588@gmail.com';
        $to_email3 = 'patrick@aris360.com';

        $to_name4 = isset($this->data['userData']->user_name) ? $this->data['userData']->user_name : $this->data['userData']->first_name;
        // $to_email4 = 'ahmedarain588@gmail.com';
        $to_email4 = $this->data['userData']->email;

        if(isset($this->data['agent_email_id']) && $this->data['agent_email_id'] != "")
        {
            Mail::send('emails.propertyScheduled', $this->data, function($message) use ($to_name, $to_email, $to_name2, $to_email2, $to_name3, $to_email3) {
                $message->to($to_email, $to_name)
                        ->to($to_email2, $to_name2)
                        ->to($to_email3, $to_name3)
                        ->bcc('max@tristarfinance.com')
                        ->to($this->data['agent_email_id'], $this->data['agent_user_name'])
                        ->subject('Request for property tour recieved');
                $message->from('no-reply@aris360.com','ARIS360');
            });
        }
        else
        {
            Mail::send('emails.propertyScheduled', $this->data, function($message) use ($to_name, $to_email, $to_name2, $to_email2, $to_name3, $to_email3) {
                $message->to($to_email, $to_name)
                        ->to($to_email2, $to_name2)
                        ->to($to_email3, $to_name3)
                        ->bcc('max@tristarfinance.com')
                        ->subject('Request for property tour recieved');
                $message->from('no-reply@aris360.com','ARIS360');
            });
        }

        //Sending the second email
        Mail::send('emails.propertyScheduleClient', $this->data, function($message) use ($to_name4, $to_email4) {
            $message->to($to_email4, $to_name4)
                    ->subject('Confirmation of your request for a property tour');
            $message->from('no-reply@aris360.com','ARIS360');
        });
    }
}
