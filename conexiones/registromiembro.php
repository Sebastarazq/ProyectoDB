<?php   

include("conexion.php");

if (isset($_POST['Eregistrarse'])) {
    if(strlen($_POST['email']) >= 1 && strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['fecha']) >= 1 && strlen($_POST['contrasena']) >= 1 && strlen($_POST['identificacion']) >= 1 && strlen($_POST['universidad']) >= 1 && strlen($_POST['semestre']) >= 1 && strlen($_POST['promedio']) >= 1   ) {
        $email=trim($_POST['email']);
        $nombre=trim($_POST['nombre']);
        $apellido=trim($_POST['apellido']);
        $fecha=date($_POST['fecha']);
        $contrasena=trim($_POST['contrasena']);
        $identificacion=trim($_POST['identificacion']);
        $universidad=trim($_POST['universidad']);
        $semestre=trim($_POST['semestre']);
        $promedio=trim($_POST['promedio']);
        $consulta= "INSERT INTO miembro(nombre_estudiante, apellido_estudiante, correo_estudiante, contrasena_estudiante, fecha_estudiante, identificacion_estudiante, universidad_estudiante, semestre_estudiante, promedio_estudiante) VALUES ('$nombre','$apellido','$email','$contrasena','$fecha','$identificacion','$universidad','$semestre','$promedio')";
        $resultado = mysqli_query($conex,$consulta);
              
        if ($resultado) {        
            header("location:inicio.php");    
        }
    }
}
?>