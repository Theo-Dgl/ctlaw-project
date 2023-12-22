<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            "name"=> "admin",
            "username"=> "admin",
            "email"=> "admin@email.com",
            "password"=> bcrypt("admin"),
            "is_admin" => true,   
        ]);
    }
}
