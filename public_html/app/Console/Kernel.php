<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('log:cron')->everyMinute();
        $schedule->command('mls:media')->everyMinute();
        $schedule->command('mlsmedia:second')->everyMinute();
        $schedule->command('mlsmedia:third')->everyMinute();
        $schedule->command('mlsmedia:fourth')->everyMinute();
        $schedule->command('mlsmedia:fifth')->everyMinute();
        $schedule->command('mls:insert')->everyMinute();
        $schedule->command('s3bucketimage:generator')->everyMinute();
        $schedule->command('s3bucketimage:generatorsecond')->everyMinute();
        $schedule->command('s3bucketimage:generatorthird')->everyMinute();
        $schedule->command('s3bucketimage:refreshlink')->everyFiveMinutes();
        // $schedule->command('mls:schools')->everyTwoMinutes();
        $schedule->command('send:reminders')->dailyAt('12:00');
        $schedule->command('s3bucketimage:refreshlink2')->everyTenMinutes();
        // $schedule->command('s3bucketimage:refreshlink3')->everyFifteenMinutes();mls:schools

       //$schedule->command('s3bucketimage:refreshlink')->everySixHours();
       //$schedule->command('s3bucketimage:refreshlink')->cron('0 0,12 * * *');
       // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
