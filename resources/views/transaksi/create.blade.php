@extends('layout.layout')
@section('content')

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Tambah Transaksi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group">
                <form action="/transaksi/store" method="POST">
                    @csrf

                    
                    <label for="">ID ADMIN</label><br>
                    <input type="text" name="id_admin" placeholder="Masukkan Id Admin" class="form-control" ><br>
                    <label for="">TRANSAKSI TANGGAL</label><br>
                    <input type="date" name="transaksi_tanggal" placeholder="Masukkan Transaksi Tanggal" class="form-control" ><br>
                    <label for="">TRANSAKSI NO.NOTA</label><br>
                    <input type="text" name="transaksi_nonota" placeholder="Masukkan Transaksi Nota" class="form-control" ><br>
                    <label for="">TRANSAKSI STATUS</label><br>
                    <input type="text" name="transaksi_status" placeholder="Masukkan Transaksi status" class="form-control" ><br>
                    <label for="">ID BARANG</label><br>
                    <select name="id_barang" class="form-control">
                        <option value="">Silahkan dipilih</option>
                        @foreach($barang as $row)
                        <option value="{{$row->id_barang}}">{{$row->barang_nama}}</option>
                        @endforeach
                    </select>
                    <label for="">TRANSAKSI JENIS</label><br>
                    <input type="text" name="transaksi_jenis" placeholder="Masukkan Transaksi status" class="form-control" ><br>
                    <label for="">TRANSAKSI HARGA</label><br>
                    <input type="text" name="transaksi_harga" placeholder="Masukkan Transaksi status" class="form-control" ><br>
                    <label for="">TRANSAKSI JUMLAH</label><br>
                    <input type="text" name="transaksi_jumlah" placeholder="Masukkan Transaksi status" class="form-control" ><br>
                    <label for="">TRANSAKSI DETAIL STATUS</label><br>
                    <input type="text" name="transaksi_detail_status" placeholder="Masukkan Transaksi status" class="form-control" ><br>
                    <input type="submit" value="UBAH" class="btn btn-success">

                </form>
                <a href="/transaksi"><button class="btn btn-secondary">BATAL</button></a>
            </div>
              </div>
            </div>
        </div>
@endsection
