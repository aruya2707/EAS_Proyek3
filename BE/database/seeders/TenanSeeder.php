<?php

namespace Database\Seeders;

use App\Models\Tenans;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TenanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tenans::create([
            'KodeTenan' => 'TK22151104201',
            'NamaTenan' => 'Alya maret',
            'HP' => '08221511042375',
        ]);

        Tenans::create([
            'KodeTenan' => 'TK22151104202',
            'NamaTenan' => 'Alya mart',
            'HP' => '08221511042375',
        ]);
    }
}
