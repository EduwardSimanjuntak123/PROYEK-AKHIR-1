<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_sarpras extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    use HasFactory;
    protected $table = 'data_sarpras';
    protected $fillable = [
        'nama_sarpras',
        'jumlah_sarpras',
        'user_id',
    ];
}
