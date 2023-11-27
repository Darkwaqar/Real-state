<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\ShareListingEmailMailable; // Replace with your mailable class


class ShareListingEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    
    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $data;
    public function __construct($emailData)
    {
        $this->data = $emailData;
       
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $to_email = $this->data['email'];
        Mail::send('emails.shareListingEmail', $this->data, function($message) use ($to_email) {
            $message->to($to_email)
                    ->subject(ucfirst($this->data['userData']['first_name']) . ' shared the property with you');
                    $message->from('no-reply@aris360.com','ARIS360');
        });
    }
}
