<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jenis extends Model
{
    protected $fillable = [
        'nama_jenis', 'kode_jenis', 'keterangan',
    ];
}
