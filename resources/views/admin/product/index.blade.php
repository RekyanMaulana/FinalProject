@extends('admin.layout.appadmin')

@section('content')
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Import Data Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{url('admin/product/importexcel')}}" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
            {{csrf_field()}}
            <input type="file" name="file">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    </form>
  </div>
</div>
<!-- End Modal -->  
                        <h1 class="mt-4">Tables</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <a href="{{url('admin/product/create')}}" class="btn btn-primary btn-sm"> Tambah </a>
                            </div>
                            <div class="card-header">
                                <a href="{{url('admin/product/productPDF')}}" class="btn btn-danger btn-sm" target="_blank"> Export To PDF</a>
                                <a href="{{url('admin/product/exportexcel')}}" class="btn btn-success btn-sm"> Export To Excel</a>
                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal">Import To Excel</button>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Jenis</th>
                                            <th>Price</th>
                                            <th>Stok</th>
                                            <th>Nama Toko</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Jenis</th>
                                            <th>Price</th>
                                            <th>Stok</th>
                                            <th>Nama Toko</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @php
                                        $no = 1;
                                        @endphp
                                        @foreach($product as $prod)
                                        <tr>
                                            <td>{{$no}}</td>
                                            <td>{{$prod->nama}}</td>
                                            <td>{{$prod->jenis}}</td>
                                            <td>{{$prod->price}}</td>
                                            <td>{{$prod->stok}}</td>
                                            <td>{{$prod->nama_toko}}</td>
                                            <td>
                                                <form action="#" method="post">
                                                    <a class="btn btn-info btn-sm" href="#">Detail</a>
                                                    <a class="btn btn-warning btn-sm" href="{{url('admin/product/edit/'.$prod->id)}}">Ubah</a>
                                                    <button type="submit" class="btn btn-danger btn-sm" name="proses" value="hapus"
                                                    onclick="return confirm('Anda yakin data ini akan dihapus?')">Hapus</button>
                                                    
                                                </form>
                                            </td>
                                        </tr>
                                        @php 
                                        $no++
                                        @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

</div>
</div>
@endsection