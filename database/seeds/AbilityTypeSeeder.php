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
               'type' => 'Vitality'
            ],
            [
               'type' => 'Intelligence'
            ],
            [
               'type' => 'Dexterity'
            ],
            [
               'type' => 'Critical'
            ],
            [
               'type' => 'Quick Use'
            ],
            [
               'type' => "Provoke"
            ],
            [
               'type' => "Gentleness"
            ],
            [
               'type' => "Heal"
            ],
            [
               'type' => "Pharmacy"
            ],
            [
               'type' => "Technique"
            ],
            [
               'type' => "Autoskill"
            ],
            [
               'type' => "Fatal"
            ],
            [
               'type' => "Rate cut"
            ],
            [
               'type' => 'Quick Cool'
            ],
            [
               'type' => "Regenerate"
            ],
            [
               'type' => "Mp Cost"
            ],
             [
                'type' => 'Evasion'
             ],
             [
               'type' => 'Wind Blessing'
            ],
            [
               'type' => 'Fire Blessing'
            ],
            [
               'type' => 'Earth Blessing'
            ],
            [
               'type' => "Water Blessing"
            ],
            [
               'type' => "Light Blessing"
            ],
            [
               'type' => "Darkness Blessing"
            ],
            [
               'type' => "Melee Pierce"
            ],
            [
               'type' => "Fixed Melee"
            ],
            [
               'type' => "Fixed Magic"
            ],
            [
               'type' => "Buddy"
            ],
            [
               'type' => "Spell Burst"
            ],
            [
               'type' => "Magic Pierce"
            ],
            [
               'type' => "Range Cut"
            ],
            [
               'type' => "Reflect"
            ],
            [
               'type' => "Collector"
            ],
            [
               'type' => "Striver"
            ],
            [
               'type' => "Heal Reward"
            ],
            [
               'type' => 'HP'
            ],
            [
               'type' => 'MP'
            ],
            [
               'type' => 'Attack'
            ],
            [
               'type' => 'Magic'
            ],
            [
               'type' => 'Magic defense'
            ],
            [
               'type' => 'Accuracy'
            ],
            [
               'type' => 'Wild Dance'
            ],
            [
               'type' => 'Fluency'
            ],

        ];
        foreach($ability as $abilities){
            $newAbility = Ability::where('type', $abilities['type'])->first();
            if($newAbility === null){
               $newAbility =  Ability::create([
                  'type' => $abilities['type']
              ]);
            }
            
        }
        $this->command->info("Seeding: AbilitySeeder");
     }
}

?>