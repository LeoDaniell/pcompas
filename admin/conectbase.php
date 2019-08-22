<?php

$mysqli = new mysqli("localhost", "root", "", "papeleria");

if($mysqli->connect_errno){

    echo "Fallo la conexion a la base de datos";
}

return $mysqli

?>