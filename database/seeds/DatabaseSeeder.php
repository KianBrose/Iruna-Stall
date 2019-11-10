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
    }
}
