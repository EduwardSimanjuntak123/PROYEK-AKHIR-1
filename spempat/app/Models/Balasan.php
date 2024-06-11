<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balasan extends Model
{
    use HasFactory;

    protected $fillable = ['isi_balasan', 'user_id', 'kritik_id'];

    public function kritik()
    {
        return $this->belongsTo(Kritik::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}