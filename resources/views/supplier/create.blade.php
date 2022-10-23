@extends('layout.layout')
@section('content')

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Tambah Supplier</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group">
                <form action="/supplier/store" method="POST">
                    @csrf
                    
                    <label for="">SUPPLIER NAMA</label><br>
                    <input type="text" name="supplier_nama" placeholder="Masukkan Supplier nama" class="form-control" ><br>
                    <label for="">SUPPLIER ALAMAT</label><br>
                    <input type="text" name="supplier_alamat" placeholder="Masukkan Supplier Alamat" class="form-control" ><br>
                    <label for="">SUPPLIER PHONE</label><br>
                    <input type="text" name="supplier_phone" placeholder="Masukkan Supplier Phone" class="form-control" ><br>
                    <label for="">SUPPLIER STATUS</label><br>
                    <input type="text" name="supplier_status" placeholder="Masukkan Supplier status" class="form-control" ><br>
                    <input type="submit" value="UBAH" class="btn btn-success">

                </form>
                <a href="/supplier"><button class="btn btn-secondary">BATAL</button></a>
            </div>
              </div>
            </div>
        </div>
@endsection
