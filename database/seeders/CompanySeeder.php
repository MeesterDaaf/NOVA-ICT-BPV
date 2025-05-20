<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companies = [
            [
                'name' => 'Tech Innovations',
                'address' => '123 Tech Lane',
                'city' => 'Silicon Valley',
                'zipcode' => '94043',
                'domain' => 'techinnovations.com',
                'phone' => '+1-800-555-0199',
            ],
            [
                'name' => 'Green Solutions',
                'address' => '456 Eco St.',
                'city' => 'San Francisco',
                'zipcode' => '94105',
                'domain' => 'greensolutions.com',
                'phone' => '+1-800-555-0123',
            ],
            [
                'name' => 'Health Corp',
                'address' => '789 Wellness Ave.',
                'city' => 'Los Angeles',
                'zipcode' => '90001',
                'domain' => 'healthcorp.com',
                'phone' => '+1-800-555-0456',
            ],
        ];

        DB::table('companies')->insert($companies);
    }
}
