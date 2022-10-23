@extends('layout.layout')

@section('content')
<h3 class="card-title">Tampil Data Barang</h3>
</div>
<!-- /.card-header -->
<div class="card-body">
    <a href="/barang/create" class="btn btn-primary">TAMBAH</a>
  <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID BARANG</th>
                    <th>KODE BARANG</th>
                    <th>NAMA BARANG</th>
                    <th>ID JENIS</th>
                    <th>ID SUPPLIER</th>
                    <th>HARGA JUAL</th>
                    <th>STATUS BARANG</th>
                    <th>AKSI</th>
                </thead>
                </tr>
                <tbody>
                    @foreach($barang as $row)
                    <tr>
                        <td>{{$row->id_barang}}</td>
                        <td>{{$row->barang_kode}}</td>
                        <td>{{$row->barang_nama}}</td>
                        <td>{{$row->jenis_nama}}</td>
                        <td>{{$row->supplier_nama}}</td>
                        <td>{{$row->harga_jual}}</td>
                        <td>{{$row->barang_status}}</td>
                        <td>
                            <a href="/barang/{{$row->id}}/edit" class="btn btn-success">EDIT</a>
                            <a href="/barang/{{$row->id}}/delete" class="btn btn-danger">HAPUS</a>
                        </td>                    </tr>
                    @endforeach
                </tbody>

                </tbody>
              </table>
            </div>
            <!--/.card-body -->
@endsection
