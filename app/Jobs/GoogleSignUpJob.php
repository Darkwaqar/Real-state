<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class GoogleSignUpJob implements ShouldQueue
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
      // dd($this->data);

       $to_name4 = $this->data['first_name'];
        // $to_email4 = 'ahmedarain588@gmail.com';
        $to_email4 = $this->data['email'];




        //Sending the second email
        Mail::send('emails.googleSignUp', ['data' => $this->data], function($message) use ($to_name4, $to_email4) {
            $message->to($to_email4, $to_name4)
                    ->subject('Reminder!');
            $message->from('no-reply@aris360.com','ARIS360');
        });
    }
}
