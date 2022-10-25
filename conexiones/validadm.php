<?php
include('conexion.php');

if (isset($_POST['valid'])) {
    $correo = trim($_POST['correo']);
    $contra = trim($_POST['contra']);

    $consulta = "SELECT * FROM administrador where correo_administrador = '$correo' and contrasena_administrador = '$contra'";
    $resultado = mysqli_query($conex, $consulta);

    $filas = mysqli_num_rows($resultado);

    if ($filas) {
        header("location:home_admin.php");
    } else {
?>
        <a class="bad">Error en la autentificación</a>
<?php
    }
    mysqli_free_result($resultado);
    mysqli_close($conex);
}
?>