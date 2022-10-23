@extends('layout.layout')

@section('content')
<h3 class="card-title">Tampil Data Barang</h3>
</div>
<!-- /.card-header -->
<div class="card-body">
    <a href="/jenis/create" class="btn btn-primary">TAMBAH</a>
  <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID JENIS</th>
                    <th>JENIS NAMA</th>
                    <th>JENIS STATUS</th>
                    <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($jenis as $row)


                    <tr>
                        <td>{{$row->id_jenis}}</td>
                        <td>{{$row->jenis_nama}}</td>
                        <td>{{$row->jenis_status}}</td>
                        <td>
                            <a href="/jenis/{{$row->id}}/edit" class="btn btn-success">EDIT</a>
                            <a href="/jenis/{{$row->id}}/delete" class="btn btn-danger">HAPUS</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
            <!--/.card-body -->
@endsection
