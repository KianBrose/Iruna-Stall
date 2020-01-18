<?php

namespace Tests\Unit;

use App\Traits\ItemPostedTrait;
use App\Traits\PriceTrait;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PriceTest extends TestCase
{
    use PriceTrait, ItemPostedTrait;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testPrice()
    {
        $this->assertEquals(1000, $this->convertPrice('k', '1'));
        $this->assertEquals(1000000, $this->convertPrice('m', '1'));
        $this->assertEquals(1000000000, $this->convertPrice('b', '1'));
        $this->assertEquals(1200000, $this->convertPrice('m', '1.2'));


        $this->assertEquals(1200000, $this->updatePrice('1.2m'));
        $this->assertEquals(5000, $this->updatePrice('5k'));
        $this->assertEquals(1, $this->updatePrice('100000b'));
        $this->assertEquals(999999999999, $this->updatePrice('9999999999999'));

    }

    public function testFormatEquipName()
    {
        $this->assertEquals('Eventail', $this->formatName('eventail'));
    }

    public function testFormatMaterialName(){
        $this->assertEquals('Academy Ticket', $this->formatName('academy ticket'));
        $this->assertEquals('Fallen Angel Plume', $this->formatName('fallen angel plume'));
    }

    public function testFormatXtalName()
    {
        $this->assertEquals('◇Sauro II', $this->formatName('sauro ii', '◇'));
        $this->assertEquals('◇Blue Rain', $this->formatName('blue rain', '◇'));
        $this->assertEquals('◇Dark Enhancer III', $this->formatName('dark enhancer iii', '◇'));
    }

    public function testFormatAlCrystasName()
    {
        $this->assertEquals('▲Behemoth', $this->formatName('behemoth', '▲'));
        $this->assertEquals('▲Cast Defense II', $this->formatName('cast defense ii', '▲'));
        $this->assertEquals('▲Sakimori No Ryu', $this->formatName('sakimori no ryu', '▲'));
    }
}
