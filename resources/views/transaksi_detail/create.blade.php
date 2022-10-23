@extends('layout.layout')
@section('content')

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Tambah Detail</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group">
                <form action="/transaksi_detail/{{ $transaksi_detail->id }}/update" method="POST">
                    @csrf
                    @method('put')
                    <label for="id_transaksi_detail">ID TRANSAKSI DETAIL</label><br>
                    <input type="text" name="id_transaksi_detail" placeholder="Masukkan ID Transaksi Detail" class="form-control"><br>
                    <label for="id_transaksi_detail">ID TRANSAKSI</label><br>
                    <input type="text" name="id_transaksi" placeholder="Masukkan Id Transaksi" class="form-control"><br>
                    <label for="id_transaksi_detail">ID BARANG</label><br>
                    <input type="text" name="id_barang" placeholder="Masukkan Id Barang" class="form-control"><br>
                    <label for="id_transaksi_detail">TRANSAKSI JENIS</label><br>
                    <input type="text" name="transaksi_harga" placeholder="Masukkan Transaksi Harga" class="form-control"><br>
                    <label for="id_transaksi_detail">TRANSAKSI JUMLAH</label><br>
                    <input type="text" name="transaksi_jumlah" placeholder="Masukkan Transaksi Jumlah" class="form-control"><br>
                    <label for="id_transaksi_detail">TRANSAKSI DETAIL STATUS</label><br>
                    <input type="text" name="transaksi_detail_status" placeholder="Masukkan Transaksi Detail Status" class="form-control"><br>
                    <input type="submit" value="UBAH" class="btn btn-success">

                </form>
                <a href="/transaksi_detail"><button class="btn btn-secondary">BATAL</button></a>
            </div>
              </div>
            </div>
        </div>
@endsection
