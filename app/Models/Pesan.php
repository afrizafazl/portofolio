<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'email',
        'nomor_telepon',
        'pesan',
    ];
    

}
