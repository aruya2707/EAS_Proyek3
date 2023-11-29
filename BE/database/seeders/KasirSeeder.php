<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kasirs;

class KasirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kasirs::create([
            'KodeKasir' => 'KS22151104201',
            'Nama' => 'Ani',
            'HP' => '08221511042375',
        ]);

        Kasirs::create([
            'KodeKasir' => 'KS22151104202',
            'Nama' => 'Budi',
            'HP' => '08221511042735',
        ]);
    }
}
