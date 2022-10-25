<?php
include('conexion.php');

if (isset($_POST['valid'])) {
$correo=trim($_POST['correo']);
$contra=trim($_POST['contra']);

$consulta = "SELECT * FROM coordinador where correo_coordinador = '$correo' and contrasena_coordinador = '$contra'";
$resultado= mysqli_query($conex, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas){
    header("location:home_cord.php");

}else{
    ?>
    <a class="bad">Error en la autentificación</a>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conex);
}
?>