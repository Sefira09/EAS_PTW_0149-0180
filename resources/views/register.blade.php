<!DOCTYPE html>
<html>

<style>
    body {
    background:url('../img/register.jpg');
    background-repeat: no-repeat;
    padding-bottom: 100px;
    margin:0px;
    font-family: 'Ubuntu', sans-serif;
    background-size: 100% 100%;
  }
</style>
<head>
    <title>login</title>
</head>

<body>

    <div class="register">
        <div class="login-header">
        <center><font color="#F5F5DC"> <h1>REGISTRASI</h1> </font></center>
        </div>
        <div class="register-form">
            <form action="/register/add" method="post">
                @csrf
                <center><font color="#DEB887"><h3>Nama :</h3></font></center>
                <center><input name="nama" type="text" placeholder="Nama" /><br></center>
                <center><font color="#DEB887"><h3>Email :</h3></font></center>
                <center><input name="email" type="text" placeholder="Email" /><br></center>
                <center><font color="#DEB887"><h3>Password:</h3></font></center>
                <center><input name="password" type="password" placeholder="Password" /></center>
                <center><font color="#DEB887"><h3>No Telp :</h3></font></center>
                <center><input name="no_telp" type="text" placeholder="No Telp" /><br></center>
                <center><font color="#DEB887"><h3>Alamat :</h3></font></center>
                <center><input name="alamat" type="text" placeholder="Alamat" /><br></center>
                <br>
                <center><font color="#DEB887"><input type="submit" value="Register" class="login-button" /></font></center>
                <br>
                <center><a href="/" class="sign-up">Sign In!</a></center>
                <br>
            </form>
        </div>
    </div>

</body>
