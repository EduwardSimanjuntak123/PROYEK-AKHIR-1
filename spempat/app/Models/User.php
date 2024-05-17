<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function berita()
    {
        return $this->hasMany(berita::class);
    }
    public function gurudanstaff()
    {
        return $this->hasMany(gurustaff::class);

    }
    public function data_sekolah()
    {
        return $this->hasMany(data_sekolah::class);

    }
    public function kata_Sambutan()
    {
        return $this->hasMany(kata_Sambutan::class);

    }
    public function data_sarpras()
    {
        return $this->hasMany(data_sarpras::class);

    }
    public function about_us()
    {
        return $this->hasMany(about_us::class);

    }
    public function galeri()
    {
        return $this->hasMany(galeri::class);

    }
}
