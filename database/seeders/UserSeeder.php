<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'image' => 'images/profile/profile1.jpeg',
            'name' => 'Test',
            'email' => 'test@example.com',
            'password' => 'password',
        ]);
    }
}
