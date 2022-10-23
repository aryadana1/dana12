@extends('layout.layout')
@section('content')

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Tambahjenis</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="form-group">
                <form action="/jenis/store" method="POST">
                    @csrf

                    
                    <label for="">JENIS NAMA</label><br>
                    <input type="text" name="jenis_nama" placeholder="Masukkan Jenis nama" class="form-control" ><br>
                    <label for="">JENIS STATUS</label><br>
                    <input type="text" name="jenis_status" placeholder="Masukkan Jenis status" class="form-control" ><br>
                    <input type="submit" value="UBAH" class="btn btn-success">

                </form>
                <a href="/jenis"><button class="btn btn-secondary">BATAL</button></a>
            </div>
              </div>
            </div>
        </div>
@endsection
