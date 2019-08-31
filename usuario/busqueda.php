<?php
    include_once '../database.php';
    
    session_start();

    if(isset($_GET['cerrar'])){
        session_unset(); 

        // destroy the session 
        session_destroy(); 
    }
    
    if(isset($_SESSION['idTipoUsuario'])){
        switch($_SESSION['idTipoUsuario']){
            case 1:
                header('location: ../cliente/iniciocli.php');
            break;

            case 2:
                header('location: ../admin/registrar.php');
            break;

            default:
        }
    }

    if(isset($_POST['username']) && isset($_POST['contrasena'])){
        $username = $_POST['username'];
        $contrasena = $_POST['contrasena'];

        $db = new Database();
        $query = $db->connect()->prepare('SELECT *FROM usuario WHERE username = :username AND contrasena = :contrasena');
        $query->execute(['username' => $username, 'contrasena' => $contrasena]);

        $row = $query->fetch(PDO::FETCH_NUM);
        
        if($row == true){
            $idTipoUsuario = $row[4];
            
            $_SESSION['idTipoUsuario'] = $idTipoUsuario;
            switch($idTipoUsuario){
                case 1:
                    header('location: ../cliente/iniciocli.php');
                break;

                case 2:
                header('location: ../admin/registrar.php');
                break;

                default:
            }
        }else{
            // no existe el usuario
            $errorLogin = "Nombre de usuario o contraseña incorrecto";

            include_once 'productos.php';
        }
        

    }

?>


<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="../css/estilo.css">
    

    <title>Papeleria El Compás</title>
</head>

<body background="../imagen/pruebadefondo1.jpg">
    <!--Contenedor Principal-->
    <div class="container">
        <!--Seccion botones-->
        <div class="container">

            <div class="row caja" style="margin-top:20px">

                <div class="col-md-12 " style="margin-bottom: 0px" style="margin-top: 5px;">



                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="../index.php"><img src="../imagen/Logo aprovado.png" width="250px"
                                height="250px"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">

                                <li class="nav-item active">
                                    <a class="nav-link" href="../index.php"><button class="btn btn-primary"
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
                                        <a class="dropdown-item" href="recargas.php">Recargas</a>
                                        <a class="dropdown-item" href="impresion.php">Impresiones</a>
                                    </div>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="contacto.php"><button class="btn btn-primary"
                                            type="submit">Contacto</button></a>
                                </li>

                            </ul>
                            <!--Boton de notificación
                <button type="button" class="btn btn-primary">
                  Notifications <span class="badge badge-light">4</span>
                </button>
                  -->


                            <!--Creacion de crear cliente-->
              <button type="button" data-toggle="modal" data-target="#registrarModal" style="margin-left: 15px">
              <a href="registrarcli.php"><img src="../imagen/registrar.png" width="50px" height="50px"></a>


              </button>

                            <!--Creacion de inicio de Seci�n-->
                            <button type="button" data-toggle="modal" data-target="#ingresarModal"
                                style="margin-left: 15px">
                                <img src="../imagen/iniciar.png " width=50px height=50px>
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="ingresarModal" aria-labelledby="ingresarModalLabel"
                                aria-hidden="true">
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
                <div class="col-md-12" style="margin-top: 15px;">
                    <h1>Catalogo de Producto</h1>
                </div>
            </div>
            <div class="row tit">
                <div class="col-md-12 bus">
                    <p>
                        <form method="POST" action="busqueda.php" class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="text" id="buscar" name="palabra"placeholder="Articulos">
                            <input class="btn btn-outline-success my-2 my-sm-0" value="Buscar" type="submit">
                        </form>
                    </p>
                   
                
                </div>
            </div>
        </div>

        
        
        <div class="container">
            <!--Buscador-->
            <div class="row tit " >
                <div class="col-md-12" style="margin-top: 15px;">
                   
               <?php
                 include_once '../paginacion.php';

                $producto = new Producto(9);        
               ?>

                <!-- Fila  -->
               <div class="row">
                <div class="col-md-12" id="container">
                    <?php
                    echo $producto->mostrarTotalResultados() . " resultados totales <br/>";
                    ?>
                    </div> 
               </div>
               

               
               <div class="row">
                    <?php
                       $producto->mostrarBusqueda();
                    ?>
               </div>
                


             
               <div class="row">
                   <div class="col-md-12" id="paginas">
                       <?php
                          $producto->mostrarPaginas();
                       ?>
                   </div>
               </div>
                
            </div>
        </div>    
        
              


            </div>
        <!--Fin del contenido-->




        <footer class="footer" style="margin-top:0px">

            <div class="container" style="margin-bottom: 15px">
                <!--Inicio pie de pagina-->
                <div class="row mipie">

                    <div class="col-md-12" style="margin-top: 15px">

                        <p class="txt">Dirección: Francisco Javier Mina #502 &nbsp; &nbsp; <b>&copy;Derechos Reservados
                                2019 </b>
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