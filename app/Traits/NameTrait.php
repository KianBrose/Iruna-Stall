<?php

namespace App\Traits;

trait NameTrait
{
    /**
     * Return an array of abilities
     * 
     * @param string $ability
     * 
     * @return array
     */
    public function splitAbility($ability)
    {
        return explode(',', $ability);
    }

    /**
     * Return ability's name from given array
     * 
     * @param array $abilities
     * @param integer $index
     * 
     * @return null
     * 
     */
    public function getAbilityByIndex($abilities, $index)
    {
        if(!array_key_exists($index, $abilities)){
            return null;
        }
        return $this->getAbilityNameByIndex($abilities, $index);
    }

    /**
     * Return the value of index element in given array
     * 
     * @param array $abilities
     * @param int $index
     * 
     * @return string;
     */
    private function getAbilityNameByIndex($abilities, $index)
    {
        return $abilities[$index];
    }
}