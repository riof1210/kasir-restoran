<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategorisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori1 = Kategori::create(['kategori_barang' => 'Makanan']);
        $kategori2 = Kategori::create(['kategori_barang' => 'Minuman']);
    }
}
