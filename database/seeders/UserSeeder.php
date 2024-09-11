<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name_en' => 'Admin',
            'email' => 'admin@gmail.com',
            'phone'=>'01728839989',
            'password' => Hash::make('123456'),
        ]);
    }
}
