<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kata_Sambutan extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    use HasFactory;
    protected $table = 'kata_sambutan';
    protected $fillable = [
        'isi',
        'user_id',
       
    ];
}