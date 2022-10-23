@extends('layout.layout')
@section('content')

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Tambah Barang</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group">
                <form action="/jenis/{{ $jenis->id }}/update" method="POST">
                    @csrf
                    @method('put')
                    <label for="id_jenis">ID JENIS</label><br>
                    <input type="text" name="id_jenis" placeholder="Masukkan ID Jenis " class="form-control" value="{{ $jenis->id_jenis }}"><br>
                    <label for="id_jenis">JENIS NAMA</label><br>
                    <input type="text" name="jenis_nama" placeholder="Masukkan Jenis Nama" class="form-control" value="{{ $jenis->jenis_nama }}"><br>
                    <label for="id_jenis">JENIS STATUS</label><br>
                    <input type="text" name="jenis_status" placeholder="Masukkan Status" class="form-control" value="{{ $jenis->jenis_status }}"><br>
                    <input type="submit" value="UBAH" class="btn btn-success">

                </form>
                <a href="/jenis"><button class="btn btn-secondary">BATAL</button></a>
            </div>
              </div>
            </div>
        </div>
@endsection
