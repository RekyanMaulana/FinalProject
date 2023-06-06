@extends('admin.layout.appadmin')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

@foreach($product as $prod)
<h1>Form Edit Product</h1>
<br>
<form method="post" action="{{url('admin/product/update')}}" enctype="multipart/form-data">
{{csrf_field()}} 
  <div class="form-group row">
    <input type="hidden" name="id" value="{{$prod->id}}">
    <label for="text" class="col-4 col-form-label">Nama Produk</label> 
    <div class="col-8">
      <input id="text" name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" value="{{$prod->nama}}">
      @error('nama')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
  </div>
  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Jenis Produk</label> 
    <div class="col-8">
    @foreach($ar_jenis as $jenis)
      @php $cek = ($jenis == $prod->jenis) ? 'checked' : ''; @endphp
      <!-- <select id="select" name="jenis" class="custom-select">
        <option value="{{$jenis}}" {{$cek}}>{{$jenis}}</option>
      </select> -->
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis" id="radio_0" type="radio" class="custom-control-input" value="{{$jenis}}" {{$cek}}> 
        <label for="radio_0" class="custom-control-label">{{$jenis}}</label>
      </div>
      @endforeach
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Harga</label> 
    <div class="col-8">
      <input id="text1" name="price" type="text" class="form-control @error('price') is-invalid @enderror" value="{{$prod->price}}">
      @error('price')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
  </div>
  <div class="form-group row">
    <label for="text2" class="col-4 col-form-label">Stok</label> 
    <div class="col-8">
      <input id="text2" name="stok" type="number" class="form-control @error('stok') is-invalid @enderror" value="{{$prod->stok}}">
      @error('stok')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
  </div>
  <div class="form-group row">
    <label for="select1" class="col-4 col-form-label">Nama Toko</label> 
    <div class="col-8">
      <select id="select1" name="penjual_id" class="custom-select">
        @foreach($penjual as $pjl)
        @php $sel = ($pjl->id == $prod->penjual_id) ? 'selected' : ''; @endphp
        <option value="{{$pjl->id}}" {{$sel}}>{{$pjl->nama_toko}}</option>
        @endforeach
      </select>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>
@endforeach
@endsection