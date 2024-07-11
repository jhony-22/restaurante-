<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>RELLENE LOS CAMPOS</h1>
        </header>
        <form id="fIngresarCliente" action="../Controlador/ControladorUsuario.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="hidden" name="idusuario" value="0">
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="rol">Rol</label>
                <input type="text" id="rol" name="rol" required>
            </div>
            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" id="correo" name="correo" required>
            </div>
            <div class="form-group">
                <label for="clave">Clave</label>
                <input type="password" id="clave" name="clave" required>
            </div>
            <script>
            function redirigir() {
                window.location.href = "index.php";
            }
            </script>

            <button type="button" onclick="redirigir()">Volver</button>
            <br>
            <br>
            <button type="submit" name="enviar" value="Insertar">Insertar</button>
        </form>
    </div>
</body>
</html>
