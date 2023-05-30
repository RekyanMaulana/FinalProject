@extends('admin.layout.appadmin')

@section('content')
<h1>Detail Product</h1>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
<div class="container">
<div class="row">
<div class="col-md-5">
<div class="project-info-box mt-0">
@foreach($product_galleries as $pg)
</div>
<input type="hidden" value="{{$pg->id}}">
<div class="project-info-box">
<p><b>Nama Product :</b> {{$pg->product}}</p>
<p><b>Jenis :</b> {{$pg->jp}}</p>
<p><b>Harga :</b> {{$pg->harga}}</p>
<p><b>Stok :</b> {{$pg->stok}}</p>
</div>
</div>
<div class="col-md-7">
@empty($pg->foto)
<img src="{{url('admin/image/nophoto.png')}}" width="50%">
@else
<img src="{{url('admin/image')}}/{{$pg->foto}}" width="50%">
@endempty
<div class="project-info-box">
<br>
<a href="{{url('admin/product_galleries')}}" style="color:white;"><button class="btn btn-primary btn-lg">Back</button></a>
</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>
@endforeach
@endsection