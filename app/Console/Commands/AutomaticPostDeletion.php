<?php

namespace App\Console\Commands;

use DB;
use Illuminate\Console\Command;

class AutomaticPostDeletion extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:old';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Deletes posts that are over 30 days old';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        DB::table('ai')
        	->where('created_at', '<', \Carbon\Carbon::now()->subMonth())
                ->delete();
	DB::table('relic')
                ->where('created_at', '<', \Carbon\Carbon::now()->subMonth())
                ->delete();
	DB::table('xtal')
                ->where('created_at', '<', \Carbon\Carbon::now()->subMonth())
                ->delete();
	DB::table('equipment')
                ->where('created_at', '<', \Carbon\Carbon::now()->subMonth())
                ->delete();
	DB::table('item')
                ->where('created_at', '<', \Carbon\Carbon::now()->subMonth())
                ->delete();
    }
}
