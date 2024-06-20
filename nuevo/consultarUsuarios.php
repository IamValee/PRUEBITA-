<?php
include("usuario.php");

$r = Usuarios::consultarUsuarios();

echo $r;
?>

<style> 
    h2{ 
        background-color: yellow;
    }
</style>

<a href="index.php">registrar</a>