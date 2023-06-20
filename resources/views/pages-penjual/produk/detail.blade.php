@extends('layouts.sidebar')

@section('content')
<h1>Detail Product</h1>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="project-info-box mt-0">
                    @foreach($data as $data)
                </div>
                <input type="hidden" value="{{$data->id}}">
                <div class="project-info-box">
                    <p><b>Nama Product :</b> {{$data->nama}}</p>
                    <p><b>Jenis :</b> {{$data->jenis}}</p>
                    <p><b>Harga :</b> {{$data->price}}</p>
                    <p><b>Stok :</b> Rp. {{number_format($data->price, 0, ",", ".")}}</p>
                </div>
            </div>
            <div class="col-md-7">
                <div style="display:flex; text-align:left;">
                    @foreach($product_gallery as $gallery)
                        <span style="text-align:center;"><img src="{{url('assets/produk/'.$gallery->foto)}}" alt="" width="50%"></span>
                    @endforeach
                </div>
                <div class="project-info-box"><br>
                    <a href="{{url('produk')}}" style="color:white;"><button class="btn btn-primary btn-lg">Back</button></a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript"></script>
@endforeach
@endsection