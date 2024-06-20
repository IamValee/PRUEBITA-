<?php
include ("usuario.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>



    <form action="<?php echo (isset($_GET['documento'])) ? "actualizar.php" : 'redireccion.php'; ?>" method="GET">
        <input type="text"
            value="<?php echo (isset($_GET['documento'])) ? Usuarios::retornarDato(0, $_GET['documento']) : ''; ?>"
            placeholder="doc" name="documento">

        <input type="text"
            value="<?php echo (isset($_GET['documento'])) ? Usuarios::retornarDato(1, $_GET['documento']) : ''; ?>"
            placeholder="nom" name="nombre">

        <input type="date"
            value="<?php echo (isset($_GET['documento'])) ? Usuarios::retornarDato(2, $_GET['documento']) : ''; ?>"
            placeholder="" name="fec_nac">

        <input type="text"
            value="<?php echo (isset($_GET['documento'])) ? Usuarios::retornarDato(3, $_GET['documento']) : ''; ?>"
            placeholder="" name="foto">

        <input type="text"
            value="<?php echo (isset($_GET['documento'])) ? Usuarios::retornarDato(4, $_GET['documento']) : ''; ?>"
            placeholder="clave" name="contraseña">

        <input type="submit" name="enviar">


    </form>

    </form>


</body>

</html>