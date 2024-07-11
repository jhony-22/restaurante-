<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="../css/estilo1.css">

</head>
<body>
    <div class="container">
        <h1> <?php session_start(); echo $_SESSION['usuario']['nombre']; ?>, Bienvenido al Yuky Yzakaya</h1>
        <a href="../vista/index.php" class="button">Cerrar Sesión</a>
    </div>
    <div class="info">
        <div class="menu">
            <h1>Menú</h1>
            <ul>
                
                <li><a href="comida.html" >Comida</a></li>
                <li><a href="postres.html">Postres</a></li>
                <li><a href="bebidas.html">Bebidas</a></li>
            </ul>
        </div>
    </div>
    <div class="japanese-food">
        <h2>Comida Japonesa</h2>
        <img src="../imagenes/comidaJ.png">
        <p>La comida japonesa es conocida por su énfasis en la estacionalidad de los alimentos, la calidad de los ingredientes y la presentación. Disfruta de una gran variedad de sushi, sashimi, ramen, y más.</p>
        
    </div>
    <div class="footer">
        <p> 2024 Comidas y Más. Todos los derechos reservados.</p>
    </div>
</body>
</html>
