<!DOCTYPE html>
<html>

<head>
    <title>login</title>
</head>
<style>
    body {
        background: url('../img/register.jpg');
        background-repeat: no-repeat;
        padding-bottom: 295px;
        margin: 0px;
        font-family: 'Ubuntu', sans-serif;
        background-size: 100% 100%;
    }
</style>

<body>

    <div class="login">
        <div class="login-header">
        <center><font color="#F5F5DC"> <h1>LOGIN</h1> </div> </font></center> 
        <div class="login-form">
            <form action="login" method="post">
                @csrf
                <center><font color="#DEB887"><h3>Email :</h3></font></center> 
                <center><input type="email" name="email" placeholder="Username" /><br></center>
                <center><font color="#DEB887"><h3>Password:</h3></font></center> 
                <center><input type="password" name="password" placeholder="Password" /></center>
                <br>
                <center><input type="submit" value="Login" class="login-button" /></center>
            </form>
            <br>
            <center><a href="/register" class="sign-up"><font color="#DEB887">Sign Up!</font></a></center> 
            <br>
        </div>
    </div>

</body>

</html>