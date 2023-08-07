<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pemesan',
        'jumlah_pemesanan',
        'no_hp_pemesanan',
    ];
}
