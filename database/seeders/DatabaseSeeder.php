<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

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

        User::create([
            'username' => 'Budi',
            'email' => 'budi@gmail.com',
            'password' => bcrypt('budi'),
            'level' => 'admin'
        ]);

        User::create([
            'username' => 'Tono',
            'email' => 'tono@gmail.com',
            'password' => bcrypt('tono'),
            'level' => 'client'
        ]);

        $this->call([ProductSeeder::class]);
    }
}
