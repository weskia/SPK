<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'username'=> 'Weskia',
            'email'=>'weskiasefiola28@gmail.com',
            'password'=> bcrypt('12345'),
            'remember_token'=> Str::random(60),
        ]);
    }
}
