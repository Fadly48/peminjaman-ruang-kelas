<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\RuanganSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Membuat 10 pengguna menggunakan factory
        User::factory(10)->create();

        // Membuat pengguna admin
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Memanggil RuanganSeeder
        $this->call([
            RuanganSeeder::class, // Pastikan ini ada
        ]);
    }
}