<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicia sesión - pontilaunch</title>
    <link rel="stylesheet" href="Styles.css">
    <!--se conecta el html con el css-->
    <style type="text/css">
        body{
            font-family: 'SF Pro';
            position: absolute;
            background-image: url("../imagenes/fond1.png");
            margin: 0;
        }

        a {
            color: black;
            text-decoration: none;
        }
    </style>
    <!--codigo para quitar delineado y color azul a las palabras que llevan link-->
</head>

<body>
    <header class="headerdetodo">
        <img class="logo1" src="../imagenes/logo1.png" alt="logo">
        <h1>Pontic</h1>
    </header>

    <div class="formregest3">
        <div class="volver1">
            <a href="../vistas/inicio.php">regresar</a>
        </div>
        <div class="register">
            <p>inicia sesion en pontilaunch</p>
            <form method="post">
                <input name="correo" type="email" required placeholder="correo electronico" class="elg1" autocomplete=" off ">
                <br>
                <input name="contra" type="password" required placeholder="contraseña" class="elg2" autocomplete=" off ">
                <br>
                <input type="submit" value="ingresar" class="elg3" name="valid">
            </form>

        </div>
    </div>

    <?php
    include('../conexiones/valid.php');
    include('../conexiones/validestud.php');
    include('../conexiones/validcor.php');
    include('../conexiones/validadm.php');
    ?>


</body>

</html>