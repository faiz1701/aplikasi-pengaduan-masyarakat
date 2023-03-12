<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'faiz',
            'level' => 'masyarakat',
            'nik' => '001001001',
            'no_telp' => '001001001',
            'email' => 'faiz@gmail.com',
            'password' => bcrypt('masyarakat'),
            'remember_token' => Str::random(60)
        ]);

        User::create([
            'name' => 'fatan',
            'level' => 'petugas',
            'nik' => '001001001',
            'no_telp' => '001001001',
            'email' => 'fatan@gmail.com',
            'password' => bcrypt('petugas'),
            'remember_token' => Str::random(60)
        ]);

        User::create([
            'name' => 'admin',
            'level' => 'admin',
            'nik' => '001001001',
            'no_telp' => '001001001',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'remember_token' => Str::random(60)
        ]);
    }
}
