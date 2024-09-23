<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Product::create([
            'title' => 'Irodori',
            'artist' => 'KanoeRana',
            'length' => '3 menit 1 detik',
            'description' => 'opening call of the night'
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('12345'),
            'level' => 'admin'
         ]);

         User::create([
            'name' => 'user',
            'email' => 'user@example.com',
            'password' => bcrypt('12345'),
            'level' => 'user'
         ]);
    }
}
