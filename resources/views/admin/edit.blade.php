@extends('layout.layout')
@section('content')

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">TambahAdmin</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group">
                <form action="/admin/{{ $admin->id }}/update" method="POST">
                    @csrf
                    @method('put')
                    <label for="id_user">ID ADMIN</label><br>
                    <input type="text" name="id_user" placeholder="Masukkan ID Admin" class="form-control" value="{{ $admin->id_user }}"><br>
                    <label for="id_user">USERNAME</label><br>
                    <input type="text" name="username" placeholder="Masukkan Username" class="form-control" value="{{ $admin->username }}"><br>
                    <label for="id_user">PASSWORD</label><br>
                    <input type="text" name="password" placeholder="Masukkan Password" class="form-control" value="{{ $admin->password }}"><br>
                    <label for="id_user">LEVEL</label><br>
                    <input type="text" name="admin_level" placeholder="Masukkan Level" class="form-control" value="{{ $admin->admin_level }}"><br>
                    <label for="id_user">NAMA</label><br>
                    <input type="text" name="admin_nama" placeholder="Masukkan Nama" class="form-control" value="{{ $admin->admin_nama }}"><br>
                    <label for="id_user">STATUS</label><br>
                    <input type="text" name="admin_status" placeholder="Masukkan Status Admin" class="form-control" value="{{ $admin->admin_status }}"><br>
                    <input type="submit" value="UBAH" class="btn btn-success">

                </form>
                <a href="/admin"><button class="btn btn-secondary">BATAL</button></a>
            </div>
              </div>
            </div>
        </div>
@endsection
