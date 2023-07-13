<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class barangjenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        DB::table('jenis')->insert([
            'jenisbarang' =>'Sparepart'
        ]);

        DB::table('jenis')->insert([
            'jenisbarang' =>'Elektronik'
        ]);

        DB::table('jenis')->insert([
            'jenisbarang' =>'Furniture'
        ]);


        DB::table('barang')->insert(
            [
                'namabarang' => 'Barang 1',
                'jenis' =>'1',
                'tgldikirim' => '2023-07-01',
                'tglditerima' => '2023-07-05',
        ]);  
        DB::table('barang')->insert(
            [
                'namabarang' => 'Barang 1',
                'jenis' =>'2',
                'tgldikirim' => '2023-07-01',
                'tglditerima' => '2023-07-05',
        ]);
        DB::table('barang')->insert(
            [
                'namabarang' => 'Barang 1',
                'jenis' =>'3',
                'tgldikirim' => '2023-07-01',
                'tglditerima' => '2023-07-05',
        ]);
    }
}
