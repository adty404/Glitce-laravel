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
            'email' => 'aditya@glitce.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'), //secret password
            'remember_token' => Str::random(10),
        ]);
    }
}
