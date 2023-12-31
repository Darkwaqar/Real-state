<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class TicketCreateJob implements ShouldQueue
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
        //dd( $this->data);
        $to_name = 'Seth Raddue';
        //  $to_email = 'ahmedarain588@gmail.com';
       $to_email = 'seth@aris360.com';

        $to_name2 = 'Team ARIS360';
        //  $to_email2 = 'ahmedarain588@gmail.com';
        $to_email2 = 'info@aris360.com';

        $to_name3 = 'Patrick';
        //  $to_email3 = 'ahmedarain588@gmail.com';
       $to_email3 = 'patrick@aris360.com';

       $to_name4 = $this->data['user_complaints']['first_name'];
        // $to_email4 = 'ahmedarain588@gmail.com';
        $to_email4 = $this->data['user_complaints']['email'];


        Mail::send('emails.ticketcreatedseth', ['data' => $this->data], function($message) use ($to_name, $to_email, $to_name2, $to_email2, $to_name3, $to_email3) {
            $message->to($to_email, $to_name)
                    ->to($to_email2, $to_name2)
                    ->to($to_email3, $to_name3)
                    ->bcc('max@tristarfinance.com')
                    ->subject('New Ticket Generated By: ' . $this->data['user_complaints']['first_name']);
            $message->from('no-reply@aris360.com','ARIS360');
        });


        //Sending the second email
        Mail::send('emails.ticketcreated', ['data' => $this->data], function($message) use ($to_name4, $to_email4) {
            $message->to($to_email4, $to_name4)
                    ->subject('You Generated A Ticket');
            $message->from('no-reply@aris360.com','ARIS360');
        });
    }
}
