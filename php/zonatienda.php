<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="plantillaadmin/dist/css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <script>
    $(function(){
        $('#desplegar1').click(function(){
          $('#creausuarios').show();
        });
        $('#cerrarcreausuarios').click(function(){
          $('#creausuarios').hide();
            }); 
        $('#desplegar2').click(function(){
          $('#listarusuarios').show();
        });
        $('#desplegar3').click(function(){
          $('#eliminarusuarios').show();
        });
        $('#desplegar4').click(function(){
          $('#modificarjuegos').show();
        });
        $('#desplegar5').click(function(){
          $('#modificarusuarios').show();
        });
        $('#desplegar6').click(function(){
          $('#listardinerodiario').show();
        });
        $('#cerrarlistarusuarios').click(function(){
          $('#listarusuarios').hide();
        });
        $('#cerrareliminarusuarios').click(function(){
          $('#eliminarusuarios').hide();
        });
        $('#cerrarmodificarjuegos').click(function(){
          $('#modificarjuegos').hide();
        });
        $('#cerrarmodificarusuarios').click(function(){
          $('#modificarusuarios').hide();
        });
        $('#cerrarlistardinerodiario').click(function(){
          $('#listardinerodiario').hide();
        });
        
        
    });
    </script>
    <style>
        label{
  display: block;
  width: 100%;
}
body{
    background-image: url("../images/fondotienda.png"); 
}

.botoncerrar {
	background-color:#9bb0a0;
	border-radius:28px;
	border:1px solid #000000;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Times New Roman;
	font-size:17px;
	padding:7px 12px;
	text-decoration:none;
	text-shadow:0px 1px 0px #000000;
}
.botoncerrar:hover {
	background-color:#000000;
}
.botoncerrar:active {
	position:relative;
	top:1px;
}
.botonañadir {
	background-color:#fcfcfc;
	border-radius:28px;
	border:1px solid #000000;
	display:inline-block;
	cursor:pointer;
	color:#000000;
	font-family:Times New Roman;
	font-size:17px;
	padding:5px 6px;
	text-decoration:none;
	text-shadow:0px 1px 0px #000000;
}
.botonañadir:hover {
	background-color:#d6cfd6;
}
.botonañadir:active {
	position:relative;
	top:1px;
}
#eliminarusuarios{
    display: block;
        align-items: center;
}
#creausuarios{
    display: block;
        align-items: center;
}
    </style>
    <?php
    session_start();
    ?>
    <body class="sb-nav-fixed">
    <header class="main-header">

        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">

                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" height="60px" width="60px" alt=""></a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                       
                        <div class="dropdown">
                                <div class="dropdown">
                              <?php
                            
                            if(isset($_SESSION['visitas'])){
                                echo "<img src='../images/user.png' width='25px' height='25px'>Bienvenido ".$_SESSION['visitas']['nombre'];
                                echo "  <a href='cerrarsesion.php'><img src='../images/cerrar.png' height='20px' width='20px'></a>";
                                
                            }else{
                                echo "Inicia sesión";
                            }
                            ?></span>
                                  
                                    
                            
                </ul>
                <!-- <a href="#" class="cart-box" id="cart-info" title="View Cart">

                </a> -->
                    <!-- <li class="side-menu"><a href="../carrito.php">
                                        <i class="fa fa-shopping-bag"></i>
                                     
                </span>
							<p></p>
					</a></li> -->

                
               

            </div>
        </header>
        <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">
                            <?php 
                            
                            if($_SESSION['visitas']['perfil']=='Tienda'){
                                echo "Panel de control de ".$_SESSION['visitas']['perfil'];
                                ?></h1>
                                <div class="row">
                                    <div class="col-md-6"> 
                                        <div class="card bg-primary text-white col-md">
                                            <div class="card-body" id="desplegar1"><h3>Añadir Juego</h3></div>
                                            <div class="d-flex align-items-center justify-content-between">
                                            
                                                <div id="creausuarios" style="display:none" class=" justify-content-between">
                                              
                                                <form class="login-form" action="zonatienda.php" method="POST">
                                                            <label for="titulo">Titulo</label>
                                                            <input type="text" id="titulo" name="titulo"><br>
                                                            <label for="nombre">Nombre</label>
                                                            <input type="text" id="nombre" name="nombre"><br>
                                                            <label for="fecha_lanzamiento">Fech Lanzamiento</label>
                                                            <input type="date" id="fecha_lanzamiento" name="fecha_lanzamiento"><br>
                                                            <label for="productora">Productora</label>
                                                            <input type="text" id="productora" name="productora"><br>
                                                            <label for="descripcion">Decripcion</label>
                                                            <input type="text" id="descripcion" name="descripcion"><br>
                                                            <label for="ranking">Ranking</label>
                                                            <input type="number" id="ranking" name="ranking"><br>
                                                            <label for="pvp">PVP</label>
                                                            <input type="number" id="pvp" name="pvp"><br>
                                                            <input type="submit" class="botonañadir" value="Registrar" name="boton3">
                                                    </form>
                                                    <input type="button" id="cerrarcreausuarios" value="Cerrar" class="botoncerrar">
                                                    <?php
                                                        require_once('conex.php');
                                                        $con = conexion();
                                                        // var_dump($_POST["verificado"]);
                                                        if(isset($_POST['boton3'])){
                                                            if(!empty($_POST["titulo"]) && (!empty($_POST["nombre"])) && (!empty($_POST["fecha_lanzamiento"])) 
                                                            && (!empty($_POST["productora"])) && (!empty($_POST["descripcion"])) && (!empty($_POST["ranking"])) && (!empty($_POST["pvp"]))){
                                                                    $titulo=$_POST["titulo"];
                                                                    $nombre=$_POST["nombre"];
                                                                    $fecha_lanzamiento=$_POST["fecha_lanzamiento"];
                                                                    $productora = $_POST["productora"];
                                                                    $descripcion=$_POST["descripcion"];
                                                                    $ranking=$_POST["ranking"];
                                                                    $pvp=$_POST["pvp"];
                                                                            $sql= "SELECT titulo FROM juegos WHERE titulo=:titulo";
                                                                            $consulta_prep = $con->prepare($sql);
                                                                            if($consulta_prep->execute(array(':titulo'=>$titulo))){
                                                                                $res = $consulta_prep->fetchAll();
                                                                                // var_dump($res);
                                                                                if(empty($res[0])){
                                                                                insertJuego($titulo,$nombre,$fecha_lanzamiento,$productora,$descripcion,$ranking,$pvp,$con);
                                                                                echo "<script type='text/javascript'>alert('Juego añadido correctamente');</script>";
                                                                            }else{
                                                                                echo "Este juego ya está en el almacen";
                                                                            }
                                                                            }else{  
                                                                                echo "Consulta no realizada";
                                                                                }
                                                            }else{
                                                                echo "Faltan datos por rellenar";
                                                            }
                                                        }
                                                        
                                                           ?>
                                                </div>
        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6"> 
                                        <div class="card bg-secondary text-white col-md">
                                            <div class="card-body" id="desplegar2"><h3>Listar Clientes</h3></div>
                                            <div class="d-flex align-items-center justify-content-between  text-black">
                                            <div id="listarusuarios" style="display:none" class="justify-content-between">
                                            <?php
                                                $con=conexion();
                                                listaClientes($con);
                                            ?><br>
                                            <input type="button" id="cerrarlistarusuarios" value="Cerrar" class="botoncerrar">
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6"> 
                                        <div class="card bg-success text-white col-md">
                                            <div class="card-body" id="desplegar3"><h3>Eliminar juego</h3></div>
                                            <div class="d-flex align-items-center   text-black">
                                            <div id="eliminarusuarios" style="display:none" >
                                            <form class="login-form" action="zonatienda.php" method="POST">
                                            <select name="juego" id="tituloaeliminar" > 
                                            <?php
                                                require_once("conex.php");
                                                $con = conexion();
                                                
                                                $sql="SELECT titulo,id FROM juegos";
                                                foreach ($con->query($sql) as $row) {
                                                    echo "<option value='" . $row['id']."'><b><u>".$row['titulo']."</u></b></option>";
                                                }
                                                ?>;

                                                <input type="submit" class="botonañadir" value="Eliminar" name="boton4">
                                                </form>
                                            <?php
                                             if(isset($_POST['boton4'])){
                                                if(!empty($_POST["juego"])){
                                                    $juegoaeliminar=$_POST["juego"];
                                                    eliminarJuego($juegoaeliminar,$con);
                                                 }else{
                                                     echo "Rellena el ID porfavor";
                                                 }
                                             }
                                                
                                            ?><br>
                                            <input type="button" id="cerrareliminarusuarios" value="Cerrar" class="botoncerrar">
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6"> 
                                        <div class="card bg-info text-white col-md">
                                            <div class="card-body" id="desplegar4"><h3>Modificar juego</h3></div>
                                            <div class="d-flex align-items-center   text-black">
                                            <div id="modificarjuegos" style="display:none" >
                                            <form class="login-form" action="zonatienda.php" method="POST">
                                            <select name="ides" id="juegoamodificar" > 

                                                    <?php
                                                        require_once("conex.php");
                                                        $con = conexion();
                                                        
                                                        $sql="SELECT id,titulo FROM juegos";
                                                        foreach ($con->query($sql) as $row) {
                                                        
                                                            echo "<option value='" . $row['id']."'><b><u>".$row['titulo']."</u></b></option>";
                                                        }
                                                        ?>;
                                                        </select>
                                                            <br>
                                                            <label for="titulo">Titulo </label>
                                                            <input type="text" id="titulo" name="titulo"><br>
                                                            <label for="nombre">Nombre</label>
                                                            <input type="text" id="nombre" name="nombre"><br>
                                                            <label for="fecha_lanzamiento">Fecha Lanzamiento</label>
                                                            <input type="date" id="fecha_lanzamiento" name="fecha_lanzamiento"><br>
                                                            <label for="productora">Productora</label>
                                                            <input type="text" id="productora" name="productora"><br>
                                                            <label for="descripcion">Decripcion</label>
                                                            <input type="text" id="descripcion" name="descripcion"><br>
                                                            <label for="ranking">Ranking</label>
                                                            <input type="number" id="ranking" name="ranking"><br>
                                                            <label for="pvp">PVP</label>
                                                            <input type="number" id="pvp" name="pvp"><br>
                                                            <input type="submit" class="botonañadir" value="Registrar" name="boton5">
                                                    </form>
                                           <br>
                                            <input type="button" id="cerrarmodificarjuegos" value="Cerrar" class="botoncerrar">
                                            <?php
                                                        require_once('conex.php');
                                                        $con = conexion();
                                                        // var_dump($_POST["verificado"]);
                                                        if(isset($_POST['boton5'])){
                                                            if(!empty($_POST["titulo"]) && (!empty($_POST["nombre"])) && (!empty($_POST["fecha_lanzamiento"])) 
                                                            && (!empty($_POST["productora"])) && (!empty($_POST["descripcion"])) && (!empty($_POST["ranking"])) && (!empty($_POST["pvp"])) &&
                                                            (!empty($_POST["ides"]))){
                                                                    $titulo=$_POST["titulo"];
                                                                    $id=$_POST["ides"];
                                                                    $nombre=$_POST["nombre"];
                                                                    $fecha_lanzamiento=$_POST["fecha_lanzamiento"];
                                                                    $productora = $_POST["productora"];
                                                                    $descripcion=$_POST["descripcion"];
                                                                    $ranking=$_POST["ranking"];
                                                                    $pvp=$_POST["pvp"];
                                                                    var_dump($_POST);
                                                                    
                                                                     updateJuego($id,$titulo,$nombre,$fecha_lanzamiento,$productora,$descripcion,$ranking,$pvp,$con);
                                                            }else{
                                                                echo "Faltan datos por rellenar";
                                                            }
                                                        }
                                                        
                                                           ?>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="row">
                                <div class="col-md-6"> 
                                        <div class="card bg-warning text-white col-md">
                                            <div class="card-body" id="desplegar5"><h3>Modificar usuarios</h3></div>
                                            <div class="d-flex align-items-center justify-content-between  text-black">
                                            <div id="modificarusuarios" style="display:none" class="justify-content-between">
                                            <form class="login-form" action="zonatienda.php" method="POST">
                                            <select name="usuarioelegido" id="usuarioelegido" > 

                                                    <?php
                                                        require_once("conex.php");
                                                        $con = conexion();
                                                        
                                                        $sql="SELECT nombre FROM usuarios";
                                                        foreach ($con->query($sql) as $row) {
                                                        
                                                            echo "<option value='" . $row['nombre']."'><b><u>".$row['nombre']."</u></b></option>";
                                                        }
                                                        ?>;
                                                        </select>
                                                        <label for="nombre">Nombre </label>
                                                            <input type="text" id="nombre" name="nombre"><br>
                                                            <label for="apellidos">Apellidos</label>
                                                            <input type="text" id="apellidos" name="apellidos"><br>
                                                            <label for="telefono">Telefono</label>
                                                            <input type="number" id="telefono" name="telefono"><br>
                                                            <label for="email">Email</label>
                                                            <input type="text" id="email" name="email"><br>
                                                            <label for="direccion">Direcion</label>
                                                            <input type="text" id="direccion" name="direccion"><br>
                                                            <input type="submit" class="botonañadir" value="Modificar" name="boton6">

                                            </form>
                                            <?php 
                                            if(isset($_POST['boton6'])){
                                                if(!empty($_POST["nombre"]) && (!empty($_POST["apellidos"])) && (!empty($_POST["telefono"])) 
                                                && (!empty($_POST["email"])) && (!empty($_POST["direccion"])) && (!empty($_POST["usuarioelegido"]))){
                                                        $nombre=$_POST["nombre"];
                                                        $apellidos=$_POST["apellidos"];
                                                        $telefono=$_POST["telefono"];
                                                        $email=$_POST["email"];
                                                        $direccion = $_POST["direccion"];
                                                        $usuarioelegido = $_POST["usuarioelegido"];
                                                        modificarUsu($usuarioelegido,$nombre,$apellidos,$telefono,$email,$direccion,$con);
                                                }else{
                                                    echo "Faltan datos por rellenar";
                                                }
                                            }
                                            ?>
                                            <input type="button" id="cerrarmodificarusuarios" value="Cerrar" class="botoncerrar">
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6"> 
                                        <div class="card bg-primary text-white col-md">
                                            <div class="card-body" id="desplegar6"><h3>Ganancias Diarias</h3></div>
                                            <div class="d-flex align-items-center justify-content-between  text-black">
                                            <div id="listardinerodiario" style="display:none" class="justify-content-between">
                                            <?php
                                                $con=conexion();
                                                venta_diaria($con)
                                            ?><br>
                                            <input type="button" id="cerrarlistardinerodiario" value="Cerrar" class="botoncerrar">
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                               
                            </div>
                      
                    </div>
                </div>
                <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
                <script src="js/scripts.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
                <script src="assets/demo/chart-area-demo.js"></script>
                <script src="assets/demo/chart-bar-demo.js"></script>
                <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
                <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
                <script src="assets/demo/datatables-demo.js"></script>
            </body>
        </html>
                                             <?php
                            }else{
                                echo'<script type="text/javascript">
                                alert("No has iniciado sesión y se te va a redirigir a la pagina de login");
                                // window.location.href="cerrarsesion.php";
                                </script>';
                            }
                           
                       