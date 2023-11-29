<?php

namespace Database\Seeders;

use App\Models\Barangs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Barangs::insert([
            [
                'KodeBarang'=> 'BRG[NIM]11',
                'NamaBarang'=> 'Barang1',
                'Satuan' => 'dus',
                'HargaSatuan'=> 'Rp.20000',
                'Stok'=>50,
            ],
            [
                'KodeBarang'=> 'BRG[NIM]12',
                'NamaBarang'=> 'Barang2',
                'Satuan' => 'dus',
                'HargaSatuan'=> 'Rp.20000',
                'Stok'=>50,   
            ],
            [
                'KodeBarang'=> 'BRG[NIM]13',
                'NamaBarang'=> 'Barang3',
                'Satuan' => 'dus',
                'HargaSatuan'=> 'Rp.20000',
                'Stok'=>50,    
            ],
            [
                'KodeBarang'=> 'BRG[NIM]14',
                'NamaBarang'=> 'Barang4',
                'Satuan' => 'dus',
                'HargaSatuan'=> 'Rp.20000',
                'Stok'=>50,    
            ],
            [
                'KodeBarang'=> 'BRG[NIM]15',
                'NamaBarang'=> 'Barang5',
                'Satuan' => 'dus',
                'HargaSatuan'=> 'Rp.20000',
                'Stok'=>50,    
            ]

        ]);
    }
}
