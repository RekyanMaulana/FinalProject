@extends('layouts.sidebar')

@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="card mb-3">
            <div class="card-body">
                <h4 class="">Produk Diproses</h4>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pembeli</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $x=1 @endphp
                        @foreach($diproses as $diproses) <tr>
                            <td>{{$x++}}</td>
                            <td>{{$diproses->nama}}</td>
                            <td>{{$diproses->tanggal}}</td>
                            @if($diproses->status_pembayaran != 'Lunas')
                            <td><span class="badge badge-danger">Belum Dibayar</span></td>
                            @else
                            <td><span class="badge badge-success">Lunas</span></td>
                            @endif
                            <td>Rp. {{number_format($diproses->total, 0, ",", ".")}}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" onclick="show('{{<?= route('produk-detail', $diproses->id) ?>}}')"><i class="fas fa-eye"></i></a>
                                <a class="btn btn-warning btn-sm" href="{{route('produk-edit',$diproses->id)}}"><i class="fas fa-truck-pickup"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card mb-3">
            <div class="card-body">
                <h4 class="">Produk Dikirim</h4>
                <table id="example2" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pembeli</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $x=1 @endphp
                        @foreach($dikirim as $dikirim) <tr>
                            <td>{{$x++}}</td>
                            <td>{{$dikirim->user->profil->nama}}</td>
                            <td>{{$dikirim->tanggal}}</td>
                            @if($dikirim->status_pembayaran != 'Lunas')
                            <td><span class="badge badge-danger">Belum Dibayar</span></td>
                            @elsedikirim
                            <td><span class="badge badge-success">Lunas</span></td>
                            @endif
                            <td>Rp. {{number_format($dikirim->total_transaksi, 0, ",", ".")}}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" onclick="show('<?= route('produk-detail', $dikirim->id) ?>')"><i class="fas fa-eye"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>


        <div class="card mb-3">
            <div class="card-body">
                <h4 class="">Produk Diterima</h4>
                <table id="example3" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Pembeli</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $x=1 @endphp
                        @foreach($diterima as $data) <tr>
                            <td>{{$x++}}</td>
                            <td>{{$data->user->profil->nama}}</td>
                            <td>{{$data->tanggal}}</td>
                            @if($data->status_pembayaran != 'Lunas')
                            <td><span class="badge badge-danger">Belum Dibayar</span></td>
                            @else
                            <td><span class="badge badge-success">Lunas</span></td>
                            @endif
                            <td>Rp. {{number_format($data->total_transaksi, 0, ",", ".")}}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" onclick="show('<?= route('produk-detail', $data->id) ?>')"><i class="fas fa-eye"></i></a>
                                <a class="btn btn-warning btn-sm" href="{{route('produk-edit',$data->id)}}"><i class="fas fa-truck-pickup"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection