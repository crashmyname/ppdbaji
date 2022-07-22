@include('layout.navbar')

<div class="container-fluid">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Siswa</h1>
        <p class="mb-4">Berikut adalah halaman data siswa SMK Mahakarya Cikupa.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Table Siswa</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr align="center">
                                <th>No</th>
                                <th>NISN</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                            </tr>
                        </thead>
                        <tfoot>
                            @foreach ($datasiswa as $item)
                            <tr align="center">
                                <th>{{++$no}}</th>
                                <th>{{$item['nisn']}}</th>
                                <th>{{$item['nama_lengkap']}}</th>
                                <th>{{$item['jenis_kelamin']}}</th>
                                <th>{{$item['tempat_lahir']}}</th>
                                <th>{{$item['tanggal_lahir']}}</th>
                            </tr>
                            @endforeach
                        </tfoot>
                        </tbody>
                    </table>
                    {{$datasiswa->links()}}
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.footer')