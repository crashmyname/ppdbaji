@include('admin.header')

<div class="container-fluid">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Berkas</h1>
        <p class="mb-4">Berikut adalah halaman Data Berkas Siswa SMK Mahakarya Cikupa.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Table Berkas Siswa</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr align="center">
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>Jurusan</th>
                                <th>Foto</th>
                                <th>Ijazah</th>
                            </tr>
                        </thead>
                        <tfoot>
                            @foreach ($databerkas as $item)
                            <tr align="center">
                                <th>{{++$no}}</th>
                                <th>{{$item['nama_siswa']}}</th>
                                <th>{{$item['jurusan']}}</th>
                                <th><img src="{{asset('storage/'. $item->bukti)}}" width="100px"></th>
                                <th></th>
                            </tr>
                            @endforeach
                        </tfoot>
                        </tbody>
                    </table>
                    {{$databerkas->links()}}
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.footer')