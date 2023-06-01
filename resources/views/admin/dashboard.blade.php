@extends('admin.layout.appadmin')

@section('content')
<div id="layoutSidenav_content">
                <main>
<div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Data Penjual :
                                        {{$penjual}}
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{url('admin/penjual')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Data Product :
                                        {{$product}}
                                    </div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{url('admin/product')}}">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                <div class="card-header">
                                        <i class="fas fa-chart-pie me-1"></i>
                                        Jenis Product
                                    </div>
                                    <div class="card-body"><canvas id="pieChart" width="100%" height="50"></canvas></div>
                                </div>
                            </div>
                        </div>
                    <script>
                        var lbl = [@foreach ($ar_jenis as $jenis) '{{$jenis->jenis}}',
                        @endforeach];
                        var jml = [@foreach($ar_jenis as $jenis) {{$jenis->jumlah}}, @endforeach];
                        document.addEventListener("DOMContentLoaded", () => {
                            new Chart(document.querySelector('#pieChart'), {
                        type: 'pie',
                        data: {
                            labels: lbl,
                            datasets: [{
                            data: jml,
                            backgroundColor: ['#007bff', '#dc3545', '#ffc107', '#28a745'],
                            }],
                        },
                            });
                        });
                    </script>
@endsection