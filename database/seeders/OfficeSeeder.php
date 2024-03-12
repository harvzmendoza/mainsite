<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OfficeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Office::create([
            'office_name' => 'Office of the Dean',
            'office_code' => 'OD',
        ]);
        \App\Models\Office::create([
            'office_name' => 'Office of the Associate Dean',
            'office_code' => 'OAD',
        ]);

        \App\Models\Office::create([
            'office_name' => 'Institute of Government Law Reform',
            'office_code' => 'IGLR',
        ]);

        \App\Models\Office::create([
            'office_name' => 'Institute of Human Rights',
            'office_code' => 'IHR',
        ]);

        \App\Models\Office::create([
            'office_name' => 'Institute for the Administrative of Justice',
            'office_code' => 'IAJ',
        ]);

        \App\Models\Office::create([
            'office_name' => 'Institute of International Legal Studies',
            'office_code' => 'IILS',
        ]);

        \App\Models\Office::create([
            'office_name' => 'Institute for Maritime Affairs and Law of the Sea',
            'office_code' => 'IMLOS',
        ]);

        \App\Models\Office::create([
            'office_name' => 'Information and Publication Division',
            'office_code' => 'IPD',
        ]);

        \App\Models\Office::create([
            'office_name' => 'Training and Convention Division',
            'office_code' => 'TCD',
        ]);

        \App\Models\Office::create([
            'office_name' => 'Office of the National Administrative Register',
            'office_code' => 'ONAR',
        ]);

        \App\Models\Office::create([
            'office_name' => 'Maintenance Section',
            'office_code' => 'MS',
        ]);

        \App\Models\Office::create([
            'office_name' => 'Property Supply Section',
            'office_code' => 'PPS',
        ]);

        \App\Models\Office::create([
            'office_name' => 'Human Resource Development and Records Section',
            'office_code' => 'HRDRS',
        ]);

        \App\Models\Office::create([
            'office_name' => 'General Services Section',
            'office_code' => 'GSS',
        ]);

        \App\Models\Office::create([
            'office_name' => 'Collecting and Disbursing Section',
            'office_code' => 'CDS',
        ]);

        \App\Models\Office::create([
            'office_name' => 'Law Internship Center',
            'office_code' => 'LIC',
        ]);

        \App\Models\Office::create([
            'office_name' => 'Library',
            'office_code' => 'LIB',
        ]);

        \App\Models\Office::create([
            'office_name' => 'Office of College Secretary',
            'office_code' => 'OCS',
        ]);

        \App\Models\Office::create([
            'office_name' => 'Office of Legal Aid',
            'office_code' => 'OLA',
        ]);

        \App\Models\Office::create([
            'office_name' => 'Accounting',
            'office_code' => 'ACC',
        ]);

        \App\Models\Office::create([
            'office_name' => 'Alumni',
            'office_code' => 'ALU',
        ]);

        \App\Models\Office::create([
            'office_name' => 'Student',
            'office_code' => 'STU',
        ]);


        
    }
}
