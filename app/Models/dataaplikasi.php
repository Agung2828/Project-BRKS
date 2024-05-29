<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataaplikasi extends Model
{
    use HasFactory;
    public $table = 'dataaplikasi';
    public $fillable = [
        'namaaplikasi',
    ];

    // public function aplikasi()
    // {
    //     return $this->hasMany(dataaplikasi::class);
    // }
}
