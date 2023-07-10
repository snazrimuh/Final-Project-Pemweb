<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wilayah_Kelurahan extends Model
{
    protected $table = 'wilayah_kelurahan';
    protected $primaryKey = 'id_kelurahan';
    public $timestamps = false;

    protected $fillable = [
        'nama_kelurahan',
    ];
}
