<?php

namespace Database\Seeders;

use App\Models\Nota;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Nota::create([
            'KodeNota' => 'NO22151104201',
            'KodeTenan' => 'TK22151104201',
            'KodeKasir' => 'KS22151104201',
            'TglNota' => now()->toDateString(),
            'JamNota' => now()->toTimeString(),
            'JumlahBelanja' => 100000,
            'Diskon' => 2,
            'Total' => 98000,
        ]);

        Nota::create([
            'KodeNota' => 'NO22151104202',
            'KodeTenan' => 'TK22151104201',
            'KodeKasir' => 'KS22151104202',
            'TglNota' => now()->toDateString(),
            'JamNota' => now()->toTimeString(),
            'JumlahBelanja' => 50000,
            'Diskon' => 1,
            'Total' => 49500,
        ]);

        Nota::create([
            'KodeNota' => 'NO22151104203',
            'KodeTenan' => 'TK22151104201',
            'KodeKasir' => 'KS22151104202',
            'TglNota' => now()->toDateString(),
            'JamNota' => now()->toTimeString(),
            'JumlahBelanja' => 50000,
            'Diskon' => 1,
            'Total' => 49500,
        ]);

        Nota::create([
            'KodeNota' => 'NO22151104204',
            'KodeTenan' => 'TK22151104201',
            'KodeKasir' => 'KS22151104202',
            'TglNota' => now()->toDateString(),
            'JamNota' => now()->toTimeString(),
            'JumlahBelanja' => 50000,
            'Diskon' => 1,
            'Total' => 49500,
        ]);

        Nota::create([
            'KodeNota' => 'NO22151104205',
            'KodeTenan' => 'TK22151104201',
            'KodeKasir' => 'KS22151104202',
            'TglNota' => now()->toDateString(),
            'JamNota' => now()->toTimeString(),
            'JumlahBelanja' => 50000,
            'Diskon' => 1,
            'Total' => 49500,
        ]);
    }
}