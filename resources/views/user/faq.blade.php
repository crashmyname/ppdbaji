@include('user.header')
<!-- End of Topbar --><div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <!-- DATA AYAH -->
            <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Kirim Pertanyaan</h3>
            </div>
            <div class="card-body">
                @if(session()->has('sukses'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('sukses')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <form action="/pesan" method="post">
                    @csrf
                <div class="form-group row">
                <label for="nik_ayh" class="col-sm-4 col-form-label">Nama Siswa</label>
                <div class="col-sm-8">
                    <input type="text" name="nama_siswa" class="form-control" value="{{auth()->user()->name}}" readonly>
                </div>
                </div>
                <div class="form-group row">
                <label for="pesan" class="col-sm-4 col-form-label">Masukan pesan pertanyaan?</label>
                <div class="col-sm-8">
                    <textarea class="form-control" name="pesan" id="" cols="30" rows="10"></textarea>
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