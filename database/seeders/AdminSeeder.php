<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nama' => 'fatan',
            'email' => 'fatan@gmail.com',
            'password' => bcrypt('petugas'),
            'telp' => '001001001',
            'remember_token' => Str::random(60)
            // 'name' ,
            // 'level' => 'petugas',
            // 'nik' => '001001001',
            // 'no_telp' ,
            // 'email' ,
            // 'password' ,
        ]);
    }
}
