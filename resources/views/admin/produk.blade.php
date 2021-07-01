@extends('admin.layout')
@section('badan')

<div id="konten">
    <div class="col-12 col-m-12">
        <h2>Produk</h2>
        <br>
        <a href="/admin/produk/tambah"><button type="button" style="margin-top : 20px;margin-bottom :50px;" class="btn btn-success">Tambah Barang</button></a>
        <table class="table table-striped" style="width: 100%">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produk as $p)
                <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->nama}}</td>
                    <td>{{$p->harga}}</td>
                    <td>{{$p->keterangan}}</td>
                    <td>{{$p->stok}}</td>
                    <td><img src="{{asset("img/produk/".$p->gambar)}}" width = "100" height = "100"></td>
                    <td><a href="/admin/produk/edit/{{$p->id}}"><button type="button" style="margin-top : 20px;margin-bottom :50px;" class="btn btn-warning">Edit Barang</button></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection