<?php

namespace App\Traits;

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

    }
}
?>