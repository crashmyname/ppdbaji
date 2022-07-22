<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa\DataSiswa;
use App\Models\Siswa\DataOrtu;
use App\Models\Siswa\DataPendidikan;
use App\Models\Siswa\DataBerkas;
use App\Models\User;

class DataController extends Controller
{
    public function insertform(request $request)
    {
        $validatedData = $request->validate([
            'nisn' => 'required|max:100',
            'nama_lengkap' => 'required|max:255',
            'jenis_kelamin' => 'required|max:15',
            'tempat_lahir' => 'required|max:255',
            'tanggal_lahir' => 'required|max:255',
            'agama' => 'required|max:255',
            'alamat' => 'required|max:255',
            'rt' => 'required|max:255',
            'rw' => 'required|max:255',
            'kelurahan' => 'required|max:255',
            'kecamatan' => 'required|max:255',
            'kabupaten' => 'required|max:255',
            'provinsi' => 'required|max:255',
            'status_tempat_tinggal' => 'required|max:255',
            'no_telp' => 'required|max:255',
            'email' => 'required|max:255',
            'nama_ayah' => 'required|max:255',
            'tempat_lahir_ayah' => 'required|max:255',
            'tgl_lahir_ayah' => 'required|max:255',
            'pendidikan_ayah' => 'required|max:255',
            'pekerjaan_ayah' => 'required|max:255',
            'penghasilan_ayah' => 'required|max:255',
            'nama_ibu' => 'required|max:255',
            'tempat_lahir_ibu' => 'required|max:255',
            'tgl_lahir_ibu' => 'required|max:255',
            'pendidikan_ibu' => 'required|max:255',
            'pekerjaan_ibu' => 'required|max:255',
            'penghasilan_ibu' => 'required|max:255',
            'jns_pendaftaran' => 'required|max:255',
            'jalur_pendaftaran' => 'required|max:255',
            'nama_sekolah' => 'required|max:255',
            'stts_sekolah' => 'required|max:255',
            'alamat_sekolah' => 'required|max:255',
            'jurusan' => 'required|max:255',
            'jns_kelas' => 'required|max:255',
        ]);

        DataSiswa::create($validatedData);
        DataOrtu::create($validatedData);
        DataPendidikan::create($validatedData);
        $request->session()->flash('sukses', 'Data berhasil tersimpan');
        return redirect('/dashboard');
    }

    public function file(request $request)
    {
        return view('user.upberkas',[
            'databerkas' => User::join('data_pendidikans','data_pendidikans.id','=','users.id')->join('data_siswas','data_siswas.id_siswa','=','users.id')
            ->get()
        ]);
    }

    public function uploadfile(request $request)
    {
        $validatedData = $request->validate([
            'nama_siswa' => 'required|max:255',
            'jurusan' => 'required|max:255',
            'foto' => 'image|file|max:2048',
            'ijazah' => 'image|file|max:2048'
        ]);

        if($request->file('foto','ijazah')){
            $validatedData['foto'] = $request->file('foto')->store('post-images');
            $validatedData['ijazah'] = $request->file('ijazah')->store('post-images');
        }

        DataBerkas::create($validatedData);

        return redirect('/file')->with('upload','Berkas berhasil di upload');
    }
}
