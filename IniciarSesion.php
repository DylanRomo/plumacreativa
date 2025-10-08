<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="styleISR.css">
    <link rel="icon" href="PlumaCreativa.png" type="image/png">
</head>
<body>
    <div class="contenedor">
        <div class="cajaimg">
            <img src="PlumaCreativa.png" alt="PlumaCreativa">
            <p>Bienvenido de vuelta <br> a Pluma Creativa</p>
        </div>

        <div class="cajaform">
            <h1>Login</h1>
            <hr>
            <br>
            <br>
            <form action="validad.php" method="post">
                <label for="username">Usuario:</label>
                <div class="cajainput">
                    <input type="text" id="username" name="username" required>
                </div>
                <br>
                <label for="password">Contraseña:</label>
                <div class="cajainput">
                    <input type="password" id="password" name="password" required>
                </div>
                <br>
                <button type="submit" name="Iniciar Sesion">Iniciar Sesión</button>
            </form>
        </div>
    </div>
</body>
</html>