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
        // $this->call(UserSeeder::class);
        $this->call('EstatusSeeder');
        $this->command->info('EstatusSeeder have been created!');
        $this->call('ResponsableSeeder');
        $this->command->info('ResponsableSeeder have been created!');
        $this->call('UbicacionSeeder');
        $this->command->info('UbicacionSeeder have been created!');
    }
}
