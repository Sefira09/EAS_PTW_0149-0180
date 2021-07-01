@extends('admin.layout')
@section('badan')

<div id="konten">
    <div class="col-12 col-m-12">
        <h2>Detail</h2>
        <table class="table table-striped" style="width: 100%">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Produk</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Harga</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach($detail as $d)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$d->tanggal}}</td>
                    <td>{{$d->nama}}</td>
                    <td>{{$d->jumlah}}</td>
                    <td>{{$d->total}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/admin/transaksi"><button class="btn btn-danger">kembali</button></a>
    </div>
</div>
@endsection