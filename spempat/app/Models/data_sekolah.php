<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_sekolah extends Model
{
    use HasFactory;

   
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $table = 'data_sekolah';
    protected $fillable = [
        'NPSN',
        'user_id',
    ];
}
