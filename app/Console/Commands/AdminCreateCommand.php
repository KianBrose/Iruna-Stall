<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class AdminCreateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:create {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create admin account';

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
        $email = $this->argument('email');

        if($this->emailExists($email)){
            $this->info('This email is taken');
        }else{
            $username = $this->ask('Enter admin name');
            $password = $this->secret('Enter admin password');
            $confirmPassword = $this->secret('Confirm admin password');
            $this->createAdminUser($username, $email, $password, $confirmPassword);

        }
    }

    /**
     * Check if email exists
     * 
     * @param string $email
     * 
     * return bool
     */
    protected function emailExists($email)
    {
        $user = User::where('email', $email)->firstOrFail();
        if($user){
            return true;
        }
        return false;
    }


    /**
     * Create user account and set as admin
     * 
     * @param string $username
     * @param string $email
     * @param string $password
     * @param string $confirmPassword
     * 
     * return @mixed
     */
    protected function createAdminUser($username, $email, $password, $confirmPassword)
    {
       if($this->passwordIsMatched($password, $confirmPassword)){
           $this->info('Creating user account...');

           User::create([
               'email' => $email,
               'username' => $username,
               'password' => Hash::make($password),
               'isAdmin' => 1
            
           ]);
           $this->info('Finished creating...');
    
       }
    }

    private function passwordIsMatched($password, $confirmPassword)
    {
        return $password == $confirmPassword;
    }
}
