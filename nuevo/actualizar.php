<?php
include ("usuario.php");

$documento = $_GET["documento"];
$nombre = $_GET["nombre"];
$fec_nac = $_GET["fec_nac"];
$contraseña = $_GET["contraseña"];

$r = Usuarios::actualizarD($documento, $nombre, $fec_nac, $contraseña);

if ($r > 0) {
    echo "errorsito";
} else {
    //header("location:consultarUsuarios.php");

}