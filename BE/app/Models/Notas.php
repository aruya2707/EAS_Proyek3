<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    use HasFactory;

    protected $table = 'notas'; // Sesuaikan dengan nama tabel yang digunakan
    protected $primaryKey = 'KodeNota'; // Sesuaikan dengan nama primary key tabel

    protected $fillable = [
        'KodeTenan',
        'KodeKasir',
        'TglNota',
        'JamNota',
        'JumlahBelanja',
        'Diskon',
        'Total',
    ];

    public function tenan()
    {
        return $this->belongsTo(Tenan::class, 'KodeTenan');
    }

    public function kasir()
    {
        return $this->belongsTo(Kasir::class, 'KodeKasir');
    }
}
