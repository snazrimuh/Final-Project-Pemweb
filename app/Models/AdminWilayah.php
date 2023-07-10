<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminWilayah extends Model
{
    protected $table = 'admin_wilayah';
    protected $primaryKey = 'id_admin_wilayah';
    protected $fillable = ['username', 'email', 'password', 'id_kelurahan'];
    
    // Relasi dengan tabel Kelurahan
    public function kelurahan()
    {
        return $this->belongsTo(Wilayah_Kelurahan::class, 'id_kelurahan', 'id_kelurahan');
    }
}
