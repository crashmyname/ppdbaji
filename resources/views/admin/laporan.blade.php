@include('admin.header')

<div class="container-fluid">
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Report Data</h1>
        <p class="mb-4">Berikut adalah halaman Report SMK Miftahul Jannah.</p>
        <div class="row">
        <div class="col-xl-8 col-lg-5">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Data Chart Siswa</h6>
                </div>
                
                <!-- Card Body -->
                <div class="card-body">
                        <div id="chartData"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data Chart Siswa</h6>
            </div>
            
            <!-- Card Body -->
            <div class="card-body">
                    <div id="pieData"></div>
            </div>
        </div></div></div>
        
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
                <h6 class="m-0 font-weight-bold text-primary">Table Report</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive" id="">
                    <table class="table table-bordered" id="table-datatables" width="100%" cellspacing="0">
                        <thead>
                            <tr align="center">
                                {{-- <th>No</th> --}}
                                <th>Jurusan</th>
                                <th>Jumlah Siswa</th>
                                <th>More</th>
                            </tr>
                        </thead>
                            @foreach ($datasekolah as $item)
                            <tr align="center">
                                {{-- <th></th> --}}
                                <th>{{$item->jurusan}}</th>
                                <th>{{$item->where('jurusan',$item->jurusan)->count()}}</th>
                                <th><a href="/tampildetail/{{$item->jurusan}}"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                  </svg></a>
                                  </th>
                            </tr>
                            @endforeach
                    </table>
                    {{-- {{$datasekolah->links()}} --}}
                </div>
            </div>
        </div>
    </div>
</div>

@section('chart')
<script src="https://code.highcharts.com/highcharts.js"></script>   
<script>
    Highcharts.chart('chartData', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Laporan Data Penerimaan Siswa Didik Baru 2022'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: {!!json_encode($chart)!!},
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total Siswa berdasarkan jurusan'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:f} </b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Jumlah Siswa{!!json_encode($all)!!}',
        data: {!!json_encode($data)!!},
    }]
});
Highcharts.chart('pieData', {
    title: {
        text: 'Average'
    },
    xAxis: {
        categories: {!!json_encode($chart)!!}
    },
    labels: {
        items: [{
            html: '',
            style: {
                left: '50px',
                top: '18px',
                color: ( // theme
                    Highcharts.defaultOptions.title.style &&
                    Highcharts.defaultOptions.title.style.color
                ) || 'black'
            }
        }]
    },
    series: [{
        type: 'column',
        // name: {!!json_encode($char)!!},
        data: {!!json_encode($data)!!}
    }, {
        type: 'spline',
        name: 'Average',
        data: {!!json_encode($data)!!},
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'white'
        }
    }
]
});;
</script>
@endsection
@include('admin.footer')