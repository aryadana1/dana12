@extends('layout.layout')
@section('content')

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Tambah Data Barang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group">
                <form action="/barang/store" method="POST">
                    @csrf

                    <label for="">KODE BARANG</label><br>
                    <input type="text" name="barang_kode" placeholder="Masukkan Barang  Kode" class="form-control" required><br>
                    <label for="">NAMA BARANG</label><br>
                    <input type="text" name="barang_nama" placeholder="Masukkan Barang Nama" class="form-control" ><br>
                    <label for="">ID JENIS</label><br>
                    <select name="id_jenis" class="form-control">
                        <option>Silahkan dipilih</option>
                        @foreach($jenis as $row)
                        <option value="{{$row->id_jenis}}">{{$row->jenis_nama}}</option>
                        @endforeach
                    </select>
                    <label for="">ID SUPPLIER</label><br>
                    <select name="id_supplier" class="form-control">
                        <option>Silahkan dipilih</option>
                        @foreach($supplier as $row)
                        <option value="{{$row->id_supplier}}">{{$row->supplier_nama}}</option>
                        @endforeach
                    </select>
                    <label for="">HARGA JUAL</label><br>
                    <input type="text" name="harga_jual" placeholder="Masukkan Harga Jual" class="form-control" ><br>
                    <label for="">BARANG STATUS</label><br>
                    <input type="text" name="barang_status" placeholder="Masukkan Barang Status" class="form-control" ><br>
                    <input type="submit" value="UBAH" class="btn btn-success">

                </form>
                <a href="/barang"><button class="btn btn-secondary">BATAL</button></a>
            </div>
              </div>
            </div>
        </div>
@endsection
