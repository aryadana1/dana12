<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function index(){
        $supplier = Supplier::all();
        return view('supplier.index',compact('supplier'));
    }

    public function create(){
        return view('supplier.create');
    }

    public function store(Request $request){
        $supplier = Supplier::create([
            'supplier_nama' => $request->supplier_nama,
            'supplier_alamat' => $request->supplier_alamat,
            'supplier_phone' => $request->supplier_phone,
            'supplier_status' => $request->supplier_status,
        ]);
        echo $supplier->id_supplier;
        return redirect('/supplier');
    }

    public function edit($id){
        $supplier = Supplier::find($id);
        return view('supplier.edit',compact('supplier'));
    }

    public function update($id,Request $request){
        $supplier = Supplier::find($id)
        ->update($request->except('_token','metod'));
        return redirect('/supplier');
    }

    public function destroy($id){
        $supplier = Supplier::find($id);
        $supplier->delete();
        return redirect('/supplier');

    }
}
