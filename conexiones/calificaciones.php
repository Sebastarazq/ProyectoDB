<?php

include("conexion.php");

if (isset($_REQUEST['1star'])){
    
    $consulta= "INSERT INTO calificaciones(1_estrella, 2_estrella, 3_estrella, 4_estrella, 5_estrella) VALUES('1','','','','')";
    $result = mysqli_query($conex,$consulta);

    if ($result) {        
        header("location:home_estudiante.php");   
    }

}

    if (isset($_REQUEST['2star'])){
    
        $consulta= "INSERT INTO calificaciones(1_estrella, 2_estrella, 3_estrella, 4_estrella, 5_estrella) VALUES('','2','','','')";
        $result = mysqli_query($conex,$consulta);

        if ($result) {        
            header("location:home_estudiante.php");   
        }

    }

    if (isset($_REQUEST['3star'])){
    
        $consulta= "INSERT INTO calificaciones(1_estrella, 2_estrella, 3_estrella, 4_estrella, 5_estrella) VALUES('','','3','','')";
        $result = mysqli_query($conex,$consulta);

        if ($result) {        
            header("location:home_estudiante.php");   
        }

    }

    if (isset($_REQUEST['4star'])){
    
        $consulta= "INSERT INTO calificaciones(1_estrella, 2_estrella, 3_estrella, 4_estrella, 5_estrella) VALUES('','','','4','')";
        $result = mysqli_query($conex,$consulta);

        if ($result) {        
            header("location:home_estudiante.php");   
        }

    }

    if (isset($_REQUEST['5star'])){
    
        $consulta= "INSERT INTO calificaciones(1_estrella, 2_estrella, 3_estrella, 4_estrella, 5_estrella) VALUES('','','','','5')";
        $result = mysqli_query($conex,$consulta);

        if ($result) {        
            header("location:home_estudiante.php");   
        }

    }

?>