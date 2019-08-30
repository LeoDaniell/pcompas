<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/estilo.css">

  <title>Papeleria El Compás</title>
</head>

<body background="../imagen/pruebadefondo1.jpg">
  <!--Contenedor Principal-->
  <div class="container">
      <!--Contenedor Botones-->
      <div class="container">

              <div class="row caja" style="margin-top:20px">

                      <div class="col-md-12 " style="margin-bottom: 0px" style="margin-top: 5px;">
              
                              <nav class="navbar navbar-expand-lg navbar-light">
                                      <a class="navbar-brand" href="registrar.php"><img src="../imagen/Logo aprovado.png"  width="250px"
                                          height="250px"  > </a>
                                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                      </button>
                              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                      <ul class="navbar-nav mr-auto">
                                        
                                        <li class="nav-item active">
                                            <a class="nav-link" href="registrar.php"><button class="btn btn-primary"
                                                    type="submit">Ventas</button></a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <button class="btn btn-primary" type="submit">Gestion Productos</button>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <?php  echo "<a class='nav-link' href='modificar.php?id=".$_GET['id']."'>";//<<<<-----se modifico esta parte para mandar el id a inventario  ?>Editar producto</a>
                                            <?php  echo "<a class='nav-link' href='agregar.php?id=".$_GET['id']."'>";//<<<<-----se modifico esta parte para mandar el id a inventario  ?>Agregar producto</a>
                                 
                                            </div>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                <button class="btn btn-primary" type="submit">Servicios</button>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="https://hit.mx/" target="_blank">Hit</a>
                                                <a class="dropdown-item"
                                                    href="https://accounts.google.com/ServiceLogin/identifier?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"
                                                    target="_blank">Correo</a>
                                                <a class="dropdown-item"
                                                    href="https://www.paypal.com/mx/webapps/mpp/home"
                                                    target="_blank">PayPal</a>

                                        </li>
                                        <li class="nav-item active">
                                        <?php  echo "<a class='nav-link' href='inventario.php?id=".$_GET['id']."'>";//<<<<-----se modifico esta parte para mandar el id a inventario  ?><button class="btn btn-primary"
                                                    type="submit">Inventario</button></a>
                                             </li>


                                    </ul>
                                    <!--  Boton de notificacion-->
                                    <button type="button" class="btn btn-primary">
                                        Notifications <span class="badge badge-light">4</span>
                                    </button>

                                    <form class="form-inline my-2 my-lg-0">
                                        <!--Creacion de inicio de Secion-->
                                        <button type="button" data-toggle="modal" data-target="#exampleModal"
                                            style="margin-left: 15px">
                                            <img src="../imagen/iniciar.png" width="50px" height="50px" />
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Configuración
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">


                                                        <form>
                                                                <div class="form-group" style="margin-top: 15px">
                                                                    <h3>Agregar administrador<br> </h3>





                                                                </div>
                                                            </form>

                                                            <a class="btn btn-primary " href="registraradmin.php">Agregar Administrador</a>

                                                            

                                                            <form>
                                                                <div class="form-group" style="margin-top: 15px">
                                                                    <h3>Cambiar contraseña<br> </h3>





                                                                </div>
                                                            </form>

                                                            <?php  echo "<a class='btn btn-primary' href='modcontradm.php?id=".$_GET['id']."'>Cambiar contraseña</a></td>";//<<<<-----se modifico esta parte para mandar el id a modif contrase;a  ?> 

                                                            <div class="form-group" style="margin-top: 15px">

                                                                <h3>Eliminar cuenta<br> </h3>
                                                            </div>

                                        </form>

                                        <a class="btn btn-primary btnrojo" href="eliminaradm.php">Eliminar Cuenta</a>

                                        <div class="form-group" style="margin-top: 15px">
                                            <h3>Cerrar sesión<br> </h3>
                                        </div>
                                        <div class="form-group">


                                            <label>
                                                <p class="bb">¿Realmente desea cerrar sesión?</p> &nbsp;
                                            </label>

                                        </div>
                                        </form>


                                        <a class="btn btn-primary btnrojo" href="../logout.php">Cerrar sesión</a>



                                    </div>

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
    <div class="container">
    <!--Buscador-->
    <div class="row tit" style="margin-top: 15px;">
      <div class="col-md-12" style="margin-top: 15px;">
        <h1>Existencias</h1>
      </div>
    </div>
    <!--seccion Contenido-->

    <div class="row tit">


      <!-- Columna 1-->

      <ul>
        <li class="compl">Existencias Completas</li>
        <li class="compl1">Existencias Satisfactorias</li>
        <li class="compl2">Pocas Existencias</li>

      </ul>

    </div>



    <div class="row tit">
      <div class="col-md-12" style="margin-top: 15px;">

        <div class="overflow-auto" style="height: 500px;">

          <table class="table table-bordered">
            <thead>
              <tr class="compl3">
                <th scope="col">Id</th>
                <th scope="col">Producto</th>
                <th scope="col">Marca</th>
                <th scope="col">Numero de cajas</th>
                <th scope="col">Numero de piezas</th>
              </tr>
            </thead>
            <tbody>
               <?php
       require "conexion.php";
     
        $sentecia="SELECT idProducto, nombreProducto, marca, cajas, pzsCajas FROM producto";
        
          $resultado= $conectar->query($sentecia) or die (mysqli_error($conectar));
        $consultapr = mysqli_query($conectar,$sentecia);
        $array1=mysqli_fetch_array($consultapr);
        
        
        while($fila=$resultado->fetch_assoc())
        {
          $comp = (int) $fila['pzsCajas'] * $fila['cajas'];
       if ($comp <= 15) {
        echo "<tr bgcolor=#e87878 >";
             echo "<td>"; echo $fila['idProducto']; echo "</td>";
            echo "<td>"; echo $fila['nombreProducto']; echo "</td>";
            echo "<td>"; echo $fila['marca']; echo "</td>";
            echo "<td>"; echo $fila['cajas']; echo "</td>";
            echo "<td>"; echo $fila['pzsCajas']; echo "</td>";
            echo "</tr>";
       }elseif ($comp <= 30) {
         echo "<tr bgcolor=#f0b587 >";
             echo "<td>"; echo $fila['idProducto']; echo "</td>";
            echo "<td>"; echo $fila['nombreProducto']; echo "</td>";
            echo "<td>"; echo $fila['marca']; echo "</td>";
            echo "<td>"; echo $fila['cajas']; echo "</td>";
            echo "<td>"; echo $fila['pzsCajas']; echo "</td>";
            echo "</tr>";
       }elseif ($comp > 30) {
         echo "<tr bgcolor=#7de878 >";
             echo "<td>"; echo $fila['idProducto']; echo "</td>";
            echo "<td>"; echo $fila['nombreProducto']; echo "</td>";
            echo "<td>"; echo $fila['marca']; echo "</td>";
            echo "<td>"; echo $fila['cajas']; echo "</td>";
            echo "<td>"; echo $fila['pzsCajas']; echo "</td>";
            echo "</tr>";
       }
          
        
            
        }
      ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!--Fin del contenido-->
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