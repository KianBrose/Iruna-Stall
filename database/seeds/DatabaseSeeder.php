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
        $this->command->info('Migrated iruna database 1/3');
        // $this->call(UsersTableSeeder::class);
        $path = 'database/irunaitem/item2.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Migrated iruna database 2/3');

        $path = 'database/irunaitem/item3.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Migrated iruna database 3/3');
    }
}
