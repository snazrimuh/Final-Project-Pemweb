<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemeriksaanAnak extends Model
{
    use HasFactory;

    protected $table = 'pemeriksaan_anak';

    protected $primaryKey = 'id_pemeriksaan_anak';

    protected $fillable = [
        'nik_anak',
        'usia',
        'tb_anak',
        'bb_anak',
        'imt',
        'vitamin',
        'status_tb',
        'status_bb',
        'id_parameter',
        'status_stunting',
    ];

    public function anak()
    {
        return $this->belongsTo(Anak::class, 'nik_anak', 'nik_anak');
    }
}
