<?php
$conex = mysqli_connect("localhost", "root", "", "pontic");
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pontilaunch</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;700&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Styles.css">
    <style type="text/css">
        body{
            font-family: 'SF Pro';
            background-color: lightgray;
            margin: 0;
        }

        a {
            color: black;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <header class="headerdetodo">
        <img class="logo1" src="../imagenes/logo1.png" alt="logo">
        <h1>Pontic</h1>
        <div class="casa">
        <a href="../vistas/home_admin.php">
            <img src="../imagenes/casa.png" href="../vistas/home_admin.php">
        </a>
        </div>
        <!-- Icono comentario -->
        <div class="comentario">
            <a href="../vistas/quejas.php">
                <img src="../imagenes/comentario.png">
            </a>
        </div>
        <!-- Icono salir -->
        <div class="salir">
            <a href="../vistas/inicio.php">
                <img src="../imagenes/cerrar-sesion.png">
            </a>
        </div>
    </header>

    <div>
        <h1>quejas entrantes</h1>
    </div>


</body>

</html>