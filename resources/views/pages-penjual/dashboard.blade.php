@extends('layouts.sidebar')

@section('content')
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <!-- small box -->
                <div class="small-box bg-info" style="height: 133px">
                    <div class="inner">
                        <h3><i class="fas fa-utensils"></i> &nbsp;{{$total_penjual}}</h3>

                        <p>Total Makanan</p>
                    </div>

                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-md-4 col-sm-12">
                <!-- small box -->
                <div class="small-box bg-secondary" style="height: 133px">
                    <div class="inner">
                        <h3><i class="fas fa-glass-martini-alt"></i> &nbsp;{{$total_siswa}}</h3>

                        <p>Total Minuman</p>
                    </div>

                </div>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-md-4 col-sm-12">
            <!-- small box -->
            <div class="small-box bg-secondary" style="height: 133px">
                <div class="inner">
                    <h3><i class="fas fa-glass-martini-alt"></i> &nbsp;{{$total_siswa}}</h3>

                    <p>Total Minuman</p>
                </div>

            </div>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>
@endsection