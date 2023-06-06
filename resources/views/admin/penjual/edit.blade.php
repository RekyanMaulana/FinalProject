@extends('admin.layout.appadmin')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1>Form Edit Penjual</h1>
<br>
@foreach($penjual as $pjl)
<form method="POST" action="{{url('admin/penjual/update')}}" enctype="multipart/form-data">
    {{csrf_field()}}
  <div class="form-group row">
    <input type="hidden" name="id" value="{{$pjl->id}}"><br>
    <label for="text" class="col-4 col-form-label">Nama Penjual</label> 
    <div class="col-8">
      <input id="text" name="nama" type="text" class="form-control @error('nama') is-invalid @enderror" value="{{$pjl->nama}}">
      @error('nama')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Nama Toko</label> 
    <div class="col-8">
      <input id="text1" name="nama_toko" type="text" class="form-control @error('nama_toko') is-invalid @enderror" value="{{$pjl->nama_toko}}">
      @error('nama_toko')
      <div class="invalid-feedback">
        {{$message}}
      </div>
      @enderror
    </div>
  </div>
  <div class="form-group row">
    <label for="textarea" class="col-4 col-form-label">Deskripsi Toko</label> 
    <div class="col-8">
      <textarea id="textarea" name="deskripsi_toko" cols="40" rows="5" class="form-control">{{$pjl->deskripsi_toko}}</textarea>
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