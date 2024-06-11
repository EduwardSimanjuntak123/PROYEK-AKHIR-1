<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tahun_ajaran extends Model
{
    use HasFactory;
    protected $table = 'tahun_ajaran';
    protected $fillable = [
        'tahun_ajaran',
        
    ];
    public function gurustaff()
    {
        return $this->hasMany(gurustaff::class);
    }
    public function data_sekolah()
    {
        return $this->hasMany(data_sekolah::class);
    }
    public function data_siswa()
    {
        return $this->hasMany(data_siswa::class);
    }
    public function data_sarpras()
    {
        return $this->hasMany(data_sarpras::class);
    }
}