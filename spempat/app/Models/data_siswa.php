<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_siswa extends Model
{
    
    protected $table = 'data_siswa';
    use HasFactory;
    protected $fillable = [
        'jumlah_tingkat_7',
        'jumlah_tingkat_8',
        'jumlah_tingkat_9',
        'jumlah_laki_laki',
        'jumlah_perempuan',
    ];
    public function tahun_ajaran()
    {
        return $this->belongsTo(tahun_ajaran::class);
    }
}