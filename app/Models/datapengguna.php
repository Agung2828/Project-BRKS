<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datapengguna extends Model
{
    use HasFactory;
    public $table = 'datapengguna';
    public $fillable = [
        'nama',
        'namaaplikasi',
        'jenisLayanan',
        'IpApp',
        'platform',
        'kebutuhan',
        'Jenis',
        'tanggalpermohonan',
        'Downtime',
    ];

    // public function aplikasi()
    // {
    //     return $this->belongsTo(dataaplikasi::class);
    // }
}
