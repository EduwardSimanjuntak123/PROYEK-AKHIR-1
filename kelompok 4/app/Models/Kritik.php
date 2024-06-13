<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kritik extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'email', 'isi_kritik', 'ditampilkan'];

    public function balasan()
    {
        return $this->hasMany(Balasan::class);
    }
}
