<?php

namespace App\Models\Siswa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPesan extends Model
{
    protected $fillable = [
        'nama_siswa',
        'pesan',
    ];
}
