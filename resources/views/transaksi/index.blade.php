@extends('layout.layout')

@section('content')
<h3 class="card-title">Tampil Data Transaksi</h3>
</div>
<!-- /.card-header -->
<div class="card-body">
    <a href="/transaksi/create" class="btn btn-primary">TAMBAH</a>
  <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID TRANSAKSI</th>
                    <th>ID ADMIN</th>
                    <th>TRANSAKSI TANGGAL</th>
                    <th>TRANSAKSI NOTA</th>
                    <th>TRANSAKSI STATUS</th>
                    <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($transaksi as $row)


                    <tr>
                        <td>{{$row->id_transaksi}}</td>
                        <td>{{$row->id_admin}}</td>
                        <td>{{$row->transaksi_tanggal}}</td>
                        <td>{{$row->transaksi_nonota}}</td>
                        <td>{{$row->transaksi_status}}</td>
                        <td>
                            <a href="/transaksi_detail/{{$row->id_transaksi}}/detail" class="btn btn-warning">DETAIL</a>
                            <a href="/transaksi/{{$row->id}}/edit" class="btn btn-success">EDIT</a>
                            <a href="/transaksi/{{$row->id}}/delete" class="btn btn-danger">HAPUS</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
            <!--/.card-body -->
@endsection
