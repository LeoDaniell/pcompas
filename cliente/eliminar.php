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
                      <a class="nav-link" href="productos.php"><button class="btn btn-primary"
                          type="submit">Productos</button></a>
                    </li>
                    
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <button class="btn btn-primary" type="submit">Servicios Extras</button>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="recarga.php">Recargas</a>
                         <a class="dropdown-item" href="impresiones.php">Impresiones</a>
                      </div> 
                  </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="contacto.php"><button class="btn btn-primary"
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
                                                      


                                                      

                                                          <a class="btn btn-primary " href="modcontra.php">Modificar contraseña</a>
                                                      
                                                      
                                                      
                                                      
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
        <div class="row tit" style="margin-top: 15px;">
            
    
      <div class="col-md-12" style="margin-top: 15px">
    
        <div class="card"  style="width: auto; margin-bottom: 15px">
            <div class="card-header">
              Eliminar Cuenta
            </div>
            <div class="card-body">
    
    
                <div class="col-md-12" style="margin-top: 15px"></div>
                <label>Para eliminar este cliente es necesario confirmar su contraseña &nbsp; </label>
                <div class="col-md-12" style="margin-top: 7px"></div>
                <label>Usted eliminará de la base de datos el cliente con el usuario: &nbsp; </label>
                <div class="row tit" style="margin-top: 15px;"></div>
                <br>
                <form class="form-inline">
                <div class="form-group mb-2"    >
                  <label for="staticEmail2" class="sr-only" >Usuario cliente</label>
                  <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="cuentacliente@example.com">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                  <label for="inputPassword2" class="sr-only">Contraseña</label>
                  <input type="password" class="form-control" id="inputPassword2" placeholder="Contraseña">
                </div>
                <div class="col-md-12 " style="margin-top: 15px"></div>
                <button type="submit" class="btn btn-primary mb-2 btnrojo" style="margin: auto">Eliminar cuenta</button>
              </form>
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