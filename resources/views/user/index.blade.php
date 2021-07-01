@extends('user.layout')
@section('badan')

<body class="home page page-template page-template-template-portfolio page-template-template-portfolio-php">
    <div id="page">
        <div class="container">
            <div id="content" class="site-content">
                <div id="primary" class="content-area column full">
                    <main id="main" class="site-main">
                        <div class="grid portfoliogrid">
                            @foreach($produk as $p)
                            <article class="hentry">
                                <header class="entry-header">
                                    <div class="entry-thumbnail">
                                        <a href="/user/produk/{{$p->id}}"><img src="{{asset('img/produk/'.$p->gambar)}}"
                                                class="attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                                alt="p1" /></a>
                                    </div>
                                   <h1 class="entry-title"><a href="/user/produk/{{$p->id}}"
                                            rel="bookmark"> <center><font color="#CD853F">{{$p->nama}}</font></center></a></h1>
                                            <h2 class="entry-title"><center>{{$p->harga}}</center></h2>

                                </header>
                            </article>
                            @endforeach
                        </div>
                        <!-- .grid -->

                        <nav class="pagination">
                            <span class="page-numbers current"><font color="Black">1</font></span>
                            <a class="page-numbers" href="#"><font color="Black">2</font></a>
                            <a class="next page-numbers" href="#"><font color="Black">Next </font></a>
                        </nav>
                        <br />

                    </main>
                    <!-- #main -->
                </div>
                <!-- #primary -->
            </div>
            <!-- #content -->


        </div>
    </div>

</body>
@endsection