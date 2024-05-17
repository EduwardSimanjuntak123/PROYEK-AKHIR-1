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

protected $table = 'gurustaff';
protected $fillable = [
    'nama',
    'jenis_kelamin',
    'tanggallahir',
    'alamat_lahir',
    'file',
    'user_id'
];
}

