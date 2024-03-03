<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul_foto',
        'deskripsi',
        'lokasi_file',
        'album_id',
        'users_id',
    ];
    protected $table = 'foto';

    //nilai balik ke user
    public function user()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
    //nilai ke komentar sudah umpan balik
    public function komentar()
    {
        return $this->hasMany(Komentar::class, 'foto_id', 'id');
    }
    //nilai ke like sudah umpan balik
    public function like()
    {
        return $this->hasMany(Like::class, 'foto_id', 'id');
    }
    //nilai ke favorite sudah umpan balik
    public function favorite()
    {
        return $this->hasMany(Favorite::class, 'foto_id', 'id');
    }
}
