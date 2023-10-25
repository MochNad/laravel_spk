<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ElectreAlternativesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('electre_alternatives')->insert([
            ['name' => 'Pluit'],
            ['name' => 'Cibitung'],
            ['name' => 'Pulomas'],
            ['name' => 'Cengkareng'],
            ['name' => 'Cakung'],
            ['name' => 'Pulo Gadung'],
            ['name' => 'Kelapa Gading'],
            ['name' => 'Sunter'],
        ]);
    }
}
