@include('user.header')
<!-- End of Topbar --><div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <!-- DATA AYAH -->
            <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Informasi Pembayaran</h3>
            </div>                
            
            <div class="card-body">
                 @if(session()->has('sukses'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('sukses')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <form action="/bayar" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                @foreach ($datasiswa as $item)
                {{-- <label for="nm_ayh" class="col-sm-4 col-form-label">No ID Siswa</label>
                <div class="col-sm-8">
                    <input type="text" name="id" class="form-control" id="id" value="{{$item->id}}" readonly>
                </div> --}}
            </div>
            <div class="form-group row">
                <label for="nik_ayh" class="col-sm-4 col-form-label">Nama Siswa</label>
                <div class="col-sm-8">
                    <input type="text" name="nama_siswa" class="form-control" id="nama" value="{{auth()->user()->name}}" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="tlahir_ayh" class="col-sm-4 col-form-label">Jurusan</label>
                <div class="col-sm-8">
                    {{-- <input type="text" name="jurusan" class="form-control" value="{{$item->jurusan}}" readonly> --}}
                    <select type="text" name="jurusan" id="jurusan" class="form-control">
                        @foreach ($datajurusan as $item)                         
                        <option value="{{$item->nama_jurusan}}">{{$item->nama_jurusan}}</option>
                        @endforeach
                    </select>
                </div>
                @endforeach
            </div>
            <div class="form-group row">
                <label for="tlahir_ayh" class="col-sm-4 col-form-label">Total Biaya Siswa</label>
                <div class="col-sm-8">
                    <input type="text" name="biaya" class="form-control" value="Rp. 2.000.000" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="tlahir_ayh" class="col-sm-4 col-form-label">Bukti Transaksi</label>
                <div class="col-sm-8">
                    <input type="file" name="bukti" id="image" required>
                </div>
            </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Kirim</button>
                </div>
                </form>
            </div>
            </div>
        </div>
        </div>
</div>
    <!-- End of Main Content -->
    @include('user.footer')