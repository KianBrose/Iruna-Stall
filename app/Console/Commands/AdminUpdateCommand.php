<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use App\User;

class AdminUpdateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update admin status';

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
        $this->info('We need to make sure that only people with admin permission can execute this command');

        // get admin email
        $adminEmail = $this->ask('What is your email?');

        // Get admin password
        $adminPassword = $this->secret('What is your password');

        $isAdmin = $this->hasAdminPermission($adminEmail, $adminPassword);

        if($isAdmin){
            $this->update();
        }

    }

    /**
     * 
     * check if an admin has permission to perform update action
     * 
     * @param string $adminEmail
     * @param string $adminPassword
     * 
     * @return bool
     */
    protected function hasAdminPermission($adminEmail, $adminPassword)
    {
        $user = User::where('email', $adminEmail)->firstOrFail();
        if($user) {
            if(!Hash::check($adminPassword, $user->password)) {
                $this->error('Your password or your email is wrong, please try again');
            }
            else {
                return $this->hasAdminRole($user);
            }
        } else {
            $this->error('Your password or your email is wrong, please try again');
        }
        
    }

    /**
     * 
     * return true if user is admin
     * 
     * @param App\User $user
     * 
     * @return bool
     */
    protected function hasAdminRole($user) 
    {
        return $user->isAdmin == 1;
    }


    /**
     * 
     * Set editor role to admin user
     * 
     * @return void
     */
    protected function update()
    {
        $users = User::where('isAdmin', 1)->get();
        foreach($users as $user){
            $user->editor = 1;
            $user->save();
            $this->info('Successfully assign user '.$user->name.' to editor role');
        }
    }
}
