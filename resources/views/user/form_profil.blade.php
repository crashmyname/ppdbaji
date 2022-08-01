@include('user.header')
<br>
<div class="container-fluid">
    @if(session()->has('sukses'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('sukses')}}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @foreach ($datauser as $item)               
            <form action="/uprofil/{{$item->id}}" method="post" enctype="multipart/form-data">
                @csrf
            <!-- Horizontal Form -->
            <!-- DATA SISWA -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">DATA PROFIL</h3>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="Nisn" class="col-sm-4 col-form-label">Nama</label>
                                <div class="col-sm-8">
                                    <input type="text" name="name" class="form-control" id="Nisn" placeholder="Nama" value="{{$item->name}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Nisn" class="col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8">
                                    <input type="email" name="email" class="form-control" id="Nisn" placeholder="Email" value="{{$item->email}}" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Nama Lengkap" class="col-sm-4 col-form-label">Password</label>
                                <div class="col-sm-8">
                                    <input type="pass" name="password" class="form-control" id="nama" placeholder="Masukan Pass baru anda" required>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Update Profil</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        @endforeach
    </div>
    @include('user.footer')