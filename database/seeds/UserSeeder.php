<?php

use App\User;
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
        User::create([
            'name' => 'Aditya Prasetyo',
            'username' => 'aditya',
            'email' => 'aditya@glitce.com',
            'email_verified_at' => now(),
            'password' => bcrypt('rahasia'), //secret password
            'photo' => 'https://www.kindpng.com/picc/m/24-248253_user-profile-default-image-png-clipart-png-download.png',
            'remember_token' => Str::random(10),
        ]);
    }
}
