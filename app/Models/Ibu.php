<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ibu extends Model
{
    use HasFactory;

    protected $table = 'ibu';
    protected $primaryKey = 'nik_ibu';
    protected $fillable = ['nik_ibu', 'kk', 'nama_ibu', 'alamat_ibu', 'tgl_lahir_ibu', 'id_kelurahan'];

    public function kelurahan()
    {
        return $this->belongsTo(Wilayah_Kelurahan::class, 'id_kelurahan', 'id_kelurahan');
    }
}
