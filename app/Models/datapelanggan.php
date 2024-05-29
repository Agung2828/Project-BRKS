<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datapelanggan extends Model
{
    use HasFactory;
    public $table = 'datapelanggan';
    public $fillable = [
        'nama',
        'namaaplikasi',
        'jenislayanan',
        'IpApp',
        'platform',
        'Jenis',
        'tanggalpermohonan',
    ];
}
