<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_lengkap',
        'no_telepon',
        'jenis_kelamin',
        'alamat',
        'bio',
        'foto_profile',
        'email',
        'password',
    ];

    //relasi ke foto sudah umpan balik
    public function foto()
    {
        return $this->hasMany(Foto::class, 'users_id', 'id');
    }
    //relasi ke komentar sudah umpan balik
    public function komentar()
    {
        return $this->hasMany(Komentar::class, 'users_id', 'id');
    }
    //relasi ke like sudah umpan balik
    public function like()
    {
        return $this->hasOne(Like::class, 'users_id', 'id');
    }
    //relasi ke favorite sudah umpan balik
    public function favorite()
    {
        return $this->hasOne(Favorite::class, 'users_id', 'id');
    }
    //relasi ke follows sudah umpan balik
    public function follows()
    {
        return $this->hasOne(Follows::class, 'users_id', 'id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
