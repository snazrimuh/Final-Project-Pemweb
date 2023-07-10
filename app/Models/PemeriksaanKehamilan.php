<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemeriksaanKehamilan extends Model
{
    use HasFactory;

    protected $table = 'pemeriksaan_kehamilan';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_kehamilan',
        'lingkar_perut',
        'tb_ibu',
        'bb_ibu',
        'sistole',
        'diastole',
    ];

    public function riwayatKehamilan()
    {
        return $this->belongsTo(RiwayatKehamilan::class, 'id_kehamilan', 'id_kehamilan');
    }
}
