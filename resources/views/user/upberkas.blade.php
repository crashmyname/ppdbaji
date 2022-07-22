@include('user.header')
<!-- End of Topbar --><div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <!-- DATA AYAH -->
            <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Upload Berkas</h3>
            </div>                
            
            @if(session()->has('upload'))
           <div class="alert alert-success alert-dismissible fade show" role="alert">
           {{ session('upload')}}
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
           </div>
           @endif
            <div class="card-body">
                <form action="/file" method="post" enctype="multipart/form-data">
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
                    <input type="text" name="jurusan" class="form-control" value="{{$item->jurusan}}" readonly>
                </div>
                @endforeach
            </div>
            <div class="form-group row">
                <label for="tlahir_ayh" class="col-sm-4 col-form-label">foto</label>
                <div class="col-sm-8">
                    <input type="file" name="foto"id="image">
                </div>
            </div>
            <div class="form-group row">
                <label for="tlahir_ayh" class="col-sm-4 col-form-label">Ijazah</label>
                <div class="col-sm-8">
                    <input type="file" name="ijazah" id="image">
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