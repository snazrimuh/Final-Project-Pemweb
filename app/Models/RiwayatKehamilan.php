<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatKehamilan extends Model
{
    use HasFactory;

    protected $table = 'riwayat_kehamilan';
    protected $primaryKey = 'id_kehamilan';
    public $timestamps = true;

    protected $fillable = [
        'id_kehamilan',
        'nik_ibu',
        'tgl_melahirkan',
    ];

    public function ibu()
    {
        return $this->belongsTo(Ibu::class, 'nik_ibu', 'nik_ibu');
    }
    
    public function pemeriksaanKehamilan()
    {
        return $this->hasMany(PemeriksaanKehamilan::class, 'id_kehamilan');
    }
}
