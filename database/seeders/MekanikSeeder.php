<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MekanikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mekaniks')->insert([
            'nama_sparepart' => 'laker',
            'kode_sparepart' => '6032',
            'jumlah' => 67,
            'tempat' => 'rak',
            'min_stock' => 3,
            'max_stock' => 5,
         ]);
    }
}
