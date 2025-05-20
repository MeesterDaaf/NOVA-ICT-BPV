<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InternshipsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $internships = [
            [
                'title' => 'Internship 1',
                // 'company_id' => 1,

                'description' => 'Description for Internship 1',
                'start_date' => '2023-01-01',
                'end_date' => '2023-06-01',
                'hours_per_week' => 20,
                'type' => 'full-time',
            ],
            [
                'title' => 'Internship 2',
                // 'company_id' => 1,

                'description' => 'Description for Internship 2',
                'start_date' => '2023-02-01',
                'end_date' => '2023-07-01',
                'hours_per_week' => 15,
                'type' => 'part-time',
            ],
            // Add more internships as needed
        ];
        
        DB::table('internships')->insert($internships);
    }
}
