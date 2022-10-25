<?php
include('conexion.php');

if (isset($_POST['valid'])) {
$correo=trim($_POST['correo']);
$contra=trim($_POST['contra']);

$consulta = "SELECT * FROM miembro where correo_estudiante = '$correo' and contrasena_estudiante = '$contra'";
$resultado= mysqli_query($conex, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas){
    header("location:home_estudiante.php");

}else{
    ?>
    <a class="bad">Error en la autentificación</a>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conex);
}
?>