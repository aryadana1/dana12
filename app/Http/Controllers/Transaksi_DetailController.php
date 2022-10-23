<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Transaksi_detail;

class transaksi_detailController extends Controller
{
    public function index($id){
        $transaksi_detail = DB::table('tbl_transaksi_detail')
        ->join('tbl_barang','tbl_barang.id_barang', '=', 'tbl_transaksi_detail.id_barang')
        ->where('id_transaksi',$id)
        ->get();
        // dd($transaksi_detail);
        return view('transaksi_detail.index',compact('transaksi_detail'));
    }

    public function create(){
        return view('transaksi_detail.create');
    }

    public function store(Request $request){
        $transaksi_detail = transaksi_detail::create([
            'id_user' => $request->id_user,
            'username' => $request->username,
            'password' => $request->password,
            'transaksi_detail_level' => $request->transaksi_detail_level,
            'transaksi_detail_nama' => $request->transaksi_detail_nama,
            'transaksi_detail_status' => $request->transaksi_detail_status
        ]);
        return redirect('/transaksi_detail');
    }

    public function edit($id){
        $transaksi_detail = transaksi_detail::find($id);
        return view('transaksi_detail.edit',compact('transaksi_detail'));
    }

    public function update($id,Request $request){
        $transaksi_detail = transaksi_detail::find($id)
        ->update($request->except('_token','metod'));
        return redirect('/transaksi_detail');
    }

    public function destroy($id){
        $transaksi_detail = transaksi_detail::find($id);
        $transaksi_detail->delete();
        return redirect('/transaksi_detail');

    }
}
