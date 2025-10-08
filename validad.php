<?php
session_start();
include("conexion.php");

// Revisar que se haya enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['username'];
    $contrasena = $_POST['password'];

    // Preparar consulta segura
    $sql = "SELECT ID_User, NombreUsuario, Contraseña FROM singup WHERE NombreUsuario = ? AND Contraseña = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ss", $usuario, $contrasena);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows == 1) {
        $row = $resultado->fetch_assoc();

        $_SESSION['ID_User'] = $row['ID_User'];
        $_SESSION['NombreUsuario'] = $row['NombreUsuario'];

        header("Location: Principal.php");
        exit();
    } else {
        echo "<p style='color:red; text-align:center;'>Usuario o contraseña incorrectos</p>";
        echo "<p style='text-align:center;'><a href='IniciarSesion.php'>Volver al login</a></p>";
        exit(); // Importante detener aquí
    }
} else {
    header("Location: IniciarSesion.php");
    exit();
}
?>
