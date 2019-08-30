<?php

    require 'conexion.php';


    $nombreProducto = $_POST['txtNombreProducto'];
    $marca = $_POST['txtMarca'];
    $precio = $_POST['txtPrecio'];
    $cajas = $_POST['txtCajas'];
    $pzsCaja = $_POST['txtPzsCaja'];
    $descripcion = $_POST['txtDescripcion'];

    $imagen = $_FILES['foto']['name'];//obtiene el nombre
    $archivo= $_FILES['foto']['tmp_name'];//contiene el archivo
    $ruta="../imagenprodu";


    $ruta=$ruta."/".$imagen;

    move_uploaded_file($archivo, $ruta);



    $insertar = "INSERT into producto values('', '$nombreProducto', '$marca', '$precio', '$cajas', '$pzsCaja', '$descripcion', '$ruta')";
    $query = mysqli_query($conectar, $insertar);

   if($query) {

    echo "<script> alert('Datos insertados correctamente');
    location.href= 'registrar.php';
    </script>";
    

   }else{
    echo "<script> alert('Hubo un error al insertar los datos');
    
    </script>";


   }
    


?>