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
    <link rel="stylesheet" href="../styles/styles.css">
    <style type="text/css">
        body{
            backgroud-color: lightgray;
        }
        a {
            color: black;
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="ponticHome">
        <h1>PonTic</h1>
    </div>
        <!-- Rectangulo amarillo proyectos -->
    <div class="rectanguloUser"></div>
    <!-- Rectangulo naranja publicar -->
    <a href="../vistas/publicar.php">
        <div class="rectanguloProyect"></div>
    </a>

    <!-- Icono usuario -->
    <div class="usuarioIcon">
        <img src="../imagenes/usuario.png">
    </div>
    <!-- Texto usuario  -->
    <div class="estudiantetext">
        <h1>Estudiante</h1>
    </div>
    <!-- Icono proyecto -->
    <div class="proyectIcon">
        <a href="../vistas/publicar.php">
            <img src="../imagenes/editar.png">
        </a>
    </div>
    <!-- Texto Proyecto -->
    <div class="proyecText">
        <a href="../vistas/publicar.php">
            <h1>Publicar nuevo proyecto</h1>
        </a>
    </div>

    
    <!-- Icono casa -->
    <div class="casa">
        <a href="../vistas/home_estudiante.php">
            <img src="../imagenes/casa.png" href="../vistas/home_estudiante.php">
        </a>
    </div>
    <!-- Icono comentario -->
    <div class="comentario">
        <a href="../vistas/mensajes.php">
            <img src="../imagenes/comentario.png">
        </a>
    </div>
    <!-- Icono salir -->
    <div class="salir">
        <a href="../vistas/inicio.php">
            <img src="../imagenes/cerrar-sesion.png">
        </a>
    </div>
    <?php
    $sql = "SELECT * FROM publicaciones";
    $result = mysqli_query($conex, $sql);
    while ($mostrar = mysqli_fetch_array($result)) {
    ?>
        <form class="pub" method="post">
            <label class="tit"><?php echo $mostrar['titulo_publicacion'] ?></label>
            <label class="sed"><?php echo $mostrar['sede_publicacion'] ?></label>
            <iframe width="300" height="200" class="yt" src="<?php echo $mostrar['yt_publicacion'] ?>"></iframe>
            <label class="des"><?php echo $mostrar['descripcion_publicacion'] ?></label>
            <label class="fec"><?php echo $mostrar['fecha_publicacion'] ?></label>

            <button class="boton" name="1star">
                1
            </button>
            <button class="boton" name="2star">
                2
            </button>
            <button class="boton" name="3star">
                3
            </button>
            <button class="boton" name="4star">
                4
            </button>
            <button class="boton" name="5star">
                5
            </button>
            <label class="contact">
                <a href="contacto.php">Contacto</a>
            </label>
            <label class="califi">Califica:</label>
            <input type="varchar" class="coment1" placeholder="Agrega tu comentario" name="comentariotxt">
            <input type="submit" class="coment2" value="comentar" name="coment">
        </form>

    <?php
    }
    ?>



    <?php
    include('../conexiones/comentarios.php');
    include('../conexiones/calificaciones.php');
    ?>
</body>

</html>