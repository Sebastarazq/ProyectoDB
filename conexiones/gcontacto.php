<?php

include("conexion.php");

if (isset($_REQUEST['guardar'])){
    


    if(strlen($_POST['encabezado']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['mensaje']) >= 1){
        $encabezado=trim($_POST['encabezado']);
        $correo=trim($_POST['correo']);
        $mensaje=trim($_POST['mensaje']);
        $consulta= "INSERT INTO contacto(encabezado_contacto, correo_contacto, mensaje_contacto) VALUES('$encabezado','$correo','$mensaje')";
        $result = mysqli_query($conex,$consulta);

        if ($result) {        
            header("location:home_estudiante.php");
        }
    }
}


?>