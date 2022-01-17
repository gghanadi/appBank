<?php

namespace Database\Seeders;

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
        \App\Models\User::create([
            'username'=>'admin123',
            'name'=>'admin',
            'email'=>'gannet@gmail.com',
            'role'=>'1',
            'norekening'=>'000000000000',
            'password'=>bcrypt('check123'),
        ]);
    }
}
