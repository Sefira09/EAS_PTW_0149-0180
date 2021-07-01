@extends('admin.layout')
@section('badan')

<div id="konten">
    <div class="col-12 col-m-12">
        <h2>Transaksi</h2>
        <table class="table table-striped" style="width: 100%">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID Transaksi</th>
                    <th scope="col">Nama Pembeli</th>
                    <th scope="col">Total Harga</th>
                    <th scope="col">Status</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach($transaksi as $t)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$t->id_trans}}</td>
                    <td>{{$t->name}}</td>
                    <td>{{$t->total}}</td>
                    <td>{{$t->status}}</td>
                    <td><a href="/admin/transaksi/kirim/{{$t->id_trans}}"><button type="button" class="btn btn-success">Kirim</button></a>
                    <a href="/admin/transaksi/{{$t->id_trans}}"><button type="button" class="btn btn-success">Lihat</button></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection