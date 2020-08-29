<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserstableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(user::class, 10)->create();
        // User::create([
        //     'name' => 'Pedro',
        //     'email' => 'pedroicaro35@gmail.com',
        //     'password' => bcrypt('123456'),
        // ]);

    }
}
