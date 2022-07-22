<?php

namespace App\Models\Siswa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPembayaran extends Model
{
    protected $fillable = [
        'nama_siswa',
        'jurusan',
        'total_biaya',
        'bukti',
    ];
}
