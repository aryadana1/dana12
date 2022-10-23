@extends('layout.layout')

@section('content')
<h3 class="card-title">Tampil Data Barang</h3>
</div>
<!-- /.card-header -->
<div class="card-body">
    <a href="/supplier/create" class="btn btn-primary">TAMBAH</a>
  <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID SUPPLIER</th>
                    <th>NAMA SUPPLIER</th>
                    <th>ALAMAT</th>
                    <th>PHONE</th>
                    <th>STATUS</th>
                    <th>AKSI</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($supplier as $row)


                    <tr>
                        <td>{{$row->id_supplier}}</td>
                        <td>{{$row->supplier_nama}}</td>
                        <td>{{$row->supplier_alamat}}</td>
                        <td>{{$row->supplier_phone}}</td>
                        <td>{{$row->supplier_status}}</td>
                        <td>
                            <a href="/supplier/{{$row->id}}/edit" class="btn btn-success">EDIT</a>
                            <a href="/supplier/{{$row->id}}/delete" class="btn btn-danger">HAPUS</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
            <!--/.card-body -->
@endsection
