<?php

namespace Database\Seeders;

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
        \App\Models\User::create([
            'name' => 'Harvey Mendoza',
            'email' => 'hpmendoza@up.edu.ph',
            'password' => Hash::make('adminharvey')
        ]);
        
    }
}
