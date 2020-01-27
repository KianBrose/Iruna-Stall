<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class AdminCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:set {userEmail : The user email you wish set the permission}';

    /**
     * Set user as an admin
     *
     * @var string
     */
    protected $description = 'Set user as an admin';

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

        $userEmail = $this->argument('userEmail');

        $this->info('We need to make sure that only people with admin permission can execute this command');

        // get admin email
        $adminEmail = $this->ask('What is your email?');

        // Get admin password
        $adminPassword = $this->secret('What is your password');

        $isAdmin = $this->hasAdminPermission($adminEmail, $adminPassword);
        
        if($isAdmin){
            $this->setAdminPersmission($userEmail);
        }
    }

    /**
     * 
     * check if an admin has permission to set other as admin
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
                $this->error('Your password does not match');
            }
            else {
                return $this->hasAdminRole($user);
            }
        } else {
            $this->error('We could not find your email address, make sure you spell it correctly');
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
     * check if users table has valid email
     * 
     * @param string $email
     * 
     * @return App\User 
     */
    protected function usersHasEmail($email)
    {
        $user = User::where('email', $email)->firstOrFail();

        if($user){
            return $user;
        }

        return null;

    }

    /**
     * 
     * set target user as admin
     * 
     * @param string $userEmail
     * 
     * @return mixed
     */
    protected function setAdminPersmission($userEmail)
    {

        $user = $this->usersHasEmail($userEmail);

        if($user == null) {
            $this->error('We could not find that user email address, make sure you spell it correctly');
        }
        else {
            $user->isAdmin = 1;
            $user->save();
            $this->info('Successfully set target: '.$user->email.' as admin');
        }
    }


}
