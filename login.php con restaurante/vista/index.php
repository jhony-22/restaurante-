<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="../css/stile.css">
    
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <form action="../controlador/contrLogin.php" method="post">
            <div class="form-group">
                <label for="correo">Correo</label>
                <input id="correo" name="correo" type="email" maxlength="60" placeholder="nombre@correo.com" required autofocus>
            </div>
            <div class="form-group">
                <label for="clave">Contraseña</label>
                <input id="clave" name="clave" type="password" placeholder="Contraseña" required>
            </div>
            <a href="formRegistro.php">Registrarse</a>
        <br>
        <br>
            <div class="form-group">
                <button name="enviar" type="submit" value="Validar">Inisiar seccion</button>
            </div>
        </form>
        

        <?php
        @$mensaje = $_GET['mensaje'];
        if (isset($mensaje) && $mensaje == 'incorrecto') {
            echo '<div class="alert">Correo o clave incorrecta</div>';
        }
        ?>
    </div>
</body>
</html>

