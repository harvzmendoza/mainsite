<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Status::create([
            'status_name' => 'Pending',
        ]);
        \App\Models\Status::create([
            'status_name' => 'Transferred',
        ]);
        \App\Models\Status::create([
            'status_name' => 'Completed',
        ]);
        \App\Models\Status::create([
            'status_name' => 'Cancelled',
        ]);
    }
}
