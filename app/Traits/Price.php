<?php

namespace App\Traits;

trait Price{
    /**
     * 
     * convert shorcut price to number
     * 
     * @param string $priceDenote
     * @param number $priceNumber
     * 
     * @return number
     */
    function convertPrice($priceDenote, $priceNumber){
        if($priceDenote == 'b'){
            return (double)$priceNumber * 1000000000;
        } 
        if($priceDenote == 'm'){
           return (double)$priceNumber * 1000000;
        }
        if($priceDenote == 'k'){
            return (double)$priceNumber * 1000;
        }
    }
}
?>