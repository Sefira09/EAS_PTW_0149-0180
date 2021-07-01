@extends('admin.layout')
@section('badan')
<div id="konten">
    <div class="col-12 col-m-12">
        <h2>Edit Produk</h2>
        <br>
        <form method="post" action="/admin/produk/edit/act" enctype="multipart/form-data">
            @csrf
            @foreach($produk as $p)
            <input type="hidden" name="id" value="{{$p->id}}" class="form-control" id="id">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" name="harga" value="{{$p->harga}}"class="form-control" id="harga">
            <label for="stok" class="form-label">Stok</label>
            <input type="number" name="stok" value="{{$p->stok}}"class="form-control" id="stok">
            <br><br>
            <a href="/admin/produk"><button type="button" class="btn btn-success">Kembali</button></a>
            <button type="submit" class="btn btn-success">Tambah</button>
            @endforeach
        </form>
    </div>
</div>
@endsection