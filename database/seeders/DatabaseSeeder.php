<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'evannn4k',
            'email' => 'evan@gmail.com',
            'role' => 'admin',
            'password' => bcrypt("evan"),
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'password' => bcrypt("evan"),
        ]);
        
        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'role' => 'user',
            'password' => bcrypt("user"),
        ]);
    }
}
