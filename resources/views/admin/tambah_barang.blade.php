@extends('admin.layout')
@section('badan')
<div id="konten">
    <div class="col-12 col-m-12">
        <h2>Tambah Produk</h2>
        <br>
        <form method="post" action="/admin/produk/tambah/aksi" enctype="multipart/form-data">
            @csrf
            <label for="nama" class="form-label">Nama Produk</label>
            <input type="text" name="nama" class="form-control" id="nama">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" name="harga" class="form-control" id="harga">
            <label for="ket" class="form-label">Keterangan</label>
            <input type="text" name="keterangan" class="form-control" id="ket">
            <label for="stok" class="form-label">Stok</label>
            <input type="number" name="stok" class="form-control" id="stok">
            <label class="form-label">Gambar</label>
            <input type="file" name="file" class="form-control">
            <br><br>
            <a href="/admin/produk"><button type="button" class="btn btn-success">Kembali</button></a>
            <button type="submit" class="btn btn-success">Tambah</button>
        </form>
    </div>
</div>
@endsection