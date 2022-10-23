@extends('layout.layout')

@section('content')
<h3 class="card-title">DataTable with default features</h3>
</div>
<!-- /.card-header -->
<div class="card-body">
    <a href="/transaksi_detail/create" class="btn btn-primary">TAMBAH</a>
  <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID TRANSAKSI DETAIL</th>
                    <th>ID TRANSAKSI</th>
                    <th>ID BARANG</th>
                    <th>TRANSAKSI JENIS</th>
                    <th>TRANSAKSI HARGA</th>
                    <th>TRANSAKSI JUMLAH</th>
                    <th>TRANSAKSI DETAIL STATUS</th>
                    <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($transaksi_detail as $row)


                    <tr>
                        <td>{{$row->id_transaksi_detail}}</td>
                        <td>{{$row->id_transaksi}}</td>
                        <td>{{$row->barang_nama}}</td>
                        <td>{{$row->transaksi_jenis}}</td>
                        <td>{{$row->transaksi_harga}}</td>
                        <td>{{$row->transaksi_jumlah}}</td>
                        <td>{{$row->transaksi_detail_status}}</td>
                        <td>
                            <a href="/transaksi_detail/{{$row->id}}/edit" class="btn btn-success">EDIT</a>
                            <a href="/transaksi_detail/{{$row->id}}/delete" class="btn btn-danger">HAPUS</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
            <!--/.card-body -->
@endsection
