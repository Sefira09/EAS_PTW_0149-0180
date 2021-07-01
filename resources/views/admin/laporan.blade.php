@extends('admin.layout')
@section('badan')

<div id="konten">
    <div class="col-12 col-m-12">
        <h2>Laporan</h2>
        <table class="table table-striped" style="width: 100%">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Jumlah Transaksi</th>
                    <th scope="col">Total Pendapatan</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach($laporan as $l)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$l->tanggal}}</td>
                    <td>{{$l->jumlah}}</td>
                    <td>{{$l->total}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection