@extends('admin.layout')
@section('badan')

<div id="konten">
    <div class="col-12 col-m-12">
        <h2>User</h2>
        <table class="table table-striped" style="width: 100%">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach($user as $u)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$u->name}}</td>
                    <td>{{$u->email}}</td>
                    <td>{{$u->alamat}}</td>
                    <td>{{$u->telp}}</td>
                    <td><a href="/admin/user/hapus/{{$u->id}}"><button type="button" class="btn btn-danger">Hapus</button></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection