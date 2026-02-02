<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newUser = new User();
        $newUser->name = 'mirko';
        $newUser->email = 'mirko@mail.it';
        $newUser->password = bcrypt('password123');
        $newUser->save();
    }
}
