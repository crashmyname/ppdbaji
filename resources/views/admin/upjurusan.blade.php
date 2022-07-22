@include('admin.header')
<div class="container-fluid">
    @foreach ($datajurusan as $item)
<form action="/ejurusan/{{$item->id}}" method="post" enctype="multipart/form-data">
    @csrf
    <!-- Horizontal Form -->
    <!-- DATA SISWA -->
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">DATA JURUSAN</h3>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card-body">
                        
                    <div class="form-group row">
                        <label for="Nisn" class="col-sm-4 col-form-label">Nama Jurusan (*)</label>
                        <div class="col-sm-8">
                            <input type="text" name="nama_jurusan" class="form-control" id="Nisn" placeholder="nama jurusan" required value="{{$item->nama_jurusan}}">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-warning">Update Jurusan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endforeach
</div>


@include('admin.footer')