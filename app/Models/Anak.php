<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Wilayah_Kelurahan;



class Anak extends Model
{
    use HasFactory;
    protected $table = 'anak';
    protected $primaryKey = 'nik_anak';
    public $timestamps = true;

    protected $fillable = [
        'nik_anak',
        'kk',
        'nama_anak',
        'alamat_anak',
        'tgl_lahir_anak',
        'id_kelurahan',
    ];
    public function kelurahan()
    {
        return $this->belongsTo(Wilayah_Kelurahan::class, 'id_kelurahan', 'id_kelurahan');
    }
}

