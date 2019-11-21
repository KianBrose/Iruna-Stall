<?php

use Database\Seeds\AbilityTypeSeeder;
use Illuminate\Database\Seeder;
use App\Ability;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $path = 'database/irunaitem/item1.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Migrated iruna database 1/10');
        // $this->call(UsersTableSeeder::class);
        $path = 'database/irunaitem/item2.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Migrated iruna database 2/10');

        $path = 'database/irunaitem/item3.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Migrated iruna database 3/10');

        $path = 'database/irunaitem/item4.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Migrated iruna database 4/10');

        $path = 'database/irunaitem/item5.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Migrated iruna database 5/10');

        $path = 'database/irunaitem/item6.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Migrated iruna database 6/10');

        $path = 'database/irunaitem/item7.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Migrated iruna database 7/10');

        $path = 'database/irunaitem/item8.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Migrated iruna database 8/10');

        $path = 'database/irunaitem/item9.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Migrated iruna database 9/10');

        $path = 'database/irunaitem/item10.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Migrated iruna database 10/10');

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
