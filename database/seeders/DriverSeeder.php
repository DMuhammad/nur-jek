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
            [
                'name' => "Opung Dongoran",
                'order' => 1,
                'rating' => 5,
                'image' => 'img-1'
            ],
            [
                'name' => "Irnanto Suryono",
                'order' => 1,
                'rating' => 4,
                'image' => 'img-2'
            ],
            [
                'name' => "Salman Rajata",
                'order' => 2,
                'rating' => 8,
                'image' => 'img-3'
            ],
            [
                'name' => "Asmuni Uwais",
                'order' => 3,
                'rating' => 10,
                'image' => 'img-4'
            ],
            [
                'name' => "Irwan Halim",
                'order' => 3,
                'rating' => 13,
                'image' => 'img-5'
            ],
        ]);
    }
}
