<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barangs extends Model
{
    use HasFactory;
    protected $table = 'barangs'; // Sesuaikan dengan nama tabel yang digunakan
    protected $primaryKey = 'KodeBarang';
    protected $fillable = [
        'NamaBarang',
        'Satuan',
        'HargaSatuan',
        'Stok',
    ];
}
