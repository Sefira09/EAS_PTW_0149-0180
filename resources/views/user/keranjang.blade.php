@extends('user.layout')
@section('badan')
<style>
    .byr-button {
        background-color: black;
        color: white;
    }
</style>

<body class="archive post-type-archive post-type-archive-product woocommerce woocommerce-page">
    <div id="page">
        <div class="container">
            <div id="content" class="site-content">
                <div id="primary" class="content-area column full">
                    <main id="main" class="site-main" role="main">
                        <ul class="products">
                            @foreach($keranjang as $k)
                            <li class="product">
                                <img width="200" height="200" src="{{asset("img/produk/".$k->gambar)}}">
                                <h3>{{$k->nama}}</h3>
                                <span class="price"><span class="amount">Rp. {{$k->total}}</span>
                                    <br>
                                    <span class="price"><span style="font-size: 15px" class="amount">Jumlah :
                                            {{$k->jumlah}}</span>
                                        <br>
                                        <a href="/user/keranjang/batal/{{$k->id_produk}}"
                                            style="background-color : rgb(216, 216, 216); color: black;"
                                            class="button">Batal</a>
                            </li>
                            @endforeach
                        </ul>
                    </main>
                    <form method="post" action="/user/beli" enctype="multipart/form-data">
                        @csrf
                        <label style="color: black">Bukti Pembayaran</label>
                        <br>
                        <input type="file" id="file" name="bayar">
                        <button type="submit" class="byr-button">Checkout</button>
                    </form>
                </div>
                <!-- #primary -->
            </div>
        </div>
    </div>
</body>
@endsection