<?php
include('conexion.php');

if (isset($_POST['valid'])) {
$correo=trim($_POST['correo']);
$contra=trim($_POST['contra']);

$consulta = "SELECT * FROM usuario where correo_usuario = '$correo' and contrasena_usuario = '$contra'";
$resultado= mysqli_query($conex, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas){
    header("location:home.php");

}else{
    ?>
    <a class="bad">Error en la autentificación</a>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conex);
}
?>