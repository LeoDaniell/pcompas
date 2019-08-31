<?php
    include_once 'database.php';
    

    session_start();

    if(isset($_GET['cerrar'])){
        session_unset(); 

        // destroy the session 
        session_destroy(); 
    }
    
    if(isset($_SESSION['idTipoUsuario'])){
        switch($_SESSION['idTipoUsuario']){
            case 1:
                header('location: cliente/iniciocli.php');
            break;

            case 2:
                header('location: admin/registrar.php');
            break;

            default:
        }
    }

    if(isset($_POST['username']) && isset($_POST['contrasena'])){
        $username = $_POST['username'];
        $contrasena = $_POST['contrasena'];

        $db = new Database();
        $query = $db->connect()->prepare('SELECT  *FROM usuario WHERE username = :username AND contrasena = :contrasena');
             $query->execute(['username' => $username, 'contrasena' => $contrasena]);


        $row = $query->fetch(PDO::FETCH_NUM);
        
        if($row == true){ //<<<<------SE MODIFICO DESDE AQUI
            $idTipoUsuario = $row[4];
            
            $_SESSION['idTipoUsuario'] = $idTipoUsuario;
            switch($idTipoUsuario){
                case 1:
                header('location: cliente/iniciocli.php');
                 $idu=$row[0];
                 $_SESSION['id']=$idu;
                            
                 break;

                case 2:
                header('location: admin/registrar.php');
                $idu=$row[0];
                $_SESSION['id']=$idu;
                $nombre=$row[3];
                $_SESSION['nombre']=$nombre;
               
               
                break;//<<<<-----HASTA AQUI "no fueron muchos cambios y no afectan el demas funcionamiento"

                default:
            }
        }else{
            // no existe el usuario
             $errorLogin = "Nombre de usuario o contraseña incorrecto";

             include_once 'index.php';
        }
        

    }
   

?>

<!doctype html>
<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/estilo.css">

  <title>Papeleria El Compás</title>
</head>

<body background="imagen/pruebadefondo1.jpg">
  <!--Contenedor Principal-->
  <div class="container">
    <!--Seccion botones-->
    <div class="container">

      <div class="row caja" style="margin-top:20px">
                  
        <div class="col-md-12 " style="margin-bottom: 0px" style="margin-top: 5px;">


          
            <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href="index.php"><img src="imagen/Logo aprovado.png"  width="250px"
height="250px"  > </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                  <li class="nav-item active">
                    <a class="nav-link" href="index.php"><button class="btn btn-primary"
                        type="submit">Inicio</button></a>
                  </li>
                  
                  <li class="nav-item active">
                    <a class="nav-link" href="usuario/productos.php"><button class="btn btn-primary"
                        type="submit">Productos</button></a>
                  </li>
                  
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <button class="btn btn-primary" type="submit">Servicios Extras</button>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="usuario/recargas.php">Recargas</a>
                       <a class="dropdown-item" href="usuario/impresion.php">Impresiones</a>
                    </div> 
                </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="usuario/contacto.php"><button class="btn btn-primary"
                        type="submit">Contacto</button></a>
                  </li>

                </ul>
                <!--Boton de notificacion
                <button type="button" class="btn btn-primary">
                  Notifications <span class="badge badge-light">4</span>
                </button>
                  -->

                
                  <!--Creacion de registro de clientes-->
                  <button type="button" data-toggle="modal" data-target="#registrarModal" style="margin-left: 15px">
                  <a href="usuario/registrarcli.php"><img src="imagen/registrar.png"  width="50px" height="50px"></a>
                    
                    
                  </button>
                
                  <!--Creacion de inicio de Seci�n-->
                  <button type="button" data-toggle="modal" data-target="#ingresarModal" style="margin-left: 15px">
                    <img src="imagen/iniciar.png " width=50px height=50px>
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="ingresarModal" aria-labelledby="ingresarModalLabel" aria-hidden="true">
                    <div class="modal-dialog" > 
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="ingresarModalLabel">Inicio de Sesión</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close" 
                           >
                         
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          

                          <form action="#" method="POST">  
                             
                               <?php
                                 
                                if(isset($errorLogin)){
                                  echo $errorLogin;
                                  
                                  
                                }

                               ?>

                               <br>
                               <br>
                                
                                Usuario: <br/><input type="text" class="form-control" name="username" placeholder="Ingresar Usuario"><br/>

                              
                             
                                
                                Contrasena: <br/><input type="password" class="form-control" name="contrasena" placeholder="Ingresar Contraseña"><br/>
                              
                              
                              <input type="submit" class="btn btn-primary" value="Iniciar Sesión">
                           
                         </form>

                        </div>

                      </div>

                    </div>
                  </div>


               
                
                
              </div>

            </nav>



       

        </div>

      </div>
    </div>

  <!--Inicio del contenido-->
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
                                            <img src="imagen/imagen1.png"  class="d-block w-100" alt=""
                                            width="300" height="300">
                                        </div>
                                       <!-- <div class="carousel-item">
                                            <img src="imagen/imagen2.png" class="d-block w-100"
                                                alt=""    width="300" height="300px">
                                        </div>
                                        -->
                                        <div class="carousel-item">
                                            <img src="imagen/imagen3.png"  class="d-block w-100" alt=""
                                            width="300" height="300">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="imagen/imagen4.png"  class="d-block w-100" alt=""
                                            width="300" height="300">
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
                                                <a class="nav-link" href="usuario/productos.php">
                                            <img src="imagen/productos.png"  class="d-block w-100"
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
                                                <a class="nav-link" href="usuario/recargas.php">
                                            <img src="imagen/recargas.png" class="d-block w-100"
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
                                                <a class="nav-link" href="usuario/impresion.php">
                                            <img src="imagen/imprimir.png" 
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
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>

</html>