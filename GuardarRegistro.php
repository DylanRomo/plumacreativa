<?php
session_start();
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $password = $_POST['password'];

    $sql = "INSERT INTO singup (NombreUsuario, Contraseña, Email, Telefono) VALUES (?, ?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("ssss", $nombre, $password, $email, $telefono);

    if ($stmt->execute()) {
        $_SESSION['ID_User'] = $stmt->insert_id;
        $_SESSION['NombreUsuario'] = $nombre;

        header("Location: Principal.php");
        exit();
    } else {
        if ($conexion->errno == 1062) {
            echo "<p style='color:red; text-align:center;'>Usuario o email ya existe</p>";
        } else {
            echo "<p style='color:red; text-align:center;'>Error: ".$conexion->error."</p>";
        }
        echo "<p style='text-align:center;'><a href='Registro.php'>Volver</a></p>";
        exit();
    }
} else {
    header("Location: Registro.php");
    exit();
}
?>
