<?php

    $servidor = "localhost";
   $nombreusuario = "root";
   $password = "";
   $db = "papeleria";
   
   $conexion = new mysqli($servidor, $nombreusuario, $password, $db);

   if($conexion->connect_error){
     die("Conexion fallida: " . $conexion->connect_error);
   }
   ?>