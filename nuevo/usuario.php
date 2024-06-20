<?php
class Usuarios
{
    public static function guardarRegistro($documento, $nombre, $fec_nac, $contraseña)
    {

        $connec = mysqli_connect('localhost', 'root', '', 'pruebitabd');

        $sql = "insert into tb_usuarios(documento, nombre, fec_nac, contraseña) values ($documento, '$nombre', '$fec_nac', '$contraseña')";

        $r = $connec->query($sql);
        mysqli_affected_rows($connec);

        $connec->close();



    }
    public static function consultarUsuarios()
    {
        $connec = mysqli_connect('localhost', 'root', '', 'pruebitabd');

        $sql = "select * from tb_usuarios";

        $r = $connec->query($sql);

        $salida = "";
        while ($fila = mysqli_fetch_array($r)) {
            $salida .= "<h1>" . $fila[0] . "</h1>";
            $salida .= "<h2>" . $fila[1] . "</h2>";
            $salida .= "<a href='index.php?documento=" . $fila[0] . "'>ACTUALIZAR</a>";
        }
        return $salida;

    }

    public static function retornarDato($des, $documento)
    {
        $connec = mysqli_connect('localhost', 'root', '', 'pruebitabd');


        $salida = "";

        $documentoS = $documento;

        if ($des == 1) {

            $campo = "nombre";
            $tabla = "tb_usuarios";
            $campoBuscar = "documento";

        } elseif ($des == 2) {
            $campo = "fec_nac";
            $tabla = "tb_usuarios";
            $campoBuscar = "documento";
        } elseif ($des == 3) {
            $campo = "foto";
            $tabla = "tb_usuarios";
            $campoBuscar = "documento";
        } elseif ($des == 4) {
            $campo = "contraseña";
            $tabla = "tb_usuarios";
            $campoBuscar = "documento";
        } elseif ($des == 0) {
            $campo = "documento";
            $tabla = "tb_usuarios";
            $campoBuscar = "documento";
        }

        $sql = "select $campo from $tabla where $campoBuscar ='$documentoS'";

        $r = $connec->query($sql);

        while ($fila = $r->fetch_array()) {
            $salida = $fila[0];
        }
        return $salida;

    }


    public static function actualizarD($documento, $nombre, $fec_nac, $contraseña)
    {

        $connec = mysqli_connect('localhost', 'root', '', 'pruebitabd');
        $sql = "update tb_usuarios set documento = $documento, ";
        $sql .= "nombre = '$nombre', fec_nac = '$fec_nac', contraseña ='$contraseña' where documento = $documento ";
        echo $sql;

        $connec->query($sql);

        mysqli_affected_rows($connec);

        $connec->close();
    }
}

