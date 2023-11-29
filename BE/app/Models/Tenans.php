<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenans extends Model
{
    protected $table = 'tenans'; // Sesuaikan dengan nama tabel yang digunakan
    protected $primaryKey = 'KodeTenan'; // Sesuaikan dengan nama primary key tabel

    protected $fillable = [
        'NamaTenan',
        'HP',
    ];
}
