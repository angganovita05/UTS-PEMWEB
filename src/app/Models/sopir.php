<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sopir extends Model
{
    use HasFactory;

    protected $table = 'sopir';

    protected $fillable = [
        'nama', 
        'jenis_kelamin', 
        'tanggal_lahir', 
        'nopol', 
        'jenis_aplikasi'
    ];
}
