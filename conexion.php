<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "pluma_creativa";

$conexion = new mysqli($host, $user, $pass, $db);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
} else {
    $mensaje = "Conexión exitosa a la base de datos.";
    $tipo = 'exito';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>PLUMA CREATIVA</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="PlumaCreativa.png" type="image/png">
</head>
<body>
    <div class="contenedor">
        <?php if (isset($mensaje)) { ?>
            <div class="mensaje <?php echo ($tipo == 'exito') ? 'mensaje-exito' : 'mensaje-error'; ?>">
                <h1>PLUMA CREATIVA</h1>
                <img src="PlumaCreativa.png" alt="Foto">
                <br>
                <br>
                <br>
                <div class="cajaboton">
                    <button onclick="window.location.href='IniciarSesion.php'">Inicia Sesion</button>
                    <button onclick="window.location.href='Registro.php'">Registrate</button>
                </div>
                <br>
            </div>
        <?php } ?>
    </div>

</body>
</html>