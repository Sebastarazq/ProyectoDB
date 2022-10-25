<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="Styles.css"> <!--se conecta el html con el css-->
    <style type="text/css">
        body{
            font-family: 'SF Pro';
            background-color: #252440;
            margin: 0;
        }

        a{
            color: black;
            text-decoration: none;
        }
    </style> <!--codigo para quitar delineado y color azul a las palabras que llevan link-->
</head>
<body> <!--aqui se ponen todos los elementos de la pagina--->
    <div class="loginback">
        <img class="backgroundimg1" src="../imagenes/imgbackground.png">
    </div>

    <div class="logo">
        <img class="imglog1" src="img/logo1.png">
        <h1 class="h1log">Pontic</h1>
    </div>

    <div class="login1">
        <h1 class="h1log1">En que estas pensando?</h1>
        <p class="plog1">Únete a Pontic ahora</p>
    </div>

    <div class="btnlog1">
        <div class="btnlog1_1">
        <a href="../vistas/login.php">iniciar sesión</a>
        </div>
        <br>
        <div class="btnlog1_2">
        <a href="../vistas/register.php">registrarse</a>
        </div>
        <br>
        <a class="btnlog1_3" href="../vistas/home_invitado.php">Continuar como invitado</a>
    </div>
</body>
</html>