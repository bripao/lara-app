<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FlightsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companies = [];

        foreach (range(1, 10) as $index) {
            $company = [
                'name' => $name = "Company $index",
                'address' => "Address $name",
                'website' => "Website $name",
            ];

            $companies[] = $company;
        }

        DB::table('companies')->insert($companies);
    }
}
