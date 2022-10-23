<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Transaksi;
use App\Models\Transaksi_detail;
use App\Models\Barang;

class TransaksiController extends Controller
{
    public function index(){
        $transaksi = Transaksi::all();
        return view('transaksi.index',compact('transaksi'));
    }

    public function create(){
        $barang = Barang::all();
        return view('transaksi.create',compact(['barang']));
    }

    public function store(Request $request){
        $simpan = Transaksi::create([
            'id_transaksi' => $request->id_transaksi,
            'id_admin' => $request->id_admin,
            'transaksi_tanggal' => $request->transaksi_tanggal,
            'transaksi_nonota' => $request->transaksi_nonota,
            'transaksi_status' => $request->transaksi_status,
        ]);
        echo $simpan->id_transaksi;
        //simpan ke transaksi_detail
        $transaksi = Transaksi_detail::create([
            'id_transaksi' => $simpan->id_transaksi,
            'id_barang' => $request->id_barang,
            'transaksi_jenis' => $request->transaksi_jenis,
            'transaksi_harga' => $request->transaksi_harga,
            'transaksi_jumlah' => $request->transaksi_jumlah,
            'transaksi_detail_status' => $request->transaksi_detail_status,
        ]);
        echo $transaksi->id_transaksi_detail;

        return redirect('/transaksi');
    }

    public function edit($id){
        $transaksi = Transaksi::find($id);
        return view('transaksi.edit',compact('transaksi'));
    }

    public function update($id,Request $request){
        $transaksi = Transaksi::find($id)
        ->update($request->except('_token','metod'));
        return redirect('/transaksi');
    }

    public function destroy($id){
        $transaksi = Transaksi::find($id);
        $transaksi->delete();
        return redirect('/transaksi');

    }
}
