<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ElectreCriteriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('electre_criterias')->insert([
            ['criteria' => 'jarak dengan pusat niaga terdekat(km)', 'weight' => 6],
            ['criteria' => 'kepadatan penduduk disekitar lokasi (orang/km2)', 'weight' => 4],
            ['criteria' => 'jarak dari pabrik(km)', 'weight' => 5],
            ['criteria' => 'jarak dengan gudang yang sudah ada (km)', 'weight' => 2],
            ['criteria' => 'harga tanah untuk lokasi (x1000 Rp/m2)', 'weight' => 2],
        ]);
    }
}
