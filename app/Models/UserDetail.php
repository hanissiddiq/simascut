<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserDetail extends Model
{
    //
     use HasFactory, SoftDeletes;

     protected $guarded = [];

     public function user()
    {
       return $this->belongsTo(User::class, 'user_id');
    }
     // 🔹 Relasi ke tabel Seksi
    public function seksi()
    {
        return $this->belongsTo(Seksi::class, 'seksi_id');
    }

    // 🔹 Relasi ke tabel Jabatan
    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class, 'jabatan_id');
    }
}
