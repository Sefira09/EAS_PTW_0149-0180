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
                            @foreach($pembelian as $p)
                            <li class="product">
                                <a href="#">
                                    <h3>{{$p->id_trans}}</h3>
                                    <span class="price"><span class="amount">Rp. {{$p->total}}</span>
                                        <br>
                                        <span class="price"><span style="font-size: 15px" class="amount">{{$p->status}}</span>
                                </a>
                                <a href="/user/pembelian/terima/{{$p->id_trans}}" style="background-color : rgb(216, 216, 216); color: black;"
                                    class="button">Pesanan DiTerima</a>
                            </li>
                            @endforeach
                        </ul>
                    </main>
                    <a href="/user"><button class="byr-button">Kembali</button></a>
                </div>
                <!-- #primary -->
            </div>
        </div>
    </div>
</body>
@endsection