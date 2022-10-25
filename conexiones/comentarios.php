<?php

include("conexion.php");

if (isset($_REQUEST['coment'])){
    

    if(strlen($_POST['comentariotxt']) >= 1){
        $coment=trim($_POST['comentariotxt']);
        $consulta= "INSERT INTO comentario(texto_comentario) VALUES('$coment')";
        $result = mysqli_query($conex,$consulta);

        if($result){        
            header('refresh:1;url=home_estudiante.php');    
        }
    }
}


?>