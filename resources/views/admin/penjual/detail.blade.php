@extends('admin.layout.appadmin')
@section('content')
<h1>Detail Penjual</h1>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<div class="container">
<div class="row">
<div class="col-md-5">
@foreach($penjual as $pjl)
<input type="hidden" value="{{$pjl->id}}">
<div class="project-info-box">
<p><b>Nama :</b> {{$pjl->nama}}</p>
<p><b>Nama Toko :</b> {{$pjl->nama_toko}}</p>
<p><b>Deskripsi Toko :</b> {{$pjl->deskripsi_toko}}</p>
</div>
<div class="project-info-box mt-0 mb-0">
<a href="{{url('admin/penjual')}}" style="color:white;"><button class="btn btn-primary btn-md">Back</button></a>
</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript"></script>
@endforeach
@endsection