<?php

namespace App\Console;

use App\Console\Commands\AdminCommand;
use App\Console\Commands\AdminCreateCommand;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        AdminCommand::class,
        AdminCreateCommand::class,
        Commands\AutomaticPostDeletion::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
        //$schedule->call(function(){
        //    DB::table('ai')->where('created_at', '<', 'NOW() - INTERVAL 1 MONTH')->delete();
        //    DB::table('relic')->where('created_at', '<', 'NOW() - INTERVAL 1 MONTH')->delete();
        //    DB::table('xtal')->where('created_at', '<', 'NOW() - INTERVAL 1 MONTH')->delete();
        //    DB::table('equipment')->where('created_at', '<', 'NOW() - INTERVAL 1 MONTH')->delete();
        //    DB::table('item')->where('created_at', '<', 'NOW() - INTERVAL 1 MONTH')->delete();
        //})->hourly();
        $schedule->command('delete:old')
            //->hourly();
	    ->everyFiveMinutes();
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
