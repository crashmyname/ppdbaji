@include('admin.header')

<div class="container-fluid">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Detail Siswa</h1>
        <p class="mb-4">Berikut adalah halaman Detail Siswa SMK Mahakarya Cikupa.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            @if(session()->has('sukses'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('sukses')}}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if(session()->has('delete'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('sukses')}}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Table Siswa</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive" id="">
                    <table class="table table-bordered" id="table-datatables" width="100%" cellspacing="0">
                        <thead>
                            <tr align="center">
                                {{-- <th>No</th> --}}
                                <th>Nisn</th>
                                <th>Nama Siswa</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Agama</th>
                                <th>Alamat</th>
                                <th>RT</th>
                                <th>RW</th>
                                <th>Kelurahan</th>
                                <th>Kecamatan</th>
                                <th>Kabupaten</th>
                                <th>Provinsi</th>
                                <th>No HP</th>
                                <th>Email</th>
                                <th>Nama Ayah</th>
                                <th>Tempat Lahir Ayah</th>
                                <th>Tanggal Lahir Ayah</th>
                                <th>Pendidikan Ayah</th>
                                <th>Pekerjaan Ayah</th>
                                <th>Penghasilan Ayah</th>
                                <th>Nama Ibu</th>
                                <th>Tempat Lahir Ibu</th>
                                <th>Tanggal Lahir Ibu</th>
                                <th>Pendidikan Ibu</th>
                                <th>Pekerjaan Ibu</th>
                                <th>Penghasilan Ibu</th>
                                <th>Asal Sekolah</th>
                                <th>Jurusan</th>
                            </tr>
                        </thead>
                            @foreach ($datasiswa as $item)
                            <tr align="center">
                                <th>{{$item->nisn}}</th>
                                <th>{{$item->nama_lengkap}}</th>
                                <th>{{$item->jenis_kelamin}}</th>
                                <th>{{$item->tempat_lahir}}</th>
                                <th>{{$item->tanggal_lahir}}</th>
                                <th>{{$item->agama}}</th>
                                <th>{{$item->alamat}}</th>
                                <th>{{$item->rt}}</th>
                                <th>{{$item->rw}}</th>
                                <th>{{$item->kelurahan}}</th>
                                <th>{{$item->kecamatan}}</th>
                                <th>{{$item->kabupaten}}</th>
                                <th>{{$item->provinsi}}</th>
                                <th>{{$item->no_telp}}</th>
                                <th>{{$item->email}}</th>
                                <th>{{$item->nama_ayah}}</th>
                                <th>{{$item->tempat_lahir_ayah}}</th>
                                <th>{{$item->tgl_lahir_ayah}}</th>
                                <th>{{$item->pendidikan_ayah}}</th>
                                <th>{{$item->pekerjaan_ayah}}</th>
                                <th>{{$item->penghasilan_ayah}}</th>
                                <th>{{$item->nama_ibu}}</th>
                                <th>{{$item->tempat_lahir_ibu}}</th>
                                <th>{{$item->tgl_lahir_ibu}}</th>
                                <th>{{$item->pendidikan_ibu}}</th>
                                <th>{{$item->pekerjaan_ibu}}</th>
                                <th>{{$item->penghasilan_ibu}}</th>
                                <th>{{$item->nama_sekolah}}</th>
                                <th>{{$item->jurusan}}</th>
                            </tr>
                            @endforeach
                    </table>
                    {{-- {{$datasekolah->links()}} --}}
                </div>
            </div>
        </div>
    </div>
</div>


@include('admin.footer')