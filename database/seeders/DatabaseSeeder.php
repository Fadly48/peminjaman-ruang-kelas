<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Membuat 10 pengguna menggunakan factory
        User::factory(10)->create();

        // Atau membuat pengguna tertentu
        DB::table('users')->insert([
            'name' => 'Dewayne Considine',
            'email' => 'icrist@example.net',
            'username' => 'dewayne_considine',  // Jangan lupa mengisi username
            'password' => bcrypt('password123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    
    }
}
