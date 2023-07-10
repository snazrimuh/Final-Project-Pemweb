<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Wilayah_Kelurahan;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
    protected $fillable = [
        'name', 'email', 'password', 'role', 'id_kelurahan',
    ];

    // ...

    public function kelurahan()
    {
        return $this->belongsTo(Wilayah_Kelurahan::class, 'id_kelurahan', 'id_kelurahan');
    }
}
