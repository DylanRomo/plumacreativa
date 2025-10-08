<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="styleISR.css">
    <link rel="icon" href="PlumaCreativa.png" type="image/png">
</head>
<body>
    <div class="contenedor">
        <div class="cajaimg">
            <h1>Registro</h1>
            <hr>
            <br>
            <br>
            <img src="PlumaCreativa.png" alt="PlumaCreativa">
            <p>Bienvenido de vuelta <br> a Pluma Creativa</p>
        </div>

        <div class="cajaform">
            <form action="GuardarRegistro.php" method="post">
                <label for="nombre">Usuario:</label>
                <div class="cajainput">
                <input type="text" id="nombre" name="nombre" required>
                </div>

                <label for="email">Email:</label>
                <div class="cajainput">
                <input type="email" id="email" name="email" required>
                </div>

                <label for="telefono">Teléfono:</label>
                <div class="cajainput">
                <input type="text" id="telefono" name="telefono">
                </div>

                <label for="password">Contraseña:</label>
                <div class="cajainput">
                <input type="password" id="password" name="password" required>
                </div>

                <button type="submit" name="registrarse">Registrarse</button>
            </form>
            <p style="text-align:center;"><a href="IniciarSesion.php">Ya tengo cuenta</a></p>
        </div>

    </div>
</body>
</html>
