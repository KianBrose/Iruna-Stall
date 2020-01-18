<?php
namespace App\Traits;

trait ItemPostedTrait{


    /**
     * format the name
     * 
     * @param string $name
     * @param string $symbol optional
     * 
     * @return string
     */
    public function formatName($name, $symbol = null){
        if($symbol !== null){
            return $this->convertSymbol($name, $symbol);
        }
        else{
            return str_replace(['Of'], ['of'],ucwords($name));
        }
        
    }

    /**
     * 
     * format name and with symbol
     * 
     * @param String $name
     * @param String $symbol
     * 
     * return string
     */
    private function convertSymbol($name, $symbol): string{
        if(substr($name, 0, 3) != $symbol){
            
            
            $itemName = preg_replace_callback('/\b(?=[LXIVCDM]+\b)([a-z]+)\b/i', 
            function($matches) {
                return strtoupper($matches[0]);
            }, str_replace(['Of'], ['of'], ucwords(strtolower($name))));
            return $symbol.$itemName;

        }else{
             return $name;
        }
    }

    
    
}
?>