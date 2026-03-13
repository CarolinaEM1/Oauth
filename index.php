<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Login OAuth</title>

<style>

body{
    margin:0;
    font-family: Arial, Helvetica, sans-serif;
    background: linear-gradient(135deg,#667eea,#764ba2);
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.container{
    background:white;
    padding:40px;
    border-radius:15px;
    box-shadow:0 10px 25px rgba(0,0,0,0.2);
    text-align:center;
    width:350px;
}

h2{
    margin-bottom:30px;
}

.btn{
    display:block;
    width:100%;
    padding:12px;
    margin:10px 0;
    border:none;
    border-radius:8px;
    font-size:16px;
    cursor:pointer;
    color:white;
    transition:0.3s;
}

.discord{
    background:#5865F2;
}

.discord:hover{
    background:#4752c4;
}

.twitch{
    background:#9146FF;
}

.twitch:hover{
    background:#772ce8;
}

.footer{
    margin-top:20px;
    font-size:13px;
    color:#777;
}

</style>

</head>

<body>

<div class="container">

<h2>Iniciar sesión</h2>

<a href="discord-login.php">
<button class="btn discord">Iniciar con Discord</button>
</a>

<a href="twitch-login.php">
<button class="btn twitch">Iniciar con Twitch</button>
</a>

<div class="footer">
OAuth 2.0 Login
</div>

</div>

</body>
</html>