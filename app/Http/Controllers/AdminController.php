<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\DB;
use File;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function produk(){
        $produk = DB::table('produk')->get();
        return view('admin.produk',['produk' => $produk]);
    }
    
    public function produk_edit($id){
        $produk = DB::table('produk')->where('id',$id)->get();
        return view('admin.edit_produk',['produk' => $produk]);
    }
    public function produk_editAct(request $request){
        DB::table('produk')->where('id',$request->id)->update([
            'stok' => $request->stok,
            'harga' => $request->harga,
        ]);
        return redirect('/admin/produk');
    }

    public function produk_tambah(request $request){
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        
        $file = $request->file('file');
        
        $nama = time() . "_" . $file->getClientOriginalName();
        $upload = 'img/produk';

        $file->move($upload, $nama);
        $kode = 'ck'.sprintf("%04s", rand(1, 1000));

        DB::table('produk')->insert([
            'id' => $kode,
            'nama' =>$request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'keterangan' => $request->keterangan,
            'gambar' => $nama,
        ]);
        return redirect ('/admin/produk');
    }

    public function user(){
        $user = DB::table('users')->where('role','user')->get();
        return view('admin.user',['user' => $user]);
    }

    public function user_hapus($id){
        DB::table('users')->where('id',$id)->delete();
        return redirect('/admin/user');
    }

    public function transaksi(){
        $transaksi = DB::table('transaksi')->select(DB::raw('id_trans, sum(total) as total, name, status'))
        ->where('status','Di Proses')->groupBy('id_trans','status','name')
        ->join('produk','id_produk','produk.id')->join('users','id_user','users.id','name')->get();
        
        return view ('admin.transaksi',['transaksi' => $transaksi]);
    }

    public function detail_transaksi($id){
        $detail = DB::table('transaksi')
        ->where('status','Di Proses')->where('id_trans',$id)
        ->join('produk','id_produk','produk.id')->get();
        return view ('admin.lihat_transaksi',['detail' => $detail]);
    }

    public function laporan(){
        $laporan = DB::table('transaksi')->select(DB::raw('tanggal, sum(total) as total, count(id_produk) as jumlah'))
        ->where('status','Di Terima')->groupBy('tanggal')->get();
        return view ('admin.laporan',['laporan' => $laporan]);
    }

    public function kirim ($id){
        DB::table('transaksi')->where('id_trans',$id)->update([
            'status' => 'Di Kirim',
        ]);
        return redirect('/admin/transaksi');
    }

}
