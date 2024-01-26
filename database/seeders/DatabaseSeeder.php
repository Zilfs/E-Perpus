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

        $data = [
            [
                'username' => 'Admin',
                'email' => 'Admin@example.com',
                'password' => bcrypt('admin123'),
                'role' => 'ADMIN',
                'nama_lengkap' => 'Admin',
                'alamat' => '-',
            ]
        ];

        foreach ($data as $item) {
            User::create($item);
        }
    }
}
