<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balasan extends Model
{
    use HasFactory;

    protected $fillable = ['kritik_id', 'isi_balasan'];

    public function kritik()
    {
        return $this->belongsTo(Kritik::class);
    }
}
