@extends('layout.layout')
@section('content')

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Tambah Supplier</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group">
                <form action="/transaksi/{{ $transaksi->id }}/update" method="POST">
                    @csrf
                    @method('put')
                    <label for="id_transaksi">ID TRANSAKSI</label><br>
                    <input type="text" name="id_transaksi" placeholder="Masukkan ID Transaksi " class="form-control" value="{{ $transaksi->id_transaksi }}"><br>
                    <label for="id_transaksi">ID ADMIN</label><br>
                    <input type="text" name="id_admin" placeholder="Masukkan Id Admin" class="form-control" value="{{ $transaksi->id_admin }}"><br>
                    <label for="id_transaksi">TANGGAL TRANSAKSI</label><br>
                    <input type="date" name="transaksi_tanggal" placeholder="Masukkan Tanggal" class="form-control" value="{{ $transaksi->transaksi_tanggal }}"><br>
                    <label for="id_transaksi">TRANSAKSI NO.NOTA</label><br>
                    <input type="text" name="transaksi_nonota" placeholder="Masukkan No Nota" class="form-control" value="{{ $transaksi->transaksi_nonota }}"><br>
                    <label for="id_transaksi">TRANSAKSI STATUS</label><br>
                    <input type="text" name="transaksi_status" placeholder="Masukkan Status" class="form-control" value="{{ $transaksi->transaksi_status }}"><br>
                    <input type="submit" value="UBAH" class="btn btn-success">

                </form>
                <a href="/transaksi"><button class="btn btn-secondary">BATAL</button></a>
            </div>
              </div>
            </div>
        </div>
@endsection
