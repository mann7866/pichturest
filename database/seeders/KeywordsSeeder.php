<?php

namespace Database\Seeders;

use App\Models\Keywords;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KeywordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Keywords::create([
            'users_id' => '1',
            'image' => 'images/posts/image1.jpeg',
            'name' => 'anime overpowwer',
            'about' => 'berisi tentang anime anime overpowwer, anime anime isekai',
        ]);
        Keywords::create([
            'users_id' => '1',
            'image' => 'images/posts/image1.jpeg',
            'name' => 'anime cupu',
            'about' => 'berisi tentang anime anime cupu, anime anime isekai',
        ]);
    }
}
