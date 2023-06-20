@extends('layouts.sidebar')

@section('content')
@foreach($errors->all() as $error)
<script>
    Swal.fire({
        icon: 'error',
        title: '<?= $error ?>',
        showConfirmButton: false,
        timer: 1500
    })
</script>
@endforeach
<!-- profile feature -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="card mb-3">
            <div class="card-body">
                <form method="POST" action="{{ route('profile-update',$user->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <h2 class="mb-4">Edit Profile</h2>
                    <div class="form-group">
                        <label for="exampleInputNama">Nama Pengguna</label>
                        <input type="text" class="form-control" id="exampleInputNama" name="nama" placeholder="" value="{{$profile->nama}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNama">No Telp</label>
                        <input type="number" class="form-control" id="exampleInputNama" name="no_telp" placeholder="" value="{{$profile->no_telp}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNama">Alamat</label>
                        <input type="text" class="form-control" id="exampleInputNama" name="alamat" placeholder="" value="{{$profile->alamat}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNama">Foto</label>
                        <input type="text" class="form-control" id="exampleInputNama" name="foto" placeholder="" value="{{$profile->foto}}" required>
                    </div>
            
                    <h2 class="mb-4 mt-5">Edit User</h2>
                    <div class="form-group">
                        <label for="exampleInputNama">Email</label>
                        <input type="email" class="form-control" id="exampleInputNama" name="email" placeholder="" value="{{$user->email}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNama">Username</label>
                        <input type="text" class="form-control" id="exampleInputNama" name="username" placeholder="" value="{{$user->username}}" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNama">Reset Password</label>
                        <input type="password" class="form-control" id="passinput" name="password" placeholder="" value="" minlength="8"> 
                        <input type="checkbox" onclick="myFunction()">Show Password
                        <script>
                            function myFunction() {
                            var x = document.getElementById("passinput");
                            if (x.type === "password") {
                                x.type = "text";
                            } else {
                                x.type = "password";
                            }
                        }
                        </script>
                    </div>                
                    <input type="hidden"  name="profile_id" value="{{$profile->id}}">    
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
@endsection