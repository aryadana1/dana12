@extends('layout.layout')
@section('content')

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Tambah Barang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group">
                <form action="/barang/{{ $barang->id }}/update" method="POST">
                    @csrf
                    @method('put')
                    <label for="id_user">ID BARANG</label><br>
                    <input type="text" name="id_barang" placeholder="Masukkan ID Barang " class="form-control" value="{{ $barang->id_barang }}"><br>
                    <label for="id_user">BARANG KODE</label><br>
                    <input type="text" name="barang_kode" placeholder="Masukkan Username" class="form-control" value="{{ $barang->barang_kode }}"><br>
                    <label for="id_user">BARANG NAMA</label><br>
                    <input type="text" name="barang_nama" placeholder="Masukkan Password" class="form-control" value="{{ $barang->barang_nama }}"><br>
                    <label for="id_user">ID JENIS</label><br>
                    <input type="text" name="id_jenis" placeholder="Masukkan Id Jenis" class="form-control" value="{{ $barang->id_jenis }}"><br>
                    <label for="id_user">ID  SUPPLIER</label><br>
                    <input type="text" name="id_supplier" placeholder="Masukkan Id Supplier" class="form-control" value="{{ $barang->id_supplier }}"><br>
                    <label for="id_user">HARGA JUAL</label><br>
                    <input type="text" name="harga_jual" placeholder="Masukkan Harga Jual" class="form-control" value="{{ $barang->harga_jual }}"><br>
                    <label for="id_user">HARGA JUAL</label><br>
                    <input type="text" name="barang_status" placeholder="Masukkan Barang Status" class="form-control" value="{{ $barang->barang_status }}"><br>
                    <input type="submit" value="UBAH" class="btn btn-success">

                </form>
                <a href="/barang"><button class="btn btn-secondary">BATAL</button></a>
            </div>
              </div>
            </div>
        </div>
@endsection
