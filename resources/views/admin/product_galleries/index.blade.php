@extends('admin.layout.appadmin')

@section('content')  
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
                                <a href="{{url('admin/product_galleries/create')}}" class="btn btn-primary btn-sm"> Tambah </a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Produk</th>
                                            <th>Foto</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Produk</th>
                                            <th>Foto</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @php
                                        $no = 1;
                                        @endphp
                                        @foreach($product_galleries as $pg)
                                        <tr>
                                            <td>{{$no}}</td>
                                            <td>{{$pg->product}}</td>
                                            <td>
                                                @empty($pg->foto)
                                                <img src="{{url('admin/image/nophoto.png')}}" width="30%">
                                                @else
                                                <img src="{{url('admin/image')}}/{{$pg->foto}}" width="30%">
                                                @endempty
                                            </td>
                                            <td>
                                                <form action="#" method="post">
                                                    <a class="btn btn-info btn-sm" href="{{url('admin/product_galleries/show/'.$pg->id)}}">Detail</a>
                                                    <a class="btn btn-warning btn-sm" href="{{url('admin/product_galleries/edit/'.$pg->id)}}">Ubah</a>
                                                    <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal{{$pg->id}}">Hapus</button>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal{{$pg->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Data</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Apakah anda yakin akan menghapus data {{$pg->product}}?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <a class="btn btn-danger" href="{{url('admin/product_galleries/delete/'.$pg->id)}}">Hapus</a>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    </div>
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