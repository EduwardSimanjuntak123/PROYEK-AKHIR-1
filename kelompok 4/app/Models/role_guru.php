<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role_guru extends Model
{
    use HasFactory;
    protected $table = 'role_guru';
    protected $fillable = [
        'jabatan',
        
    ];
    public function gurustaff()
    {
        return $this->hasMany(gurustaff::class);
    }
}