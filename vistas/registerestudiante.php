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

    <form class="formregest">
        <div class="volver1">
            <a href="../vistas/inicio.php">regresar</a>
        </div>
        <div class="txtregistro">
            <p>registrate en pontic como:</p>
        </div>

        <div class="aestudiante">
            <a href="../vistas/registerestudiante.php">estudiante</a>
        </div>

        <div class="ausuario">
            <a href="../vistas/register.php">usuario</a>
        </div>
        <div class="registra">
            <form method="post">

                <input type="text" required placeholder="correo electrónico" class="elg1" name="email" autocomplete=" off ">
                <!--cuadro para escribir el correo electronic-->

                <input type="text" required placeholder="nombres" class="elg2" name="nombre" autocomplete=" off ">
                <!--cuadro para escribir el nombre-->

                <input type="text" required placeholder="apellidos" class="elg3" name="apellido" autocomplete=" off ">
                <!--cuadro para escribir apellidos-->
                <br>    
                <label class="pfecharegest">fecha de nacimiento:</label>
                <input type="date" required placeholder="fecha de nacimiento" class="elg4" name="fecha" autocomplete=" off ">
                <!--cuadro para escribir la fecha de nacimiento-->

                <input type="password" required placeholder="contraseña" class="elg5" name="contrasena" autocomplete=" off ">
                <!--cuadro para escribir la fecha de nacimiento-->

                <input type="varchar" required placeholder="identificación" class="elg6" name="identificacion" autocomplete=" off ">

                <input type="text" required placeholder="universidad" class="elg7" name="universidad" autocomplete=" off ">

                <input type="varchar" required placeholder="semestre" class="elg8" name="semestre" autocomplete=" off ">

                <input type="varchar" required placeholder="promedio" class="elg9" name="promedio" autocomplete=" off ">
                <br>
                <input type="submit" class="btnregister" name="Eregistrarse" value="registrarse">
                <!--al darle click lo registra en el sistema-->
            </form>
            <div class="terminos2">
                <input type="checkbox" required class="terminos">
                <a>Sí, he leído y presto mi consentimiento a los Términos de Uso del sitio, y al procesamiento, tratamiento y transferencia de mis datos personales conforme a lo dispuesto en la<a style="color: blue ;" href="https://www.minambiente.gov.co/wp-content/uploads/2022/08/DS-E-GET-01_V3_Politica_proteccion_datos_personales.pdf"> Política de tratamiento y protección de datos personales. </a>
            </div>
        </div>
    </form>

    <?php
    include('../conexiones/registromiembro.php');
    ?>

</body>

</html>