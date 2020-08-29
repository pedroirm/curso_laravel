<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's datab ase.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserstableSeeder::class);
    }
}
