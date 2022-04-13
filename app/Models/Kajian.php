<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kajian extends Model
{
    protected $table = 'paket_kajians';
    protected $fillable = [
        'nama_paket',
        'detail_paket',
        'tanggal_kajian',
        'tempat',
        'waktu_kajian',
        'tgl_beli_tiket',
        'tgl_penutupan_tiket',
        'harga_tiket',
        'stok_tiket'
    ];
}
