<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriverSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('drivers')->insert([
            ['name' => "Opung Dongoran", 'order' => 1, 'rating' => 5],
            ['name' => "Irnanto Suryono", 'order' => 1, 'rating' => 4],
            ['name' => "Salman Rajata", 'order' => 2, 'rating' => 8],
            ['name' => "Asmuni Uwais", 'order' => 3, 'rating' => 10],
            ['name' => "Irwan Halim", 'order' => 3, 'rating' => 13],
        ]);
    }
}
