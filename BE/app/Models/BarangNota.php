<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangNota extends Model
{
    use HasFactory;

    protected $table = 'barangnotas'; // Sesuaikan dengan nama tabel yang digunakan
    
    protected $fillable = [
        'KodeNota',
        'KodeBarang',
        'JumlahBarang',
        'HargaSatuan',
        'Jumlah',
    ];

    // Jika Anda ingin menonaktifkan pengelolaan kolom waktu otomatis
    // public $timestamps = false;

    public function nota()
    {
        return $this->belongsTo(Nota::class, 'KodeNota');
    }

    public function barang()
    {
        return $this->belongsTo(Barangs::class, 'KodeBarang');
    }
}
