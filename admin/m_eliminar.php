<?php
include ("../admin/conexion.php");
$username = $_POST['username'];

$con = mysqli_connect($host,$user,$password) or die ("problemas al conectar");

mysqli_select_db ($con,$bd) or die ("problemas al conectar la base de datos");

$registro = mysqli_query ($con, "SELECT * FROM usuario WHERE USERNAME = '$username'") or die ("Problemas en consulta:". mysqli_error());

if ($reg=mysqli_fetch_array($registro))
{
    mysqli_query($con, "DELETE FROM usuario WHERE USERNAME = '$_POST[username]'");


    echo "<script> alert('El usuario se eliminó correctamente');
    location.href= '../logout.php';
    </script>";
}
else {
    echo "<script> alert('Error al eliminar el usuario');
    location.href= '#';
    </script>";
}
?>