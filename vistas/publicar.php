<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pontilaunch</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;700&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Styles.css?v=<?php echo time(); ?>">
    <style type="text/css">
        body{
            font-family: 'SF Pro';
            position: absolute;
            background-image: url("../imagenes/fond1.png");
            margin: 0;
        }

        a{
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
    
    <div class="formregest2">
        <div class="txtregistro">
            <h1>Editor de proyectos</h1>
        </div>

        <div class="registra">
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                <input type="text" required placeholder="titulo de proyecto" class="elg1" name="titulo" autocomplete="off">

                <input type="text" required placeholder="sede" name="sede" class="elg2" autocomplete="off">

                <input type="text" required placeholder="escriba una breve descripcion" name="descripcion" class="elg3" autocomplete="off">

                <input type="varchar" required placeholder="añade un link de YouTube" name="yt" class="elg4" autocomplete="off">
                <br>
                <label>Añade un documento:</label>
                <input type="file"   name="pdf" class="elg5" autocomplete="off">
                <br>
                <input type="submit" value="publicar proyecto" name="publi" class="elg6">
            </form> 

        </div>

    </div>

    <?php
    include('../conexiones/gpublicar.php');
    ?>




</html>
    