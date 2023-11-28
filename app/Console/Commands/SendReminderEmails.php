<?php

namespace App\Console\Commands;

use App\Jobs\GoogleSignUpJob;
use App\Models\User;
use Illuminate\Console\Command;

class SendReminderEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:reminders';
    protected $description = 'Send reminder emails to users after 4 and 24 hours';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Get users who signed up exactly 4 hours ago.
        $usersFor4HoursReminder = User::whereNull('mobile_number')
            ->whereNull('address')
            ->where('created_at', '<=', now()->subHours(4))
            ->whereNull('four_hours')
            ->get();

        if ($usersFor4HoursReminder->count() > 0) {
            foreach ($usersFor4HoursReminder as $user) {
                // Send the 4-hour reminder email here.
                GoogleSignUpJob::dispatch($user);
                // Example: Mail::to($user->email)->send(new FourHoursReminderEmail($user));
                $user->update(['four_hours' => 1]);
            }
        }

        // Get users who signed up exactly 24 hours ago.
        $usersFor24HoursReminder = User::whereNull('mobile_number')
            ->whereNull('address')
            ->where('created_at', '<=', now()->subHours(24))
            ->whereNull('twenty_four_hours')
            ->get();

        if ($usersFor24HoursReminder->count() > 0) {
            foreach ($usersFor24HoursReminder as $user) {
                // Send the 24-hour reminder email here.
                GoogleSignUpJob::dispatch($user);
                // Example: Mail::to($user->email)->send(new TwentyFourHoursReminderEmail($user));
                $user->update(['twenty_four_hours' => 1]);
            }
        }

        $this->info('Reminder emails sent successfully.');
    }
}
