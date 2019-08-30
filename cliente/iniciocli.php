<?php
 
 require '../admin/conexion.php';

    session_start();
  
    $idUsuario=$_SESSION['id'];//<<<<-----se modifico desde el index y tambien esta primera parte 
    $datos = "SELECT * from usuario where idUsuario ='$idUsuario'";
    $consultadata = mysqli_query($conectar,$datos);

    $array=mysqli_fetch_array($consultadata);
     if($array == true){
            $idTipoUsuario = $array[4];

    

    if(!$idTipoUsuario){
        header('location: ../index.php');
    }else{
        if($idTipoUsuario != 1){
            header('location: ../index.php');
        }
    }//<<<<-----hasta aqui y parte de abajo tambien esta comentada en la parte para modificar contrase;a
}

?>


<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/estilo.css">

</head>

<body background="../imagen/pruebadefondo1.jpg">
  <!--Contenedor Principal-->
  <div class="container">

    <!--Inician botones-->
    <div class="container">

        <div class="row caja" style="margin-top:20px">
  
          <div class="col-md-12 " style="margin-bottom: 0px" style="margin-top: 5px;">
  
  
            <p class="boton">
              <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="iniciocli.php"><img src="../imagen/Logo aprovado.png" width="250px"
                    height="250px"  > </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
  
                    <li class="nav-item active">
                      <a class="nav-link" href="iniciocli.php"><button class="btn btn-primary"
                          type="submit">Inicio</button></a>
                    </li>
                    
                    <li class="nav-item active">
                    <?php  echo "<a class='nav-link' href='productos.php?id=".$idUsuario."'>";//<<<<-----se modifico esta parte para mandar el id a inventario  ?><button class="btn btn-primary"
                                                    type="submit">Productos</button></a>
                    </li>
                    
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <button class="btn btn-primary" type="submit">Servicios Extras</button>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <?php  echo "<a class='dropdown-item' href='recarga.php?id=".$idUsuario."'>";//<<<<-----se modifico esta parte para mandar el id a inventario  ?> Recargas</a>
                      <?php  echo "<a class='dropdown-item' href='impresiones.php?id=".$idUsuario."'>";//<<<<-----se modifico esta parte para mandar el id a inventario  ?> Impresiones</a>
                                                
                      </div> 
                  </li>
                    <li class="nav-item active">
                    <?php  echo "<a class='nav-link' href='contacto.php?id=".$idUsuario."'>";//<<<<-----se modifico esta parte para mandar el id a inventario  ?><button class="btn btn-primary"
                                                    type="submit">Contacto</button></a>
                    </li>
  
                  </ul>
                  <!--  Boton de notificaci�n-->
                  <button type="button" class="btn btn-primary">
                    Notifications <span class="badge badge-light">4</span>
                  </button>
                    
  
                 
                  <form class="form-inline my-2 my-lg-0">
                    <!--Creacion de inicio de Seci�n-->
                    <button type="button" data-toggle="modal" data-target="#cuentaModal" style="margin-left: 15px">
                      <img src="../imagen/iniciar.png" width="50px" height="50px">
                    </button>
  
                    <!-- Modal -->
                    <div class="modal fade" id="cuentaModal" aria-labelledby="cuentaModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="cuentaModalLabel">Configuración</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            
  
                              
                          <form >
                                                          <div class="form-group" style="margin-top: 15px">
                                                          <h3>Cambiar contraseña<br> </h3>
                                                          
                                                          
                                                          
                                                             
                                                            
                                                          </div>
                                                      


                                                      

                                                          <?php  echo "<a class='btn btn-primary' href='modcontra.php?id=".$idUsuario."'>Cambiar contraseña</a></td>";//<<<<-----se modifico esta parte para mandar el id a modif contrase;a  ?>
                                                      
                                                      
                                                      
                                                      <div class="form-group" style="margin-top: 15px">
                                                      
                                                      <h3>Eliminar cuenta<br> </h3>
                                                      </div>
                                                          
                                                     




                                                      
                                                      <a class="btn btn-primary btnrojo" href="eliminar.php">Eliminar cuenta</a>
                                                      





                                                          <div class="form-group" style="margin-top: 15px">
                                                          <h3>Cerrar sesión<br> </h3>
                                                          </div>
                                                          <div class="form-group">
                                                          
                                                          
                                                              <label> <p class="bb">¿Realmente desea cerrar sesión?</p>   &nbsp; </label>
                                                            
                                                          </div>
                                                      
  
  
                                                      <a class="btn btn-primary btnrojo" href="../logout.php">Cerrar sesión</a>
  
                                                      </form>
  
                          </div>
  
                        </div>
  
                      </div>
                    </div>
  
  
                  </form>
                  
                  
                </div>
  
              </nav>
  
  
  
            </p>
  
          </div>
  
        </div>
      </div>

  <!--inicia Contenido-->
  <div class="container">
        <!--Buscador-->
        <div class="row tit" style="margin-top: 15px;">
            <div class="col-md-12" style="margin-bottom: 15px;">
                <div class="card cards" style="margin-top: 15px" style="margin-bottom: 15px;">

                    <div class="card-body">
                        <div class="container">
                            <!--seccion Contenido-->
                            <div class="row ">

                                <!-- Columna 1-->
                                <div class="col-md-12" style="margin-top: 15px">




                                    <div id="carouselExampleFade" class="carousel slide carousel-fade"
                                        data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="../imagen/carrucel img1.jpg" class="d-block w-100" alt=""
                                                    height="300">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="../imagen/Jardín_San_Felipe.jpg" class="d-block w-100"
                                                    alt="" height="300">
                                            </div>
                                            <div class="carousel-item">
                                                <img src="../imagen/mostrario.jpg"  class="d-block w-100" alt=""
                                                    height="300">
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carouselExampleFade" role="button"
                                            data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carouselExampleFade" role="button"
                                            data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>


                                </div>


















                                <!-- Columna 1-->
                                <div class="col-md-4" style="margin-top: 15px">
                                    <div class="row">
                                        <p>

                                            <div class="dropdown">
                                                    <a class="nav-link" href="productos">
                                                <img src="../imagen/nuevos_productos.jpg" class="d-block w-100"
                                                    alt="" height="300">
                                                    </a>
                                            </div>

                                        </p>

                                    </div>
                                </div>

                                <!-- Columna 2-->

                                <div class="col-md-4" style="margin-top: 15px">
                                    <div class="row">
                                        <p>

                                            <div class="dropdown">
                                                    <a class="nav-link" href="recargas">
                                                <img src="../imagen/cell_recargas.png" class="d-block w-100"
                                                    height="300" high="100"> 
                                                </a>
                                            </div>

                                        </p>

                                    </div>
                                </div>
                                <!-- Columna 3-->

                                <div class="col-md-4" style="margin-top: 15px">
                                    <div class="row">
                                        <p>

                                            <div class="dropdown">
                                                    <a class="nav-link" href="impresion">
                                                <img src="../imagen/imprime-aqui-banner.png" 
                                                    class="d-block w-100" alt="" height="300">
                                                    </a> 
                                            </div>

                                        </p>

                                    </div>
                                </div>

                                <!--Fin del contenido-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<footer class="footer" style="margin-top:0px">

  <div class="container"  style="margin-bottom: 15px">
    <!--Inicio pie de pagina-->
    <div class="row mipie" >

      <div class="col-md-12" style="margin-top: 15px">

        <p class="txt">Dirección: Francisco Javier Mina #502 &nbsp; &nbsp; <b>&copy;Derechos Reservados 2019 </b>
          &nbsp; &nbsp;
          compas.paleria.5@gmail.com</p>

      </div>




    </div>

  </div>


</footer>

  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>

</html>