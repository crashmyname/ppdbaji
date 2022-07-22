<?php

namespace App\Models\Siswa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataOrtu extends Model
{
    protected $fillable = [
        'nama_ayah',
            'nik_ayah',
            'tempat_lahir_ayah',
            'tgl_lahir_ayah',
            'pendidikan_ayah',
            'pekerjaan_ayah',
            'penghasilan_ayah',
            'nama_ibu',
            'nik_ibu',
            'tempat_lahir_ibu',
            'tgl_lahir_ibu',
            'pendidikan_ibu',
            'pekerjaan_ibu',
            'penghasilan_ibu',
    ];
}
