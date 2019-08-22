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
        
        if($row == true){
            $idTipoUsuario = $row[4];
            
            $_SESSION['idTipoUsuario'] = $idTipoUsuario;
            switch($idTipoUsuario){
                case 1:
                    header('location: cliente/iniciocli.php');
                break;

                case 2:
                header('location: admin/registrar.php');
                break;

                default:
            }
        }else{
            // no existe el usuario
             $errorLogin = "Nombre de usuario o contraseña incorrecto";

             include_once 'index.php';
        }
        

    }
   

?>

<?php
/*Requerir conexion con la BD*/
   $servidor = "localhost";
   $nombreusuario = "root";
   $password = "";
   $db = "papeleria";
   
   $conexion = new mysqli($servidor, $nombreusuario, $password, $db);

   if($conexion->connect_error){
     die("Conexion fallida: " . $conexion->connect_error);
   }

  $message = '';

  if (isset($_POST['contrasena']) && isset($_POST['correo']) && isset($_POST['nombre']) && isset($_POST['idTipoUsuario']) && isset($_POST['username'])){
    /*Vincular parametros*/
    $contrasena = $_POST ['contrasena'];
    $correo = $_POST ['correo'];
    $nombre = $_POST ['nombre'];
    $idTipoUsuario = $_POST ['idTipoUsuario'];
    $username = $_POST ['username'];
    
    /*Agregar datos a la BD*/
    $sql = "INSERT INTO usuario (contrasena, correo, nombre, idTipoUsuario, username) VALUES ('$contrasena', '$correo', '$nombre', '$idTipoUsuario', '$username')"; 
    
    /*Ejecutar consulta para evitar usuarios repetidos*/

    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuario WHERE username = '$username'");
    if (mysqli_num_rows($verificar_usuario) > 0) {
      $verificar_usuario = "El usuario ingresado ya esta registrado";

      include_once 'index.php';
    }


    


  if ($conexion->query($sql) === true){
    $message = 'Tu usuario ha sido creado exitosamente';
} else{
    die ("Lo sentimos ha ocurrido un error al intentar registrarlo: " . $conexion->error);
}
$conexion->close();

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

                
                  <!--Creacion de inicio de Secion-->
                  <button type="button" data-toggle="modal" data-target="#registrarModal" style="margin-left: 15px">
                    <img src="imagen/registrar.png"  width="50px" height="50px"> 
                    
                    
                  </button>
                  

                  <!-- Modal -->
                  <div class="modal fade" id="registrarModal" aria-labelledby="registrarModalLabel" aria-hidden="true">
                    <div class="modal-dialog" >
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="registrarModalLabel">Registrarse</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Enviar" 
                          >
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          
                     <form action="index.php" method="POST">

                     <?php  if(isset($verificar_usuario)){
                          echo $verificar_usuario;
                     }
                     ?>     

                     
                            <div class="form-group">
                            <label for="">Nombre: &nbsp; </label>
                            
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del usuario">
                          </div>
                          <br>
                          <div class="form-group">
                            <label for="">Correo Electronico: &nbsp; </label>
                            
                            <input type="email" class="form-control" name="correo" id="correo" placeholder="email@example.com">
                          </div>
                          <br>
                          <div class="form-group">
                            <label for="">Usuario: &nbsp; </label>
                          
                            <input type="text" class="form-control" name="username" id="username" placeholder="Usuario">
                          </div>
                          <br>
                          <div class="form-group">
                            <label for="">Contraseña: &nbsp; </label>
                          
                            <input type="password" class="form-control" name="contrasena" id="contrasena" placeholder="Contraseña">
                          </div>
                          <br>
                          
                          <select class="form-control" name="idTipoUsuario" id="idTipoUsuario">
                          
                          <option value="1">cliente</option>
                          
                          
                          </select>
                         
                          <br>
                          <input type="submit" class="btn btn-primary" value="Registrar">
                        
                      </form>
                         

                        </div>

                      </div>

                    </div>
                  </div>


                
               
                
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
                                            <img src="imagen/carrucel img1.jpg"  class="d-block w-100" alt=""
                                            width="300" height="300">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="imagen/Jardín_San_Felipe.jpg" class="d-block w-100"
                                                alt=""    width="300" height="300px">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="imagen/mostrario.jpg"  class="d-block w-100" alt=""
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
                                                <a class="nav-link" href="productos">
                                            <img src="imagen/nuevos_productos.jpg"  class="d-block w-100"
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
                                            <img src="imagen/cell_recargas.png" class="d-block w-100"
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
                                            <img src="imagen/imprime-aqui-banner.png" 
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