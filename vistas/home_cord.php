<?php
$conex = mysqli_connect("localhost","root","","pontic");
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
            background-color: lightgray;
        }
        a{
            color: black;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="rectanguloUser"></div>
    <!-- Rectangulo rojo gestionar iniciativas -->
    <a href="../vistas/cord_gestion.php">
        <div class="rectanguloGest"></div>
        </a>
    <!-- Rectangulo gris administrar usuarios -->  
    <a href="../vistas/cord_adminusuarios.php">
        <div class="rectanguloadmuser"></div>
        </a>
        <!-- Rectangulo gris administrar usuarios -->  
    <!-- Icono usuario -->
    <div class="usuarioIcon">     
        <img src="../imagenes/usuario.png">
    </div>
    <!-- Texto usuario  -->
    <div class="usuarioText1">
        <h1>Coordinador</h1>
    </div>
    <!-- Texto Gestionar -->
    <div class="textgest">
        <a href="../vistas/cord_gestion.php">
        <h1>Gestionar iniciativas</h1>
        </a>
    </div>
    <div class="head"></div>
    <div class="ponticHome">
        <h1>PonTic</h1>
    </div>
    <!--Texto administrar usuarios-->
    <div class="adminuser">
        <a href="../vistas/cord_adminusuarios.php">
        <h1>Administrar usuarios</h1>
        </a>
    </div>
     <!-- Icono administrar usuario-->
     <div class="admuserIcon">
        <a href="../vistas/cord_adminusuarios.php">
        <img src="../imagenes/admusuarios.png" href="../vistas/cord_adminusuarios.php">
        </a>
    </div>
    <!-- Icono casa -->
    <div class="casa">
        <a href="../vistas/home_cord.php">
        <img src="../imagenes/casa.png" href="../vistas/home.php">
        </a>
    </div>
    <!-- Icono salir -->
    <div class="salir">
        <a href="../vistas/inicio.php">
        <img src="../imagenes/cerrar-sesion.png">
        </a>
    </div>
    <!-- Icono gestionar iniciativa -->
    <div class="admfoto">
        <a href="../vistas/cord_gestion.php">
        <img src="../imagenes/gest.png">
        </a>
    </div>

    <?php
    $sql="SELECT * FROM publicaciones";
    $result=mysqli_query($conex,$sql);
     while($mostrar=mysqli_fetch_array($result)){
    ?>
        <form class="pub" method="post">
            <label class="tit"><?php echo $mostrar['titulo_publicacion'] ?></label>
            <label class="sed"><?php echo $mostrar['sede_publicacion'] ?></label>
            <a class="yt" href="<?php echo $mostrar['yt_publicacion'] ?>"><img src="../imagenes/youtube.png"></a>
            <label class="des"><?php echo $mostrar['descripcion_publicacion'] ?></label>
            <label class="fec"><?php echo $mostrar['fecha_publicacion'] ?></label>
            
        </form>
    <?php
    include('../conexiones/comentarios.php');
    ?>

    <?php
    }
    ?>
    </body>
    

</html>
    