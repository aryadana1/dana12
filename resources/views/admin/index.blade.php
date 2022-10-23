@extends('layout.layout')

@section('content')
<h3 class="card-title">Tampil Data Barang</h3>
</div>
<!-- /.card-header -->
<div class="card-body">
    <a href="/admin/create" class="btn btn-primary">TAMBAH</a>
  <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID USER</th>
                    <th>USERNAME</th>
                    <th>PASSWORD</th>
                    <th>ADMIN LEVEL</th>
                    <th>ADMIN NAMA</th>
                    <th>ADMIN STATUS</th>
                    <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($admin as $row)


                    <tr>
                        <td>{{$row->id_user}}</td>
                        <td>{{$row->username}}</td>
                        <td>{{$row->password}}</td>
                        <td>{{$row->admin_level}}</td>
                        <td>{{$row->admin_nama}}</td>
                        <td>{{$row->admin_status}}</td>
                        <td>
                            <a href="/admin/{{$row->id}}/edit" class="btn btn-success">EDIT</a>
                            <a href="/admin/{{$row->id}}/delete" class="btn btn-danger">HAPUS</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
            <!--/.card-body -->
@endsection
