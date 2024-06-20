<?php
include ("usuario.php");

$documento = $_GET["documento"];
$nombre = $_GET["nombre"];
$fec_nac = $_GET["fec_nac"];
$contraseña = $_GET["contraseña"];

$consulta = Usuarios::guardarRegistro($documento, $nombre, $fec_nac, $contraseña);

if ($consulta > 0) {
    echo "errorsito";
} else {
    header("location: consultarUsuarios.php");
}







