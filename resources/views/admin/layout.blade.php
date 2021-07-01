<!DOCTYPE html>
<html>

<head>
    <title>Admin</title>
    <meta charset ="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="" />
</head>

<body>
    <div id="wrap">
        <div id="header">
            
        </div>
        <div class="row">
            <div class="col-2 col-m-2">
                <div id="silebar">
                    <div id="judul_silebar"> Admin
                    </div>
                    <div id="isi_silebar">
                        <ul>
                            <li><a href="/admin/produk"><font color="#CD853F">Produk</font></a></li>
                            <li><a href="/admin/transaksi"><font color="#CD853F">Transaksi</font></a></li>
                            <li><a href="/admin/user"><font color="#CD853F">User</font></a></li>
                            <li><a href="/admin/laporan"><font color="#CD853F">Laporan</font></a></li>
                            <li><a href="/logout"><font color="#CD853F">Logout</font></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-9 col-m-7">
                @yield('badan')
            </div>
        </div>
        <div style="clear:both"></div>
        
    </div>
</body>

</html>