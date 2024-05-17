<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    use HasFactory;
//untuk relasi
public function user()
{
    return $this->belongsTo(User::class);
}

    protected $table = 'berita';
    protected $fillable = [
        'judul',
        'isi',
        'file',
        'user_id'
    ];
}
