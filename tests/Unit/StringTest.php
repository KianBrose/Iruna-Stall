<?php

namespace Tests\Unit;

use App\Traits\NameTrait;
use Tests\TestCase;

class StringTest extends TestCase
{
    use NameTrait;

    public function testSplitAbility()
    {
       $ability = $this->splitAbility('Strength, Evasion');
       $this->assertEquals('Strength', $this->getAbilityByIndex($ability, 0));
       $this->assertEquals(null, $this->getAbilityByIndex($ability, 3));
    }



}