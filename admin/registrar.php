<?php

    session_start();

    if(!isset($_SESSION['idTipoUsuario'])){
        header('location: ../index.php');
    }else{
        if($_SESSION['idTipoUsuario'] != 2){
            header('location: ../index.php');
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
                                                <a class="dropdown-item" href="modificar.php">Editar Producto</a>
                                                <a class="dropdown-item" href="agregar.php">Agregar nuevo Producto</a>
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
                                            <a class="nav-link" href="inventario.php"><button class="btn btn-primary"
                                                    type="submit">Inventario</button></a>
                                        </li>


                                    </ul>
                                    <!--  Boton de notificacion-->
                                    <button type="button" class="btn btn-primary">
                                        Notifications <span class="badge badge-light">4</span>
                                    

                                    <form class="form-inline my-2 my-lg-0"></form>
                                </button>
                                        
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

                                                            <a class="btn btn-primary " href="modcontradm.php">Cambiar contraseña</a>

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
                <h1>Registrar Ventas</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <!--seccion Contenido-->
        <div class="row tit">






            <!-- Columna 1-->

            <div class="col-md-6" style="margin-top: 15px">
                <div class="row" style="margin-left: 25px">
                    <p>


                        <br>
                        <form class="form-inline">
                            <label class="my-1 mr-2" for="idproducto">Producto </label>
                            <select class="custom-select my-1 mr-sm-2" id="idproducto">
                                <option selected> Buscar</option>
                                <option value="1">Lápiz</option>
                                <option value="2">Lapicero</option>
                                <option value="3">Tijeras</option>
                                <option value="4">Goma</option>
                                <option value="5">Calculadora</option>
                            </select>
                    </p>
                </div>
                <div class="row" style="margin-left: 25px">


                    <p>


                        <br>
                        <form class="form-inline">
                            <label class="my-1 mr-2" for="idmarca">Marca</label>
                            <select class="custom-select my-1 mr-sm-2" id="idmarca">
                                <option selected> Buscar</option>
                                <option value="1">Dixon</option>
                                <option value="2">Pritt</option>
                                <option value="2">Baco</option>
                            </select>
                         </form>   
                    </p>


                </div>

                <div class="row" style="margin-left: 25px">

                    <p>
                        Precio individual:


                        <p>
                            <input type="text" name="fname">
                </div>

                <div class="row" style="margin-left: 25px">

                    <p>
                        Cantidad:

                        <input type="text" name="fname">
                        <p>

                </div>


                <br>


                <div class="col-md-12">


                    <p class="botons">

                        <button class="btn btn-primary" type="submit">Agregar producto a la lista de venta</button>


                    </p>


                </div>



            </div>


            <!-- Columna 2-->

            <div class="col-md-6" style="margin-top: 15px">
                <p>
                    Lista de productos a vender:
                </p>


                <div class="row tab" style="margin-top: 15px;"></div>
                <div class="overflow-auto" style="height: 200px">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Id Producto</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Marca</th>
                                <th scope="col">Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">01</th>
                                <td>Bicolor Delgado</td>
                                <td>DIXON</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <th scope="row">02</th>
                                <td>Colores 6 cortos</td>
                                <td>DIXON</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <th scope="row">02</th>
                                <td>Compas de presición</td>
                                <td>MAE</td>
                                <td>1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <div class="row" style="margin-left: 50px">
                    <p>
                        Precio Total de Venta:

                        <input class="totventa" type="text" disabled="true" name="fname" style="margin-top: 15px">
                    </p>

                </div>
            </div>


            <div class="container">




                <div class="col-md-12" style="margin-top: 15px">

                    <ul style="margin: auto">

                        <div style="text-align: center; margin-top: 30px">
                            <img class="dos" src="../imagen/signo-ad.jpg">
                        </div>

                        <div class="row" style="margin-top: 15px">
                            <p class="txt" style="margin: auto"> <b class="bb">Al pulsar el botón REALIZAR VENTA se
                                    actualizará el inventario, por favor verifique que los datos sean correctos.</b>
                            </p>
                        </div>

                        <p class="botons" style="margin-top: 15px">

                            <button class="btn btn-primary btnverde" type="submit">Realizar venta</button>

                            <button class="btn btn-primary btnrojo" type="submit">Cancelar</button>
                        </p>

                    </ul>
                </div>

                <br>

            </div>


        </div>
    </div>


    <!--Aqui acaba contenido-->
    <footer class="footer" style="margin-top:0px">

            <div class="container"  style="margin-bottom: 15px">
            <!--Inicio pie de pagina-->
            <div class="row mipie">

                <div class="col-md-12" style="margin-top: 15px">

                    <p class="txt">Dirección: Francisco Javier Mina #502 &nbsp; &nbsp; <b>&copy;Derechos Reservados
                            2019 </b>
                        &nbsp; &nbsp;
                        papeleriaelcompas@example.com</p>

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