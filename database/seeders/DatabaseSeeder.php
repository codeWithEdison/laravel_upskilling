<?php

namespace Database\Seeders;

use App\Models\Posts;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Posts::factory(5)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Posts::create([
            'title' => 'post 1',
            'author' => 'Edsion',
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsa dignissimos repellat atque, molestias.',
        ]);

        Posts::create([
            'title' => 'post 2',
            'author' => 'Edsion',
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.',
        ]);
    }
}
