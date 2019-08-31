<?php

   
    require '../admin/conexion.php';
    


    

    
    $compania = $_POST['compania'];
    $tipo = $_POST['tipo'];
    $monto= $_POST['monto'];
    $telUno= $_POST['num1'];
    $telDos= $_POST['num2'];
    $idUsuario = $_POST['idUsuario'];
    

   
    

    if($telUno == $telDos){
        $telefono=$_POST['num2'];


        $insert = "INSERT into recarga values ('', '$telefono', '$compania', '$tipo', '$monto',  '$idUsuario')";
        $inMarca = mysqli_query($conectar, $insert);
    
        if($inMarca) {
    
        echo "<script> alert('La recarga a sido solicitada correctamente');
        location.href= 'recarga.php?id=".$_GET['id']."'
        </script>";
        
       
       }else{
       
        echo "<script> alert('Hubo un error al solicitar la recarga');
        location.href= 'recarga.php?id=".$_GET['id']."'
        </script>";
    
    
       }
    }
    else{
     echo "<script> alert('El numero no coinciden, Por favor verificarlo');
     location.href= 'recarga.php?id=".$_GET['id']."';
     </script>";
    }
    
  
    


?>