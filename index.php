<?php
session_start();
$mensaje = "";

if (isset($_POST["iniciar"])) {
    $usuario = $_POST["usuario"];
    $clave = $_POST["clave"];
    $tipo = $_POST["tipousuario"];
    $usuario = strtoupper($usuario);
    if ($usuario == "ADMIN" && $clave == "12345") {
        //Variables de sesion
        $_SESSION["user"] = "DARWIN ALFONSO FLORES COLINDRES";
        $_SESSION["tipo"] = $tipo;
        $_SESSION["autorizado"] = true;
        header("location: principal.php"); // Redireccionar a otra página
    } else {
        $mensaje = "Usuario y/o Contraseña Iconrrecta";
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>

<body>
    <h2>LOGIN</h2>
    <form method="POST" action="index.php">
        <label for="">Usuario: </label>
        <input type="text" name="usuario" placeholder="Usuario"><br><br>
        <label for="">Clave: </label>
        <input type="password" name="clave" placeholder="Password"><br><br>
        <select name="tipousuario" id="">
            <option value="Administrador">Administrador</option>
            <option value="Invitado">Invitado</option>
        </select>
        <br><br>
        <button type="submit" name="iniciar">INICIAR SESIÓN</button>
    </form>
    <?php echo $mensaje; ?>
</body>

</html>