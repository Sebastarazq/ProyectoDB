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
    <link rel="stylesheet" href="Styles.css">
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

    <div class="selecc"></div>

    <?php
    $sql="SELECT * FROM publicaciones";
    $result=mysqli_query($conex,$sql);
     while($mostrar=mysqli_fetch_array($result)){
    ?>
        <form class="pub" method="post">
            <label class="tit"><?php echo $mostrar['titulo_publicacion'] ?></label>
            <label class="sed"><?php echo $mostrar['sede_publicacion'] ?></label>
            <a class="yt" href="<?php echo $mostrar['yt_publicacion']?>"><img src="../imagenes/youtube.png"></a>
            <label class="des"><?php echo $mostrar['descripcion_publicacion'] ?></label>
            <label class="fec"><?php echo $mostrar['fecha_publicacion'] ?></label>
            
        </form>
    <?php
    }
    ?>
        
        <div class="publiOp">
                
            <button class="boto1" name="1star">
                1
            </button>
            <button class="boto2"  name="2star">
                2
            </button>
            <button class="boto3"  name="3star">
                3
            </button>
            <button class="boto4"  name="4star">
                4
            </button>
            <button class="boto5"  name="5star">
                5
            </button>  
                    <input type="varchar" class ="coment1" placeholder="Agrega tu comentario" name="comentariotxt">
                    <input type="submit" class="coment2" value="comentar" name="coment" >
                    
                <?php
                $sqli="SELECT * FROM comentario";
                $result=mysqli_query($conex,$sqli);
                while($most=mysqli_fetch_array($result)){
                ?>
                <div class="coments">
                    <h1><?php echo $most['texto_comentario']?></h1>
                    
            </form>
            
        <?php
        }
        ?>
    </form>
        <div class="contact">
        <a href="contacto.php">contactar</a>
        </div>
        <div class="califi">califica:</div>
    </div>
<?php
include('../conexiones/comentarios.php');
include('../conexiones/calificaciones.php');
?>

</body>
</html>
    
