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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
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


                            <!--Creacion de inicio de Seción-->
                            <button type="button" data-toggle="modal" data-target="#registrarModal"
                                style="margin-left: 15px">
                                <img src="../imagen/registrar.png" width="50px" height="50px">


                            </button>


                            <!-- Modal -->
                            <div class="modal fade" id="registrarModal" aria-labelledby="registrarModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="registrarModalLabel">Registrarse</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Enviar">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <form id="formRegistrar">

                                                <div class="form-group">
                                                    <label for="">Nombre: &nbsp; </label>

                                                    <input type="text" class="form-control" id="nombre"
                                                        placeholder="Nombre del usuario">
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label for="">Correo Electronico: &nbsp; </label>

                                                    <input type="email" class="form-control" id="correo"
                                                        placeholder="email@example.com">
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label for="">Usuario: &nbsp; </label>

                                                    <input type="text" class="form-control" id="username"
                                                        placeholder="Usuario">
                                                </div>
                                                <br>
                                                <div class="form-group">
                                                    <label for="">Contraseña: &nbsp; </label>

                                                    <input type="password" class="form-control" id="contrasena"
                                                        placeholder="Contraseña">
                                                </div>
                                                <br>
                                                
                                                <label for="">Tipo de usuario: &nbsp; </label>
                                                    <br>
                                                <select class="form-control" id="idTipoUsuario">
                                                    
                                                    <option value="1">Cliente</option>


                                                </select>

                                                <br>
                                                <button type="Enviar" class="btn btn-primary"
                                                    id="registrarButton">Registrarse</button>

                                            </form>


                                        </div>

                                    </div>

                                </div>
                            </div>





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
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="Search" placeholder="Articulos"
                                aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                        </form>
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <!--seccion Contenido-->
            <div class="row tit">

                <!-- Columna 1-->

                <div class="col-md-4" style="margin-top: 15px">
                    <p>
                        <div class="card" style="width: auto">
                            <a href="../html/pru3.html"><img src="../imagen/Cartulina Iris.jpg" width="300" height="300"
                                class="card-img-top"></a>
                            <div class="card-body">
                                <h5 class="card-title">Cartulinas</h5>
                                <p class="card-text">Cartulina de color, ligeramente satinada y coloreada en pasta con
                                    pigmentos sólidos
                                    a la luz. Aplicación: dibujo y manualidades. Papel de 185 g. Dimensiones:
                                    210x297mm..</p>
                            </div>
                        </div>
                    </p>
                </div>

                <!-- Columna 2-->

                <div class="col-md-4" style="margin-top: 15px">
                    <p>
                        <div class="card" style="width: auto">
                            <a href="../html/pru8.html"><img src="../imagen/Compas de precision brazo largo MAE.jpg"
                                width="300"
                                height="300" class="card-img-top"></a>
                            <div class="card-body">
                                <h5 class="card-title">Compás de precision</h5>
                                <p class="card-text">Modelo CPP-2. Sistema de apertura del compás Bisagra. Tipo de punta
                                    Dibujo.
                                    Material Plástico. Largo 15 cm. Tipo de instrumento de dibujo Mina
                                </p>
                            </div>
                        </div>
                    </p>
                </div>

                <!-- Columna 3-->

                <div class="col-md-4" style="margin-top: 15px">
                    <p>
                        <div class="card" style="width: auto">
                            <a href="../html/pru1.html"><img src="../imagen/calculadora  printaform 1595.jpg" width="300"
                                height="300"
                                class="card-img-top"></a>
                            <div class="card-body">
                                <h5 class="card-title">Calculadora</h5>
                                <p class="card-text">56 funciones científicas. 8+2 dígitos.Alimentación: 1
                                    batería.Corrección de entrada
                                    y corrección de dígito. Cálculos aritméticos y operaciones con fracciones. Memoria
                                    independiente.
                                    Apagado automático

                                </p>
                            </div>
                        </div>
                    </p>
                </div>


            </div>


            <!--seccion Contenido-->
            <div class="row tit">

                <!-- Columna 1-->

                <div class="col-md-4" style="margin-top: 15px">
                    <p>
                        <div class="card" style="width: auto">
                            <a href="../html/pru2.html"><img src="../imagen/calculadora basica PRINTAFORM 1528.jpg" 
                                width="300"
                                height="300" class="card-img-top"></a>
                            <div class="card-body">
                                <h5 class="card-title">Calculadora basica</h5>
                                <p class="card-text"> Calculadora de bolsillo. 8 Digitos. 3 Teclas de memoria. Bateria
                                    AA" de 1.5v.
                                    Medidad: 6.3 X 11.4 X 2.3.</p>
                            </div>
                        </div>
                    </p>
                </div>

                <!-- Columna 2-->

                <div class="col-md-4" style="margin-top: 15px">
                    <p>
                        <div class="card" style="width: auto">
                            <a href="../html/pru4.html"><img src="../imagen/cartulina bristol blanca.jpg"  width="300"
                                height="300"
                                class="card-img-top"></a>
                            <div class="card-body">
                                <h5 class="card-title">Cartulina Blanca</h5>
                                <p class="card-text">Pliego cartulina bristol blanca cartulina bristol 160 gr tamaño
                                    pliego 70 x 100 cm
                                    cartulina multiproposito. Ideal para trabajos escolares. Compatible con impresion
                                    inkjet y laser de
                                    carro grande</p>
                            </div>
                        </div>
                    </p>
                </div>

                <!-- Columna 3-->

                <div class="col-md-4" style="margin-top: 15px">
                    <p>
                        <div class="card" style="width: auto">
                            <a href="../html/pru5.html"><img src="../imagen/cartulina bristol color.jpg" width="300"
                                height="300"
                                class="card-img-top"></a>
                            <div class="card-body">
                                <h5 class="card-title">Cartulina Color</h5>
                                <p class="card-text">Es una hoja que pesa como una cartulina de capa simple, con el
                                    gramaje y el calibre
                                    (grosor) de una Bristol de dos capas. Pesa 100 lb (270 g/m2).</p>
                            </div>
                        </div>
                    </p>
                </div>


            </div>


            <!--seccion Contenido-->
            <div class="row tit">

                <!-- Columna 1-->

                <div class="col-md-4" style="margin-top: 15px">
                    <p>
                        <div class="card" style="width: auto">
                            <a href="../html/pru7.html"><img src="../imagen/colores 12 BLANCA NIEVES.jpg"  width="300"
                                height="300"
                                class="card-img-top"></a>
                            <div class="card-body">
                                <h5 class="card-title">Colores 12 Largos</h5>
                                <p class="card-text">Lápices de colores blanca nieves largos. Estuche con 12 piezas</p>
                            </div>
                        </div>
                    </p>
                </div>

                <!-- Columna 2-->

                <div class="col-md-4" style="margin-top: 15px">
                    <p>
                        <div class="card" style="width: auto">
                            <a href="../html/pru6.html"><img src="../imagen/colores 12 BLANCA NIEVES largos.jpg"
                                width="300" height="300"
                                class="card-img-top"></a>
                            <div class="card-body">
                                <h5 class="card-title">Colores 12 Cortos</h5>
                                <p class="card-text">Lápices de colores blanca nieves cortos. Estuche con 12 piezas.</p>
                            </div>
                        </div>
                    </p>
                </div>

                <!-- Columna 3-->

                <div class="col-md-4" style="margin-top: 15px">
                    <p>
                        <div class="card cjar" style="width: auto">
                            <a href="../html/pru9.html"></a><img src="../imagen/crayola 24 regular.jpeg"  width="300"
                                height="300"
                                class="card-img-top"></a>
                            <div class="card-body">
                                <h5 class="card-title">Crayola 24</h5>
                                <p class="card-text">Cada crayón está hecho con cera, un material firme, seguro y no
                                    tóxico.
                                    La caja contiene 24 flamantes colores.</p>
                            </div>
                        </div>
                    </p>
                </div>


            </div>
            <div class="row tit">

                <!-- Columna 1-->

                <div class="col-md-12" style="margin-top: 15px">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
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