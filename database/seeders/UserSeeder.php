<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'juanjo',
            'email' => 'juanjosr98@gmail.com',
            'password' => bcrypt(001122)
        ]);

        User::factory(99)->create();
    }
}
