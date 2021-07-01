<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TueBakery</title>
    <link rel='stylesheet' href='{{asset("/css/woocommerce-layout.css")}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset("/css/woocommerce-smallscreen.css")}}' type='text/css'
        media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' href='{{asset("/css/woocommerce.css")}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset("css/font-awesome.min.css")}}' type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset('css/user_style.css')}}' type='text/css' media='all' />
    <link rel='stylesheet'
        href='https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500,700%7CHerr+Von+Muellerhoff:400,500,700%7CQuattrocento+Sans:400,500,700'
        type='text/css' media='all' />
    <link rel='stylesheet' href='{{asset("css/easy-responsive-shortcodes.css")}}' type='text/css' media='all' />
</head>

<header id="masthead" class="site-header">
    <div class="site-branding">
        <h1 class=""><a href="index.html" rel="home"><center><font color="#DEB887">TueBakery</font></center></a></h1>
    
    </div>
    <nav id="site-navigation" class="main-navigation">
        <div class="menu-menu-1-container">
            <ul id="menu-menu-1" class="menu">
                <li><a href="/user">Home</a></li>
                <li><a href="/user/keranjang">Keranjang</a></li>
                <li><a href="/user/pembelian">Pembelian</a></li>
                <li><a href="/logout">Logout</a></li>
            </ul>
        </div>
    </nav>
</header>



@yield('badan')
<!-- .container -->

<!-- #page -->
<script src='js/jquery.js'></script>
<script src='js/plugins.js'></script>
<script src='js/scripts.js'></script>
<script src='js/masonry.pkgd.min.js'></script>

</html>