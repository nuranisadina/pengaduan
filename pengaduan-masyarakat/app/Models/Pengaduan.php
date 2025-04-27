<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengaduan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nama_pelapor',
        'judul_pengaduan',
        'isi_pengaduan',
        'kategori',
        'status',
        'tanggal_pengaduan',
    ];
    
}
