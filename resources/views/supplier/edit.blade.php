@extends('layout.layout')
@section('content')

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Tambah Supplier</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group">
                <form action="/supplier/{{ $supplier->id }}/update" method="POST">
                    @csrf
                    @method('put')
                    <label for="id_jenis">ID JENIS</label><br>
                    <input type="text" name="id_supplier" placeholder="Masukkan ID Supplier " class="form-control" value="{{ $supplier->id_supplier }}"><br>
                    <label for="id_jenis">SUPPLIER NAMA</label><br>
                    <input type="text" name="supplier_nama" placeholder="Masukkan Supplier Nama" class="form-control" value="{{ $supplier->supplier_nama }}"><br>
                    <label for="id_jenis">SUPPLIER ALAMAT</label><br>
                    <input type="text" name="supplier_alamat" placeholder="Masukkan Alamat" class="form-control" value="{{ $supplier->supplier_alamat }}"><br>
                    <label for="id_jenis">SUPPLIER PHONE</label><br>
                    <input type="text" name="supplier_phone" placeholder="Masukkan Alamat" class="form-control" value="{{ $supplier->supplier_phone }}"><br>
                    <label for="id_jenis">SUPPLIER STATUS</label><br>
                    <input type="text" name="supplier_status" placeholder="Masukkan Alamat" class="form-control" value="{{ $supplier->supplier_status }}"><br>
                    <input type="submit" value="UBAH" class="btn btn-success">

                </form>
                <a href="/supplier"><button class="btn btn-secondary">BATAL</button></a>
            </div>
              </div>
            </div>
        </div>
@endsection
