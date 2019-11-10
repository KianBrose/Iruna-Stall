<?php

use Illuminate\Database\Seeder;

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
        $this->command->info('Migrated iruna database 1/6');
        // $this->call(UsersTableSeeder::class);
        $path = 'database/irunaitem/item2.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Migrated iruna database 2/6');

        $path = 'database/irunaitem/item3.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Migrated iruna database 3/6');

        $path = 'database/irunaitem/item4.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Migrated iruna database 4/6');

        $path = 'database/irunaitem/item5.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Migrated iruna database 5/6');

        $path = 'database/irunaitem/item6.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Migrated iruna database 6/6');
    }
}
