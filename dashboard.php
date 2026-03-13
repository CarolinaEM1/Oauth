<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: index.php");
}
?>

<h1>Bienvenido</h1>

<p>Usuario: <?php echo $_SESSION['user']; ?></p>