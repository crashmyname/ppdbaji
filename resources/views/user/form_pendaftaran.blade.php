@include('user.header')
<br>
<div class="container-fluid">
    @if(session()->has('sukses'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('sukses')}}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <form action="/form" method="post" enctype="multipart/form-data">
            @csrf
            <!-- Horizontal Form -->
            <!-- DATA SISWA -->
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
                                    <input type="text" name="nisn" class="form-control" id="Nisn" placeholder="nisn.data.kemdikbud.go.id" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Nama Lengkap" class="col-sm-4 col-form-label">NAMA LENGKAP (*)</label>
                                <div class="col-sm-8">
                                    <input type="text" name="nama_lengkap" class="form-control" id="nama" placeholder="Sesuai Ijazah" required>
                                </div>
                            </div>
                            <!-- OPTION -->
                            <div class="form-group row">
                                <label for="Jenis Kelamin" class="col-sm-4 col-form-label">JENIS KELAMIN (*)</label>
                                <div class="col-sm-8">
                                    <select type="text" name="jenis_kelamin" id="Jenis Kelamin" class="form-control" required>
                                        <option value="">-- Pilih --</option>
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tmp_lahir" class="col-sm-4 col-form-label">TEMPAT LAHIR (*)</label>
                                <div class="col-sm-8">
                                    <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Sesuai Ijazah" required>
                                </div>
                            </div>
                            <!-- TANGGAL -->
                            <div class="form-group row">
                                <label for="Tanggal Lahir" class="col-sm-4 col-form-label">TANGGAL LAHIR (*)</label>
                                <div class="col-sm-8">
                                    <div class="input-group">
                                    <input type="date" name="tanggal_lahir" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="agama" class="col-sm-4 col-form-label">AGAMA (*)</label>
                                <div class="col-sm-8">
                                    <select type="text" name="agama" id="agama" class="form-control">
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katholik">Katholik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Khonghucu">Khonghucu</option>
                                        <option value="Kepercayaan Baru">Kepercayaan Baru</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat" class="col-sm-4 col-form-label">ALAMAT (*)</label>
                                <div class="col-sm-8">
                                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Sesuai KK">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Rt" class="col-sm-4 col-form-label">RT / RW (*)</label>
                                <div class="col-sm-4">
                                    <input type="text" name="rt" class="form-control" id="Rt" placeholder="000">
                                </div>
                            <div class="col-sm-4">
                                <input type="text" name="rw" class="form-control" id="Rw" placeholder="000">
                            </div>
                            </div>
                            <div class="form-group row">
                            <label for="Kelurahan" class="col-sm-4 col-form-label">KELURAHAN (*)</label>
                            <div class="col-sm-8">
                                <input type="text" name="kelurahan" class="form-control" id="Kelurahan" placeholder="Kelurahan" required>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                    <div class="card-body">
                        <div class="form-group row">
                        <label for="Kecamatan" class="col-sm-4 col-form-label">KECAMATAN (*)</label>
                        <div class="col-sm-8">
                            <input type="text" name="kecamatan" class="form-control" id="Kecamatan" placeholder="Kecamatan" required>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="Kabupaten" class="col-sm-4 col-form-label">KABUPATEN (*)</label>
                        <div class="col-sm-8">
                            <input type="text" name="kabupaten" class="form-control" id="Kabupaten" placeholder="Kabupaten" required>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="Propinsi" class="col-sm-4 col-form-label">PROPINSI (*)</label>
                        <div class="col-sm-8">
                            <input type="text" name="provinsi" class="form-control" id="Propinsi" placeholder="Propinsi" required>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="Status Tinggal" class="col-sm-4 col-form-label">STATUS TEMPAT TINGGAL (*)</label>
                        <div class="col-sm-8">
                            <select type="text" name="status_tempat_tinggal" id="Status Tinggal" class="form-control">
                            <option value="">-- Pilih --</option>
                            <option value="Milik Sendiri">Milik Sendiri</option>
                            <option value="Rumah Orang Tua">Rumah Orang Tua</option>
                            <option value="Rumah Saudara/Kerabat">Rumah Saudara/Kerabat</option>
                            <option value="Rumah Dinas">Rumah Dinas</option>
                            <option value="Sewa/kontrak">Sewa/kontrak</option>
                            <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="Rt" class="col-sm-4 col-form-label">NO TELP/HP (*)</label>
                        <div class="col-sm-8">
                            <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input type="text" class="form-control" name="no_telp" data-inputmask="'mask': ['999-999-999-999', '+0999 999 999 999']" data-mask required>
                            </div>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="Email" class="col-sm-4 col-form-label">E-MAIL (*)</label>
                        <div class="col-sm-8">
                            <input type="email" name="email" class="form-control" id="Email" placeholder="Email" required>
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
                            <input type="text" name="nama_ayah" class="form-control" id="nm_ayh" placeholder="Nama Ayah" required>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="tlahir_ayh" class="col-sm-4 col-form-label">TEMPAT LAHIR AYAH (*)</label>
                        <div class="col-sm-8">
                            <input type="text" name="tempat_lahir_ayah" class="form-control" id="tlahir_ayh" placeholder="Kota Lahir">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="lahir_ayh" class="col-sm-4 col-form-label">TANGGAL LAHIR AYAH(*)</label>
                        <div class="col-sm-8">
                            <input type="date" name="tgl_lahir_ayah" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="Pend_Ayah" class="col-sm-4 col-form-label">PENDIDIKAN AYAH(*)</label>
                        <div class="col-sm-8">
                            <select type="text" name="pendidikan_ayah" id="pend_ayh" class="form-control">
                            <option value="">-- Pilih --</option>
                            <option value="Tidak Sekolah">Tidak Sekolah</option>
                            <option value="Putus SD">Putus SD</option>
                            <option value="SD Sederajad">SD Sederajad</option>
                            <option value="SMP Sederajad">SMP Sederajad</option>
                            <option value="SMA Sederajad">SMA Sederajad</option>
                            <option value="D1">D1</option>
                            <option value="D2">D2</option>
                            <option value="D3">D3</option>
                            <option value="D4/S1">D4/S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                            </select>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="kerja_ayh" class="col-sm-4 col-form-label">PEKERJAAN AYAH(*)</label>
                        <div class="col-sm-8">
                            <select type="text" name="pekerjaan_ayah" id="kerja_ayh" class="form-control">
                            <option value="">-- Pilih --</option>
                            <option value="Tidak bekerja">Tidak bekerja</option>
                            <option value="Nelayan">Nelayan</option>
                            <option value="Petani">Petani</option>
                            <option value="Peternak">Peternak</option>
                            <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                            <option value="Karyawan Swasta">Karyawan Swasta</option>
                            <option value="Pedagang Kecil">Pedagang Kecil</option>
                            <option value="Pedagang Besar">Pedagang Besar</option>
                            <option value="Wiraswasta">Wiraswasta</option>
                            <option value="Wirausaha">Wirausaha</option>
                            <option value="Buruh">Buruh</option>
                            <option value="Pensiunan">Pensiunan</option>
                            <option value="Guru">Guru</option>
                            </select>
                        </div>
                        </div>
                        <div class="form-group row">
                        <label for="hasil_ayh" class="col-sm-4 col-form-label">PENGHASILAN AYAH(*)</label>
                        <div class="col-sm-8">
                            <select type="text" name="penghasilan_ayah" id="hasil_ayh" class="form-control">
                            <option value="">-- Pilih --</option>
                            <option value="Kurang dari Rp. 500,000">Kurang dari Rp. 500,000</option>
                            <option value="Rp. 500,000 - Rp. 999,999">Rp. 500,000 - Rp. 999,999</option>
                            <option value="Rp. 1,000,000 - Rp. 1,999,999">Rp. 1,000,000 - Rp. 1,999,999</option>
                            <option value="Rp. 2,000,000 - Rp. 4,999,999">Rp. 2,000,000 - Rp. 4,999,999</option>
                            <option value="Rp. 5,000,000 - Rp. 20,000,000">Rp. 5,000,000 - Rp. 20,000,000</option>
                            <option value="Lebih dari Rp. 20,000,000">Lebih dari Rp. 20,000,000</option>
                            <option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                            </select>
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
                                    <input type="text" name="nama_ibu" class="form-control" id="nm_ibu" placeholder="Nama Ibu" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tlahir_ibu" class="col-sm-4 col-form-label">TEMPAT LAHIR IBU (*)</label>
                                <div class="col-sm-8">
                                    <input type="text" name="tempat_lahir_ibu" class="form-control" id="tlahir_ibu" placeholder="Kota Lahir">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lahir_ibu" class="col-sm-4 col-form-label">TANGGAL LAHIR IBU (*)</label>
                                <div class="col-sm-8">
                                    <input type="date" name="tgl_lahir_ibu" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Pend_Ibu" class="col-sm-4 col-form-label">PENDIDIKAN IBU (*)</label>
                                <div class="col-sm-8">
                                    <select type="text" name="pendidikan_ibu" id="pend_ibu" class="form-control">
                                    <option value="">-- Pilih --</option>
                                    <option value="Tidak Sekolah">Tidak Sekolah</option>
                                    <option value="Putus SD">Putus SD</option>
                                    <option value="SD Sederajad">SD Sederajad</option>
                                    <option value="SMP Sederajad">SMP Sederajad</option>
                                    <option value="SMA Sederajad">SMA Sederajad</option>
                                    <option value="D1">D1</option>
                                    <option value="D2">D2</option>
                                    <option value="D3">D3</option>
                                    <option value="D4/S1">D4/S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="kerja_ibu" class="col-sm-4 col-form-label">PEKERJAAN IBU (*)</label>
                                <div class="col-sm-8">
                                    <select type="text" name="pekerjaan_ibu" id="kerja_ibu" class="form-control">
                                    <option value="">-- Pilih --</option>
                                    <option value="Tidak bekerja">Tidak bekerja</option>
                                    <option value="Nelayan">Nelayan</option>
                                    <option value="Petani">Petani</option>
                                    <option value="Peternak">Peternak</option>
                                    <option value="PNS/TNI/POLRI">PNS/TNI/POLRI</option>
                                    <option value="Karyawan Swasta">Karyawan Swasta</option>
                                    <option value="Pedagang Kecil">Pedagang Kecil</option>
                                    <option value="Pedagang Besar">Pedagang Besar</option>
                                    <option value="Wiraswasta">Wiraswasta</option>
                                    <option value="Wirausaha">Wirausaha</option>
                                    <option value="Buruh">Buruh</option>
                                    <option value="Pensiunan">Pensiunan</option>
                                    <option value="Guru">Guru</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="hasil_ibu" class="col-sm-4 col-form-label">PENGHASILAN IBU (*)</label>
                                <div class="col-sm-8">
                                    <select type="text" name="penghasilan_ibu" id="hasil_ibu" class="form-control">
                                    <option value="">-- Pilih --</option>
                                    <option value="Kurang dari Rp. 500,000">Kurang dari Rp. 500,000</option>
                                    <option value="Rp. 500,000 - Rp. 999,999">Rp. 500,000 - Rp. 999,999</option>
                                    <option value="Rp. 1,000,000 - Rp. 1,999,999">Rp. 1,000,000 - Rp. 1,999,999</option>
                                    <option value="Rp. 2,000,000 - Rp. 4,999,999">Rp. 2,000,000 - Rp. 4,999,999</option>
                                    <option value="Rp. 5,000,000 - Rp. 20,000,000">Rp. 5,000,000 - Rp. 20,000,000</option>
                                    <option value="Lebih dari Rp. 20,000,000">Lebih dari Rp. 20,000,000</option>
                                    <option value="Tidak Berpenghasilan">Tidak Berpenghasilan</option>
                                    </select>
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
                                <select type="text" name="jns_pendaftaran" id="jns-pendftr" class="form-control">
                                    <option value="">-- Pilih --</option>
                                    <option value="BARU">Baru</option>
                                    <option value="PINDAHAN">Pindahan</option>
                                    </select>
                            </div>
                            <div class="form-group row">
                                <label for="no_skhun" class="col-sm-4 col-form-label">JALUR PENDAFTARAN (*)</label>
                                <select type="text" name="jalur_pendaftaran" id="jlr_pendftrn" class="form-control">
                                    <option value="">-- Pilih --</option>
                                    <option value="Beasiswa">Beasiswa</option>
                                    <option value="Mandiri">Mandiri</option>
                                    <option value="Prestasi">Prestasi</option>
                                    </select>
                            </div><br>
                            <div class="form-group row">
                                <label for="skl_asal" class="col-sm-4 col-form-label">SEKOLAH ASAL (*)</label>
                                <div class="col-sm-8">
                                    <input type="text" name="nama_sekolah" class="form-control" id="sekolah_asal" placeholder="Asal Sekolah">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jurusan" class="col-sm-4 col-form-label">STATUS SEKOLAH (*)</label>
                                <select type="text" name="stts_sekolah" id="stts_sekolah" class="form-control">
                                    <option value="">-- Pilih --</option>
                                    <option value="Swasta">Swasta</option>
                                    <option value="Negeri">Negeri</option>
                                    </select>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label for="skl_asal" class="col-sm-4 col-form-label">ALAMAT SEKOLAH (*)</label>
                                <div class="col-sm-8">
                                    <input type="text" name="alamat_sekolah" class="form-control" id="alamat_sekolah" placeholder="Alamat Sekolah">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jurusan" class="col-sm-4 col-form-label">PILIH JURUSAN (*)</label>
                                <select type="text" name="jurusan" id="jurusan" class="form-control">
                                    <option value="">-- Pilih --</option>
                                    @foreach ($jurusan as $s)
                                        
                                    <option value="{{$s->nama_jurusan}}">{{$s->nama_jurusan}}</option>
                                    @endforeach
                                    </select>
                            </div>
                            <div class="form-group row">
                                <label for="no_ijazah" class="col-sm-4 col-form-label">JENIS KELAS (*)</label>
                                <select type="text" name="jns_kelas" id="tpkelas" class="form-control">
                                    <option value="">-- Pilih --</option>
                                    <option value="R">Reguler</option>
                                    <option value="EX">Execelent</option>
                                    </select>
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
                            <h3 class="card-title">PROSES</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="terms" required>
                                <label class="form-check-label" for="exampleCheck2">
                                Saya telah entry data sesuai dengan ketentuan berkas yang berlaku, telah kami validasi kebenaran dan saya bertanggung jawab atas kebenaran data tersebut
                                <br>
                                <b>Data setelah dikirim tidak dapat di edit kembali tanpa seijin admin.
                                </label>
                            </div>
                            <br>
                            <div class="form-group row">
                                <p>Keterangan : Tanda '*' Wajib di isi</p>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Kirim Formulir</button>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </form>
        </div><!-- /.container-fluid -->
    </section>
    </div>
    @include('user.footer')