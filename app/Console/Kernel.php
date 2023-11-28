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
        // $schedule->command('log:cron')->everyMinute();
        // $schedule->command('mls:media')->everyMinute();
        // $schedule->command('mlsmedia:second')->everyMinute();
        // $schedule->command('mlsmedia:third')->everyMinute();
        // $schedule->command('mlsmedia:fourth')->everyMinute();
        // $schedule->command('mlsmedia:fifth')->everyMinute();
        // $schedule->command('mls:insert')->everyMinute();
        // $schedule->command('s3bucketimage:generator')->everyMinute();
        // $schedule->command('s3bucketimage:generatorsecond')->everyMinute();
        // $schedule->command('s3bucketimage:generatorthird')->everyMinute();
        // $schedule->command('s3bucketimage:refreshlink')->everyFiveMinutes();
        // // $schedule->command('mls:schools')->everyTwoMinutes();
        // $schedule->command('send:reminders')->dailyAt('12:00');
        // $schedule->command('s3bucketimage:refreshlink2')->everyTenMinutes();

        $schedule->command('log:cron')->everyFiveMinutes();
        $schedule->command('mls:insert')->everyFiveMinutes();
        $schedule->command('mls:media')->everyMinute();
        $schedule->command('mlsmedia:second')->everyMinute();
        $schedule->command('mlsmedia:third')->everyMinute();
        $schedule->command('mlsmedia:fourth')->everyMinute();
        $schedule->command('mlsmedia:fifth')->everyMinute();
        $schedule->command('s3bucketimage:generatorsecond')->everyMinute();
        $schedule->command('s3bucketimage:generator')->everyMinute();
        $schedule->command('s3bucketimage:generatorthird')->everyMinute();
        $schedule->command('s3bucketimage:refreshlink')->everyFiveMinutes();
        // $schedule->command('mls:schools')->everyTwoMinutes();
        $schedule->command('send:reminders')->dailyAt('12:00');
        $schedule->command('s3bucketimage:refreshlink2')->everyTenMinutes();

        // $schedule->command('log:cron')->everyFiveMinutes()->withoutOverlapping();
        // $schedule->command('mls:insert')->everyFiveMinutes()->withoutOverlapping();
        // $schedule->command('mls:media')->everyMinute()->withoutOverlapping();
        // $schedule->command('mlsmedia:second')->everyMinute()->withoutOverlapping();
        // $schedule->command('mlsmedia:third')->everyMinute()->withoutOverlapping();
        // $schedule->command('mlsmedia:fourth')->everyMinute()->withoutOverlapping();
        // $schedule->command('mlsmedia:fifth')->everyMinute()->withoutOverlapping();
        // $schedule->command('s3bucketimage:generatorsecond')->everyMinute()->withoutOverlapping();
        // $schedule->command('s3bucketimage:generator')->everyMinute()->withoutOverlapping();
        // $schedule->command('s3bucketimage:generatorthird')->everyMinute()->withoutOverlapping();
        // $schedule->command('s3bucketimage:refreshlink2')->everyTenMinutes()->withoutOverlapping();
        // $schedule->command('s3bucketimage:refreshlink')->everyTenMinutes()->withoutOverlapping();
        // $schedule->command('send:reminders')->dailyAt('12:00')->withoutOverlapping();


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
