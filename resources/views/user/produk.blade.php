@extends('user.layout')
@section('badan')
<style>
    .col {
        float:left;
        width: 50%;
        padding: 70px;
        padding-top: 0;
        height: 350px;
        /* Should be removed. Only for demonstration */
    }

    .cart-button {
        background-color: rgb(37, 32, 32);
        color: white;
    }
</style>

<body class="home page page-template page-template-template-portfolio page-template-template-portfolio-php">
    <div id="page">
        <div class="container">
            <div id="content" class="site-content">
                <div id="primary" class="content-area column full">
                    <main id="main" class="site-main" role="main">
                        <div id="container">
                            <div class="row">
                                @foreach($produk as $p)
                                <div class="product">
                                    <div class="col">
                                        <img width="500px" height="500px" src="{{asset('img/produk/'.$p->gambar)}}">
                                    </div>
                                    <div class="col">
                                        <h1 itemprop="name" class="product_title entry-title"><font color="#CD853F">{{$p->nama}}</font></h1>
                                        <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                            <p class="price">
                                                <span class="amount"><font color="#D2691E">Rp.{{$p->harga}}</font></span>
                                            </p>
                                        </div>
                                        <div itemprop="description">
                                            <p>
                                                {{$p->keterangan}}
                                            </p>
                                        </div>
                                        <form class="cart" action="/user/produk/pesan" method="post"
                                            enctype='multipart/form-data'>
                                            @csrf
                                            <div class="quantity">
                                                <input type="hidden" name="id_produk" value="{{$p->id}}">
                                                <input type="number" step="1" min="1" max="" name="jumlah" value="1"
                                                    title="Qty" class="input-text qty text" size="4" />
                                            </div>
                                            <button type="submit" class="cart-button">Add to cart</button>
                                        </form>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection