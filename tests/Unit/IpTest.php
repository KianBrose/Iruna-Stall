<?php

namespace Tests\Unit;

use Tests\TestCase;

use App\Traits\IpAddressTrait;

class IpTest extends TestCase{
    use IpAddressTrait;

    public function testIP()
    {
        $this->assertEquals('Australia', $this->checkIP("42.62.231.80", 'country'));
        $this->assertEquals('AU', $this->checkIP("42.62.231.80", 'countrycode'));
    }
    
}
?>