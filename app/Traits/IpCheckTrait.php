<?php

namespace App\Traits;

use App\Models\Blocker;
use Illuminate\Support\Facades\Request;
use App\Traits\IpAddressTrait;

trait IpCheckTrait
{
    use IpAddressTrait;

    /**
     * 
     * check if ip is valid to use the website
     */
    public static function check()
    {
        $ip = Request::ip();
        $route = Request::route();
        $ipAddressDetails = $this->checkIP($ip);

        $block = false;

        $block = $this->isBlocked($ip);

        $this->getAction($block);


    }

    private function getAction($block)
    {
        if($block)
        {
            if(auth()->check())
            {
                auth()->logout();
                return redirect('/login');
            }
        }
    }


    /**
     * 
     * check if ip is not blocked
     * 
     * @param string $check
     * 
     * @return bool
     */
    private function isBlocked($check)
    {
        $blockedData = Blocker::all();

        foreach($blockedData as $data){
            if($data->value == $check){
                return true;
            }
        }
        return false;
    }
}
?>