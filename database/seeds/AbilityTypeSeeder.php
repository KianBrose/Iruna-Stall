<?php
namespace Database\Seeds;

use App\Ability;
use Illuminate\Database\Seeder;

class AbilityTypeSeeder extends Seeder
{
    /**
     * 
     * @return void
     */

     public function run()
     {
         $ability = [
             [
                'type' => 'Strength'
             ],
             [
                'type' => 'Agility'
             ],
             [
                'type' => 'Melee Defense'
             ],
             [
                'type' => 'Evasion'
             ]
        ];
        foreach($ability as $abilities){
            $newAbility = Ability::where('type', $abilities['type'])->first();
            if($newAbility === null){
               $newAbility =  Ability::create([
                  'type' => $abilities['type']
              ]);
            }
            
        }
     }
}

?>