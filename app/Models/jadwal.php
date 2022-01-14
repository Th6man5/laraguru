<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'id_guru',
        'id_kelas',
        'id_ruangan',
        'mulai',
        'akhir',
        'tanggal'
    ];
}
