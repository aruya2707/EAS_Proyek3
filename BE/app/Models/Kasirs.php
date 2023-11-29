<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasirs extends Model
{
    use HasFactory;

    protected $table = 'kasirs'; // Sesuaikan dengan nama tabel yang digunakan
    protected $primaryKey = 'KodeKasir'; // Sesuaikan dengan nama primary key tabel

    protected $fillable = [
        'Nama',
        'HP',
    ];
}
