@include('admin.header')

<div class="container-fluid">
    <table class="responsive">
        @foreach ($datasiswa as $item)
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">DATA SISWA</h3>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="Nisn" class="col-sm-4 col-form-label">NISN (*)</label>
                            <div class="col-sm-8">
                                <input type="text" name="nisn" class="form-control" id="Nisn" value="{{$item['nisn']}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Nama Lengkap" class="col-sm-4 col-form-label">NAMA LENGKAP (*)</label>
                            <div class="col-sm-8">
                                <input type="text" name="nama_lengkap" class="form-control" id="nama" value="{{$item['nama_lengkap']}}" readonly>
                            </div>
                        </div>
                        <!-- OPTION -->
                        <div class="form-group row">
                            <label for="Jenis Kelamin" class="col-sm-4 col-form-label">JENIS KELAMIN (*)</label>
                            <div class="col-sm-8">
                                <input type="text" name="nama_lengkap" class="form-control" id="jenis_kelamin" value="{{$item['jenis_kelamin']}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tmp_lahir" class="col-sm-4 col-form-label">TEMPAT LAHIR (*)</label>
                            <div class="col-sm-8">
                                <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" value="{{$item['tempat_lahir']}}" readonly>
                            </div>
                        </div>
                        <!-- TANGGAL -->
                        <div class="form-group row">
                            <label for="Tanggal Lahir" class="col-sm-4 col-form-label">TANGGAL LAHIR (*)</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                <input type="date" name="tanggal_lahir" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" value="{{$item['tanggal_lahir']}}" data-mask readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="agama" class="col-sm-4 col-form-label">AGAMA (*)</label>
                            <div class="col-sm-8">
                                <input type="text" name="agama" class="form-control" id="agama" value="{{$item['agama']}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-4 col-form-label">ALAMAT (*)</label>
                            <div class="col-sm-8">
                                <input type="text" name="alamat" class="form-control" id="alamat" value="{{$item['alamat']}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Rt" class="col-sm-4 col-form-label">RT / RW (*)</label>
                            <div class="col-sm-4">
                                <input type="text" name="rt" class="form-control" id="Rt" value="{{$item['rt']}}" readonly>
                            </div>
                        <div class="col-sm-4">
                            <input type="text" name="rw" class="form-control" id="Rw" value="{{$item['rw']}}" readonly>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="Kelurahan" class="col-sm-4 col-form-label">KELURAHAN (*)</label>
                        <div class="col-sm-8">
                            <input type="text" name="kelurahan" class="form-control" id="Kelurahan" value="{{$item['kelurahan']}}" readonly>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="card-body">
                    <div class="form-group row">
                    <label for="Kecamatan" class="col-sm-4 col-form-label">KECAMATAN (*)</label>
                    <div class="col-sm-8">
                        <input type="text" name="kecamatan" class="form-control" id="Kecamatan" value="{{$item['kecamatan']}}" readonly>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="Kabupaten" class="col-sm-4 col-form-label">KABUPATEN (*)</label>
                    <div class="col-sm-8">
                        <input type="text" name="kabupaten" class="form-control" id="Kabupaten" value="{{$item['kabupaten']}}" readonly>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="Propinsi" class="col-sm-4 col-form-label">PROPINSI (*)</label>
                    <div class="col-sm-8">
                        <input type="text" name="provinsi" class="form-control" id="Propinsi" value="{{$item['provinsi']}}" readonly>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="Status Tinggal" class="col-sm-4 col-form-label">STATUS TEMPAT TINGGAL (*)</label>
                    <div class="col-sm-8">
                        <input type="text" name="stts_tinggal" class="form-control" id="Propinsi" value="{{$item['status_tempat_tinggal']}}" readonly>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="Rt" class="col-sm-4 col-form-label">NO TELP/HP (*)</label>
                    <div class="col-sm-8">
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input type="text" class="form-control" name="no_telp" data-inputmask="'mask': ['999-999-999-999', '+0999 999 999 999']" data-mask value="{{$item['no_telp']}}" readonly>
                        </div>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="Email" class="col-sm-4 col-form-label">E-MAIL (*)</label>
                    <div class="col-sm-8">
                        <input type="email" name="email" class="form-control" id="Email" value="{{$item['email']}}" readonly>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <!-- DATA AYAH -->
                <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">DATA AYAH</h3>
                </div>
                <div class="card-body">
    
                    <div class="form-group row">
                    <label for="nm_ayh" class="col-sm-4 col-form-label">NAMA AYAH (*)</label>
                    <div class="col-sm-8">
                        <input type="text" name="nama_ayah" class="form-control" id="nm_ayh" value="{{$item['nama_ayah']}}" readonly>
                    </div>
                    </div>
                    
                    <div class="form-group row">
                    <label for="tlahir_ayh" class="col-sm-4 col-form-label">TEMPAT LAHIR AYAH (*)</label>
                    <div class="col-sm-8">
                        <input type="text" name="tempat_lahir_ayah" class="form-control" id="tlahir_ayh" value="{{$item['tempat_lahir_ayah']}}" readonly>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="lahir_ayh" class="col-sm-4 col-form-label">TANGGAL LAHIR AYAH(*)</label>
                    <div class="col-sm-8">
                        <input type="date" name="tgl_lahir_ayah" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" value="{{$item['tgl_lahir_ayah']}}" data-mask readonly>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="Pend_Ayah" class="col-sm-4 col-form-label">PENDIDIKAN AYAH(*)</label>
                    <div class="col-sm-8">
                        <input type="text" name="pendidikan_ayah" class="form-control" value="{{$item['pendidikan_ayah']}}" data-mask readonly>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="kerja_ayh" class="col-sm-4 col-form-label">PEKERJAAN AYAH(*)</label>
                    <div class="col-sm-8">
                        <input type="text" name="pekerjaan_ayah" class="form-control" value="{{$item['pekerjaan_ayah']}}" data-mask readonly>
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="hasil_ayh" class="col-sm-4 col-form-label">PENGHASILAN AYAH(*)</label>
                    <div class="col-sm-8">
                        <input type="text" name="penghasilan_ayah" class="form-control" value="{{$item['penghasilan_ayah']}}" data-mask readonly>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-6">
                <!-- DATA IBU -->
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">DATA IBU</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="nm_ibu" class="col-sm-4 col-form-label">NAMA IBU(*)</label>
                            <div class="col-sm-8">
                                <input type="text" name="nama_ibu" class="form-control" id="nm_ibu" value="{{$item['nama_ibu']}}" readonly>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="tlahir_ibu" class="col-sm-4 col-form-label">TEMPAT LAHIR IBU (*)</label>
                            <div class="col-sm-8">
                                <input type="text" name="tempat_lahir_ibu" class="form-control" id="tlahir_ibu" value="{{$item['tempat_lahir_ibu']}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lahir_ibu" class="col-sm-4 col-form-label">TANGGAL LAHIR IBU (*)</label>
                            <div class="col-sm-8">
                                <input type="date" name="tgl_lahir_ibu" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" value="{{$item['tgl_lahir_ibu']}}" data-mask readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Pend_Ibu" class="col-sm-4 col-form-label">PENDIDIKAN IBU (*)</label>
                            <div class="col-sm-8">
                                <input type="text" name="pendidikan_ibu" class="form-control" id="tlahir_ibu" value="{{$item['pendidikan_ibu']}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="kerja_ibu" class="col-sm-4 col-form-label">PEKERJAAN IBU (*)</label>
                            <div class="col-sm-8">
                                <input type="text" name="pekerjaan_ibu" class="form-control" id="tlahir_ibu" value="{{$item['pekerjaan_ibu']}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hasil_ibu" class="col-sm-4 col-form-label">PENGHASILAN IBU (*)</label>
                            <div class="col-sm-8">
                                <input type="text" name="penghasilan_ibu" class="form-control" id="tlahir_ibu" value="{{$item['penghasilan_ibu']}}" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <br>
        <div class="row">
            <br>
            <div class="col-md-6">
                <!-- REGISTRASI PESERTA DIDIK -->
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">REGISTRASI PESERTA DIDIK</h3>
                    </div>
                    <div class="card-body">
                         <div class="form-group row">
                            <label for="jenis_pendaftaran" class="col-sm-4 col-form-label">JENIS PENDAFTARAN (*)</label>
                            <div class="col-sm-8">
                                <input type="text" name="jns_pendaftaran" class="form-control" id="jns" value="{{$item['jns_pendaftaran']}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_skhun" class="col-sm-4 col-form-label">JALUR PENDAFTARAN (*)</label>
                            <div class="col-sm-8">
                                <input type="text" name="jalur_pendaftaran" class="form-control" id="jlr" value="{{$item['jalur_pendaftaran']}}" readonly>
                            </div>
                        </div><br>
                        <div class="form-group row">
                            <label for="skl_asal" class="col-sm-4 col-form-label">SEKOLAH ASAL (*)</label>
                            <div class="col-sm-8">
                                <input type="text" name="nama_sekolah" class="form-control" id="sekolah_asal" value="{{$item['nama_sekolah']}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jurusan" class="col-sm-4 col-form-label">STATUS SEKOLAH (*)</label>
                            <div class="col-sm-8">
                                <input type="text" name="stts_sekolah" class="form-control" id="status_sekolah" value="{{$item['tempat_lahir_ibu']}}" readonly>
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label for="skl_asal" class="col-sm-4 col-form-label">ALAMAT SEKOLAH (*)</label>
                            <div class="col-sm-8">
                                <input type="text" name="alamat_sekolah" class="form-control" id="alamat_sekolah" value="{{$item['alamat_sekolah']}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jurusan" class="col-sm-4 col-form-label">PILIH JURUSAN (*)</label>
                            <div class="col-sm-8">
                                <input type="text" name="jurusan" class="form-control" id="jurusan" value="{{$item['jurusan']}}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_ijazah" class="col-sm-4 col-form-label">JENIS KELAS (*)</label>
                            <div class="col-sm-8">
                                <input type="text" name="jns_kelas" class="form-control" id="kelas" value="{{$item['jns_kelas']}}" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
                <br>
                <div class="col-md-6">
                    <!-- PROSES -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Info</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-check">
                                <label class="form-check-label" for="exampleCheck2">
                               Beriku Adalah Detail Data Siswa
                                
                                <b>Data Bisa dilihat oleh admin
                                </label>
                            </div>
                            <br>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <a href="/datasiswa" class="btn btn-warning">Kembali</a>
                        </div>
                    </div>
                </div>
        @endforeach
    </table>
    <br><br>
</div>

@include('admin.footer')