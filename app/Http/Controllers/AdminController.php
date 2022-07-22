<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa\DataSiswa;
use App\Models\Siswa\DataOrtu;
use App\Models\Siswa\DataPendidikan;
use App\Models\Siswa\DataPembayaran;
use App\Models\Siswa\DataPesan;
use App\Models\Siswa\DataJurusan;
use App\Models\Siswa\DataBerkas;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }
    
    public function jurusan(request $request)
    {
        $pagination = 5;
        $datajurusan = DataJurusan::paginate($pagination);
        return view('admin.jurusan',compact('datajurusan'))->with('no',($request->input('page',1)-1)*$pagination);
    }
    
    public function formjurusan()
    {
        return view('admin.addjurusan');
    }
    
    public function addjurusan(request $request)
    {
        $validatedData = $request->validate([
            'nama_jurusan' => 'required|max:100',]);
            // dd($validatedData);
            DataJurusan::create($validatedData);
            $request->session()->flash('sukses', 'Data berhasil ditambah');
            return redirect('/datajurusan');
    }
    
    public function editjurusan($id)
    {
        $datajurusan = DataJurusan::where('id',$id)->get();
        return view('admin.upjurusan',compact('datajurusan'));
    }
    
    public function ejurusan(request $request, $id)
    {
        $validatedData = $request->validate([
            'nama_jurusan' => 'required|max:100',]);
            // dd($validatedData);
            $datajurusan = DataJurusan::where('id',$id)->update($validatedData);
            $request->session()->flash('sukses', 'Data berhasil diupdate');
            return redirect('/datajurusan');
    }

    public function deljurusan(request $request,$id)
    {
            DataJurusan::where('id',$id)->delete();
            $request->session()->flash('sukses', 'Data berhasil dihapus');
            return redirect('/datajurusan');
    }
    
    public function databerkas(request $request)
    {
        $pagination = 5;
        $databerkas = DataBerkas::paginate($pagination);
        return view('admin.databerkas',compact('databerkas'))->with('no',($request->input('page',1)-1)*$pagination);
    }

    public function dashboard()
    {
        // return view('admin.dashboard',[
        //     'datasiswa' => DataSiswa::where('nama_lengkap')->get()]);
        // $datasiswa = DataSiswa::all('nama_lengkap');
        // $datacount = $datasiswa->count();
        $datasiswa = DataSiswa::all();
        $dataortu = DataOrtu::all();
        $datapendidikan = DataPendidikan::all();
        $datapembayaran = DataPembayaran::all();
        $datapesan = DataPesan::all();
        return view('admin.dashboard',compact('datasiswa','dataortu','datapendidikan','datapembayaran','datapesan'));
    }

    public function loginadmin(request $request)
    {
        // dd($request);
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/admindashboard');
        }
            return back()->with('loginError','email atau passwrod salah');
    }

    public function logoutadmin(request $request){
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/admin');
    }

    public function datasiswa(request $request)
    {
        $pagination = 5;
        $datasiswa = DataSiswa::paginate($pagination);
        return view('admin.datasiswa',compact('datasiswa'))->with('no',($request->input('page',1)-1)*$pagination);
    }

    public function dataortu(request $request)
    {
        $pagination = 5;
        $dataortu = DataOrtu::paginate($pagination);
        return view('admin.dataortu',compact('dataortu'))->with('no',($request->input('page',1)-1)*$pagination);
    }

    public function datapendidikan(request $request)
    {
        $pagination = 5;
        $datapendidikan = DataPendidikan::paginate($pagination);
        return view('admin.datapendidikan',compact('datapendidikan'))->with('no',($request->input('page',1)-1)*$pagination);
    }

    public function datapesan(request $request)
    {
        $pagination = 5;
        $datapesan = DataPesan::paginate($pagination);
        return view('admin.datapesan',compact('datapesan'))->with('no',($request->input('page',1)-1)*$pagination);
    }

    public function datapembayaran(request $request)
    {
        $pagination = 5;
        $datapembayaran = DataPembayaran::paginate($pagination);
        return view('admin.datapembayaran',compact('datapembayaran'))->with('no',($request->input('page',1)-1)*$pagination);
    }

    public function datauser(request $request)
    {
        $pagination = 5;
        $datauser = User::paginate($pagination);
        return view('admin.datauser',compact('datauser'))->with('no',($request->input('page',1)-1)*$pagination);
    }

    public function show($id)
    {
        // dd($id);
        // $datasiswa = DataSiswa::where('id_siswa',$id)->get();
        $datasiswa = DataSiswa::join('data_pendidikans','data_pendidikans.id','=','data_siswas.id_siswa')->join('data_ortus','data_ortus.id_ortu','=','data_siswas.id_siswa')->where('id_siswa', $id)->get();
        return view('admin.showuser',compact('datasiswa'));
        
        // $dataortu = DataOrtu::all();
        // $datapendidikan = DataPendidikan::all();
        // $datasiswa = DB::table('data_siswas')->where('id_siswa',$id)->get();
        // // return $datasiswa;
        // view('admin.showuser',['datasiswa'=>$datasiswa]);
    }

    public function destroy($id)
    {
        $datasiswa = DataSiswa::join('data_pendidikans','data_pendidikans.id','=','data_siswas.id_siswa')->join('data_ortus','data_ortus.id_ortu','=','data_siswas.id_siswa')->where('id_siswa',$id)->delete();
        // $datasiswa = DataOrtu::join('data_pendidikans','data_pendidikans.id','=','data_ortus.id_ortu')->join('data_siswas','data_siswas.id_siswa','=','data_ortus.id_ortu')->where('id_ortu',$id)->delete();
        // $datasiswa = DataPendidikan::join('data_siswas','data_siswas.id_siswa','=','data_pendidikans.id')->join('data_ortus','data_ortus.id_ortu','=','data_pendidikans.id')->where('id',$id)->delete();
        // $data = DataSiswa::find('id_siswa',$id);
        // $data = DataOrtu::find('id_ortu',$id);
        // $data = DataPendidikan::find('id',$id);
        // $data->delete();
        return redirect('/datasiswa')->with('delete','Data telah dihapus');
    }

    public function update($id)
    {
        $datasiswa = DataSiswa::join('data_pendidikans','data_pendidikans.id','=','data_siswas.id_siswa')->join('data_ortus','data_ortus.id_ortu','=','data_siswas.id_siswa')->where('id_siswa', $id)->get();
        return view('admin.updatedata',compact('datasiswa'));
    }

    public function updated(request $request, $id)
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

        // return view('admin.updatedata',[
        //     'datasiswa' => DataSiswa::join('data_pendidikans','data_pendidikans.id','=','data_siswas.id_siswa')->join('data_ortus','data_ortus.id_ortu','=','data_siswas.id_siswa')->where('id_siswa', $id)->update($validatedData)]);
        $datasiswa = DataSiswa::join('data_pendidikans','data_pendidikans.id','=','data_siswas.id_siswa')->join('data_ortus','data_ortus.id_ortu','=','data_siswas.id_siswa')->where('id_siswa', $id)->update($validatedData);
        // $datasiswa = DataOrtu::where('id_ortu',$id)->update($validatedData);
        // $datasiswa = DataPendidikan::where('id',$id)->update($validatedData);
        // $datasiswa = DataSiswa::update($validatedData)->where('id_siswa',$id);
        // dd($datasiswa);
        // DataOrtu::where('id_ortu',$id)->update($validatedData);
        // DataPendidikan::where('id',$id)->update($validatedData);
        // DataOrtu::update($validatedData);
        // DataPendidikan::update($validatedData);
        // $request->session()->flash('sukses', 'Data berhasil diubah');
        $request->session()->flash('sukses','Data berhasil diubah');
        return redirect('/datasiswa');
    }
}
