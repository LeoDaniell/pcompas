<?php

   
    require '../admin/conexion.php';
    


    

    $numeroCopias = $_POST['numCopias'];
    $tipoImpresion = $_POST['tipImpresion'];
    $tamanoHoja = $_POST['tamHoja'];
    $tipoHoja = $_POST['tipPapel'];
    $modoImpresion = $_POST['modImpresion'];
    $entrega = $_POST['fechaEntrega'];
    $idUsuario = $_POST['idUsuario'];
    

    $documento = $_FILES['pdfImpresion']['name'];//obtiene el nombre
    $archivo = $_FILES['pdfImpresion']['tmp_name'];//contiene el archivo
    $ruta="../documentosImpresiones";


    $ruta=$ruta."/".$documento;

    move_uploaded_file($archivo, $ruta);
    
    
    
    $insert = "INSERT into impresion values ('', '$numeroCopias', '$tipoImpresion', '$tamanoHoja', '$tipoHoja', '$modoImpresion', '$ruta', '$entrega', '$idUsuario')";
    $inMarca = mysqli_query($conectar, $insert);

    if($inMarca) {

    echo "<script> alert('La impresión a sido solicitada correctamente');
    location.href= 'impresiones.php?id=".$_GET['id']."'
    </script>";
    
   
   }else{
   
    echo "<script> alert('Hubo un error al solicitar la impresión');
    location.href= 'impresiones.php?id=".$_GET['id']."'
    </script>";


   }
    


?>