<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gurustaff extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function tahun_ajaran()
    {
        return $this->belongsTo(tahun_ajaran::class);
    }
    public function role_guru()
    {
        return $this->belongsTo(role_guru::class);
    }
   
    protected $table = 'gurustaff';
    protected $fillable = [
        'nama',
        'NIP',
        'jenis_kelamin',
        'user_id',
        'jabatan_id'
    ];
}