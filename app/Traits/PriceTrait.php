<?php

namespace App\Traits;

trait PriceTrait{
    /**
     * 
     * convert shorcut price to number
     * 
     * @param string $priceDenote
     * @param string $priceNumber
     * 
     * @return number
     */
    public function convertPrice($priceDenote, $priceNumber){
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

    public function updatePrice($price){
        if(strlen($price) > 12){
            return 999999999999;
        }
        else if(strlen($price) < 1){
            return 1;
        } 
        else{
            if(in_array($this->getFirstCharacter($price), $this->getPriceType())){
                if($this->validConvertPrice($this->getFirstCharacter($price), $this->getPriceNumber($price))){
                    return $this->convertPrice($this->getFirstCharacter($price), $this->getPriceNumber($price));
                }else{
                    return 1;
                }
            }
            if(is_numeric($price)){
                return $price;
            } 
    }

    }

    private function getFirstCharacter($string){
        return strtolower(substr($string, -1));
    }
    

    private function getPriceNumber($string){
        return substr($string, 0, -1);
    }


    private function getPriceType(){
        return array('b', 'm', 'k');
    }


    private function validConvertPrice($priceDenote, $priceNumber){
        if($priceDenote == 'b'){
            return $this->validBillionPrice($priceNumber);
            
        }
        if($priceDenote == 'm'){
            return $this->validMillionPrice($priceNumber);
        }

        if($priceDenote == 'k'){
            return $this->validThousandsPrice($priceNumber);
               
        }
    }
    
    /**
     * Check for valid billion price
     * @return bool
     */
    private function validBillionPrice($priceNumber){
        if(is_numeric($priceNumber)){
                
            if((int)$priceNumber * 1000000000 > 999999999999){
                return false;
            } else{
                
                return true;
            }
        } else{
            return false;
        }
    }
    /**
     * check for valid millions price
     */

    private function validMillionPrice($priceNumber){
        if(is_numeric($priceNumber)){
            if((int)$priceNumber * 1000000 > 999999999999){
                return false;
            } else{
                return true;
            }
        } else{
            return false;
        }
    }

    /**
     * Check for valid thousands price
     */
    private function validThousandsPrice($priceNumber){
        if(is_numeric($priceNumber)){
            if((int)$priceNumber * 1000 > 999999999999){
                return false;
            } else{
                return true;
            }
        } else{
            return false;
        }
    }

    /**
     * 
     * check if a string is a valid number
     *
     * @param String $number
     * 
     */
    private function validNumber(String $number): bool{
        return ctype_digit($number);
    }

    /**
     * check and return number between 9999 and 1
     * 
     * @param String $quantity
     */
    public function updateQuantity($quantity){
        if($this->validNumber($quantity)){
            if((int) $quantity > 9999){
                return 9999;
            }elseif((int) $quantity < 1){
                return 1;
            }else{
                return $quantity;
            }
        }
    }
}
?>