<?php

namespace App\Models\Siswa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class DataSiswa extends Model
{
    protected $fillable = [
            'nisn',
            'nama_lengkap',
            'jenis_kelamin',
            'tempat_lahir',
            'tanggal_lahir',
            'nik',
            'agama',
            'alamat',
            'rt',
            'rw',
            'kelurahan',
            'kecamatan',
            'kabupaten',
            'provinsi',
            'status_tempat_tinggal',
            'no_telp',
            'email',
            'no_kk',
    ];
}
