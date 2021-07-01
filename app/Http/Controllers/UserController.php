<?php

namespace App\Http\Controllers;

use Illuminate\support\Facades\DB;
use Illuminate\support\Facades\Auth;
use carbon\carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(request $request)
    {
        $email = $request->email;
        $user = DB::table('users')->where('email', $email)->get();
        if (Auth::attempt($request->only('email', 'password'))) {
            foreach ($user as $User) {
                if ($User->role == 'admin') {
                    return redirect('/admin/produk');
                } else {
                    return redirect('/user');
                }
            }
        }
        return redirect('/');
    }

    public function register(request $request)
    {

        DB::table('users')->insert([
            'name' => $request->nama,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'alamat' => $request->alamat,
            'telp' => $request->no_telp,
            'role' => 'user',
        ]);
        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function index()
    {
        $produk = DB::table('produk')->get();
        return view('user.index', ['produk' => $produk]);
    }

    public function keranjang()
    {
        $user = Auth::user()->id;
        $keranjang = DB::table('keranjang')->where('id_pembeli', $user)->join('produk', 'id_produk', '=', 'id')->get();
        return view('user.keranjang', ['keranjang' => $keranjang]);
    }

    public function keranjang_batal($id)
    {
        $user = Auth::user()->id;
        DB::table('keranjang')->where('id_pembeli', $user)->where('id_produk', $id)->delete();
        return redirect('/user/keranjang');
    }

    public function produk($id)
    {
        $produk = DB::table('produk')->where('id', $id)->get();
        return view('user.produk', ['produk' => $produk]);
    }

    public function beli(request $request)
    {
        $file = $request->file('bayar');
        $nama_file = time() . "_" . $file->getClientOriginalName();
        $tujuan_upload = 'img/bayar';

        $file->move($tujuan_upload, $nama_file);

        $user = Auth::user()->id;
        $cart = DB::table('keranjang')->where('id_pembeli', $user)->get();
        $kode = 'TR-' . sprintf("%04s", rand(0, 1000));
        foreach ($cart as $c) {
            DB::table('transaksi')->insert([
                'id_trans' => $kode,
                'id_user' => $user,
                'id_produk' => $c->id_produk,
                'jumlah' => $c->jumlah,
                'total' => $c->total,
                'pembayaran' => $nama_file,
                'tanggal' => Carbon::now()->format('Y-m-d'),
                'status' => 'Di Proses',
            ]);
            $stok = DB::table('produk')->select('stok')->where('id', $c->id_produk)->first();
            $stok_br = (int)$stok->stok;
            $stok_new = $stok_br - $c->jumlah;
            DB::table('produk')->where('id', $c->id_produk)->update([
                'stok' => $stok_new,
            ]);
        }

        DB::table('keranjang')->where('id_pembeli', $user)->delete();
        return redirect('/user');
    }

    public function pembelian()
    {
        $user = Auth::user()->id;
        $pembelian = DB::table('transaksi')->select(DB::raw('id_trans,sum(total) as total, status'))
            ->where('id_user', $user)->groupBy('status', 'id_trans')->get();
        return view('user.pembelian', ['pembelian' => $pembelian]);
    }

    public function terima($id)
    {
        DB::table('transaksi')->where('id_trans', $id)->update([
            'status' => 'Di Terima',
        ]);
        return redirect('/user/pembelian');
    }

    public function pesan(request $request)
    {
        $user = Auth::user()->id;
        $produk = DB::table('produk')->where('id', $request->id_produk)->first();
        $harga = $produk->harga * $request->jumlah;

        DB::table('keranjang')->insert([
            'id_pembeli' => $user,
            'id_produk' => $produk->id,
            'total' => $harga,
            'jumlah' => $request->jumlah,
        ]);

        return redirect('/user');
    }
}
