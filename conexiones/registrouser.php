<?php

include("conexion.php");

if (isset($_POST['registrarse'])) {
    if(strlen($_POST['email']) >= 1 && strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['fecha']) >= 1 && strlen($_POST['contrasena']) >= 1) {
        $email=trim($_POST['email']);
        $nombre=trim($_POST['nombre']);
        $apellido=trim($_POST['apellido']);
        $fecha=date($_POST['fecha']);
        $contrasena=trim($_POST['contrasena']);
        $consulta= "INSERT INTO usuario(nombre_usuario, apellido_usuario, correo_usuario, fecha_usuario, contrasena_usuario) VALUES ('$nombre','$apellido','$email','$fecha','$contrasena')";
        $resultado = mysqli_query($conex,$consulta);
          
        if ($resultado) {        
            header("location:inicio.php");    
        }
    }
}

?>