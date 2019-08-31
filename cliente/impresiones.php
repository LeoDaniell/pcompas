<?php
session_start();
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
                    <?php  echo "<a class='nav-link' href='productos.php?id=".$_GET['id']."'>";//<<<<-----se modifico esta parte para mandar el id a inventario  ?><button class="btn btn-primary"
                                                    type="submit">Productos</button></a>
                     </li>
                    
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <button class="btn btn-primary" type="submit">Servicios Extras</button>
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <?php  echo "<a class='dropdown-item' href='recarga.php?id=".$_GET['id']."'>";//<<<<-----se modifico esta parte para mandar el id a inventario  ?> Recargas</a>
                      <?php  echo "<a class='dropdown-item' href='impresiones.php?id=".$_GET['id']."'>";//<<<<-----se modifico esta parte para mandar el id a inventario  ?> Impresiones</a>
                       </div> 
                  </li>
                    <li class="nav-item active">
                    <?php  echo "<a class='nav-link' href='contacto.php?id=".$_GET['id']."'>";//<<<<-----se modifico esta parte para mandar el id a inventario  ?><button class="btn btn-primary"
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
                                                      


                                                      
                                                          <?php  echo "<a class='btn btn-primary' href='modcontra.php?id=".$_GET['id']."'>Cambiar contraseña</a></td>";//<<<<-----se modifico esta parte para mandar el id a modif contrase;a  ?>
                                                      
                                                      
                                                      
                                                      <div class="form-group" style="margin-top: 15px">
                                                      
                                                      <h3>Eliminar cuenta<br> </h3>
                                                      </div>
                                                          
                                                     




                                                      
                                                      <?php  echo "<a class='btn btn-primary btnrojo' href='eliminar.php?id=".$_GET['id']."'>Eliminar cuenta</a></td>";//<<<<-----se modifico esta parte para mandar el id a modif contrase;a  ?>
                                                      




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
                    <div class="card-header" style="margin-bottom: 15px">
                        <ul class="nav nav-tabs card-header-tabs" style="margin-top: 15px">
                            <li class="nav-item">
                                <?php  echo "<a class='nav-link ' href='recarga.php?id=".$_GET['id']."'>";//<<<<-----se modifico esta parte para mandar el id a inventario  ?>Recargas</a>
                            </li>
                            <li class="nav-item">
                            <?php  echo "<a class='nav-link active' href='impresiones.php?id=".$_GET['id']."'>";//<<<<-----se modifico esta parte para mandar el id a inventario  ?>Impresiones</a>
                            </li>

                        </ul>
                    </div>


                    <div class="card-body">
                        <div class="container">


                            <!--seccion Contenido-->


                           
                                                      

                            <form method="POST" name="form-work"  action=<?php echo"guardarImpresion.php?id=".$_GET['id']."";?> enctype="multipart/form-data">
                            <div class="row ">

                                <!-- Columna 1-->
                                <div class="col-md-6" style="margin-top: 15px">

                                    <h3>Expecificaciones de Impresion</h3>
                                    <br>
                                    <div class="row">
                                        <p>
                                            Numero de Copias: &nbsp;
                                            <br>
                                            <input type="text" name="numCopias" required>
                                        </p>
                                    </div>


                                    <br>

                                    <div class="row" style="margin-right: 25px">

                                        <br>
                                        
                                            <label >Tipo de impresión:</label>
                                            &nbsp;
                                            <select class="custom-select my-1 mr-sm-2" name = "tipImpresion" required>
                                                <option selected>Seleccionar...</option>
                                                <option value="Blanco/Negro">Blanco/Negro</option>
                                                <option value="Color">Color</option>
                                            </select>
                                        


                                    </div>

                                    <br>
                                    <div class="row">

                                        <br>
                                       
                                            <label >Tamaño de hoja:</label>
                                            &nbsp;
                                            <select name = "tamHoja" class="custom-select my-1 mr-sm-2" required>
                                                <option selected>Seleccionar...</option>
                                                <option value="Carta">Carta</option>
                                                <option value="Oficio">Oficio</option>
                                                
                                            </select>
                                        


                                    </div>







                                </div>


                                <!-- Columna 2-->

                                <div class="col-md-6" style="margin-top: 15px">


                                    <br>
                                    <div class="row">

                                        <br>
                                        
                                            <label >Tipo de papel:</label>
                                            &nbsp;
                                            <select name="tipPapel" class="custom-select my-1 mr-sm-2" required>
                                                <option selected>Seleccionar...</option>
                                                <option value="Bond">Bond</option>
                                                <option value="Opalina">Opalina</option>
                                            </select>
                                      


                                    </div>
                                    <br>

                                    <div class="row">

                                        <br>
                                       
                                            <label>Modo de impresión:</label>
                                            &nbsp;
                                             <select name="modImpresion"  class="custom-select my-1 mr-sm-2" required>
                                                <option selected>Seleccionar...</option>
                                                <option value="Una cara">Una Cara</option>
                                                <option value="Doble Cara">Doble Cara</option>
                                            </select>
                                       


                                    </div>
                                    <br>

                                    <div class="row">

                                        
                                            <div class="form-group">
                                                <label>Adjuntar Archivo: <br> <b> NOTA: Solo se
                                                        pueden adjuntar archivos .pdf </b>
                                                </label>
                                                
                                                <input type="file" name="pdfImpresion" required>
                                            </div>
                                        
                                    </div>

                                    <br>




                                    <div class="row">
                                        <br>
                                        <p>
                                            Fecha de entrega: &nbsp;
                                            <input type="text" name="fechaEntrega" required placeholder="  dia/mes/año hora">
                                        </p>
                                    </div>
                                    <br>

                                </div>
                                <div class="container">
                                    <div>
                                        <img class="dos" src= "../imagen/signo-ad.jpg">
                                    </div>

                                    <div class="row">
                                        <p class="txt" style="margin: auto"> <b class="bb">Al pulsar el botón los
                                                datos se guardarán, por favor verifique que los datos sean
                                                correctos</b>
                                        </p>
                                    </div>
                                    <br>
                                     
                                    <select  class="form-control" name="idUsuario" hidden >
                                    
                                    <option value="<?php echo $_SESSION['id']?>"><?php echo $_SESSION['id']?></option>
                      
                      
                                    </select>
                     
                                    <br>
                                    <div class="row" >
                                        
                                        <ul style="margin: auto">
                                            <input type="submit" value="Solicitar impresión" class="btn btn-Danger ">
                                        </ul>
                                    </div>
                                    
                                </div>


                                </form>
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