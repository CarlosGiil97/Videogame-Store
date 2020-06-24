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
        $('#cerrarlistarusuarios').click(function(){
          $('#listarusuarios').hide();
        });
        $('#cerrareliminarusuarios').click(function(){
          $('#eliminarusuarios').hide();
        });
    });
    </script>
    <style>
        label{
  display: block;
  width: 100%;
}
body{
    background-image: url("../images/fondoadmin.jpg"); 
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
    <body class="sb-nav-fixed">
        <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">
                            <?php 
                            
                            if($_SESSION['visitas']['perfil']=='Administrador'){
                                echo "Panel de control de ".$_SESSION['visitas']['perfil'];
                                ?></h1>
                                <div class="row">
                                    <div class="col-md-6"> 
                                        <div class="card bg-primary text-white col-md">
                                            <div class="card-body" id="desplegar1"><h3>Añadir Usuarios</h3></div>
                                            <div class="d-flex align-items-center justify-content-between">
                                            
                                                <div id="creausuarios" style="display:none" class=" justify-content-between">
                                              
                                                <form class="login-form" action="zonaadmin.php" method="POST">
                                                            <label for="nombre">Nombre</label>
                                                            <input type="text" id="nombre" name="nombre"><br>
                                                            <label for="apellidos">Apellidos</label>
                                                            <input type="text" id="apellidos" name="apellidos"><br>
                                                            <label for="direccion">Direccion</label>
                                                            <input type="text" id="direccion" name="direccion"><br>
                                                            <label for="telefono">Telefono</label>
                                                            <input type="number" id="telefono" name="telefono"><br>
                                                            <label for="email">Email</label>
                                                            <input type="email" id="email" name="email"><br>
                                                            <label for="perfil">Perfil</label>
                                                            <select name="perfil" id="perfil" > <br>
                                            <option value='tienda'><b><u>TIENDA</u></b></option>
                                            <option value='admin'><b><u>ADMIN</u></b></option>
                                            <option value='cliente'><b><u>CLIENTE</u></b></option><br></select><br>
                                                            <label for="contraseña">Password</label>
                                                            <input type="password" id="contrasena" name="contrasena"><br>
                                                           
                                                            <input type="submit" class="botonañadir" value="Registrar" name="boton3">
                                                    </form>
                                                    <input type="button" id="cerrarcreausuarios" value="Cerrar" class="botoncerrar">
                                                    <?php
                                                        require_once('conex.php');
                                                        $con = conexion();
                                                        // var_dump($_POST["verificado"]);
                                                        if(isset($_POST['boton3'])){
                                                            if(!empty($_POST["nombre"]) && (!empty($_POST["apellidos"])) && (!empty($_POST["direccion"])) 
                                                            && (!empty($_POST["telefono"])) && (!empty($_POST["email"])) && (!empty($_POST["contrasena"])) && (!empty($_POST["perfil"])))
                                                               {
                                                                    $nombre=$_POST["nombre"];
                                                                    $apellidos=$_POST["apellidos"];
                                                                    $direccion=$_POST["direccion"];
                                                                    $telefono = $_POST["telefono"];
                                                                    $email=$_POST["email"];
                                                                    $perfil=$_POST["perfil"];
                                                                    $contrasena=$_POST["contrasena"];
                                                                    
                                                                            $sql= "SELECT email FROM usuarios WHERE email=:email";
                                                                            $consulta_prep = $con->prepare($sql);
                                                                            if($consulta_prep->execute(array(':email'=>$email))){
                                                                                $res = $consulta_prep->fetchAll();
                                                                                var_dump($res);
                                                                                if(empty($res[0])){
                                                                                addUser($nombre,$apellidos,$direccion,$telefono,$email,$perfil,$contrasena,$con);
                                                                                // function generaToken(){
                                                                                //     //La funcion openssl_random_pseudo_byte: Genera una cadena de bytes pseudo-aleatoria, con el número de bytes pasados como parámetro .
                                                                                //     // bind2hex codifica la cadena devuelta por openssl a hexadecimal. Esto es una buena práctica porque dificulta la indexación del token que hemos creado. 
                                                                                //     return bin2hex(openssl_random_pseudo_bytes(16));
                                                                                // }
                                                                                // function registroUsuario(){
                                                                                //     $miDB = conexion();
                                                                                //     $token = generaToken();
                                                                                //     $sql = "INSERT INTO usuarios(verificado) VALUES (:veri)";
                                                                                //     $par = array(':veri'=>$token);
                                                                                //     $consulta =  $miDB->prepare($sql);
                                                                                //     if($consulta->execute($par))
                                                                                //     return TRUE;
                                                                                //     else
                                                                                //         return FALSE;
                                                                                //     $datosUsuario = ultimoUsuInsertado(); 
                                                                                //     $userId = $datosUsuario['id'];
                                                                                //     $token = $datosUsuario['verificado'];
                                                                                //     $url = "http://localhost/videojuegos/php/verificar.php?t=$token&user=$userId";
                                                                                //     $link = '<a href="' . $url . '">' . $url . '</a>';
                                                                                //     enviarCorreo($link, $userId);
                                                                                // }
                                                                                // echo "<script type='text/javascript'>alert('Usuario añadido correctamente');</script>";
                                                                            }else{
                                                                                echo "Email ya utilizado, escoge otro";
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
                                            <div class="card-body" id="desplegar2"><h3>Listar Usuarios</h3></div>
                                            <div class="d-flex align-items-center justify-content-between  text-black">
                                            <div id="listarusuarios" style="display:none" class="justify-content-between">
                                            <?php
                                                $con=conexion();
                                                
                                                listaUsuarios($con);
                                            ?><br>
                                            <input type="button" id="cerrarlistarusuarios" value="Cerrar" class="botoncerrar">
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6"> 
                                        <div class="card bg-success text-white col-md">
                                            <div class="card-body" id="desplegar3"><h3>Eliminar usuario</h3></div>
                                            <div class="d-flex align-items-center   text-black">
                                            <div id="eliminarusuarios" style="display:none" >
                                            <form class="login-form" action="zonaadmin.php" method="POST">
                                            <label for="idaeliminar">Id del usuario que quieres eliminar:</label>
                                                <input type="number" id="idaeliminar" name="idaeliminar"><br>
                                                <input type="submit" class="botonañadir" value="Eliminar" name="boton4">
                                                </form>
                                            <?php
                                             if(isset($_POST['boton4'])){
                                                if(!empty($_POST["idaeliminar"])){
                                                    $idaeliminar=$_POST["idaeliminar"];
                                                    delUsu($idaeliminar,$con);
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
                                    <!-- <div class="col-xl-3 col-md-6">
                                        <div class="card bg-danger text-white mb-4">
                                            <div class="card-body">Danger Card</div>
                                            <div class="card-footer d-flex align-items-center justify-content-between">
                                                <a class="small text-white stretched-link" href="#">View Details</a>
                                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="row">
                                    <div class="col-xl-6">
                                       
                                    </div>
                                    <div class="col-xl-6">
                                        
                                    </div>
                                </div>
                                <div class="card mb-4">
                                    
                                </div>
                            </div>
                        </main>
                        <!-- <footer class="py-4 bg-light mt-auto">
                            <div class="container-fluid">
                                <div class="d-flex align-items-center justify-content-between small">
                                    <div class="text-muted">Copyright &copy; Your Website 2019</div>
                                    <div>
                                        <a href="#">Privacy Policy</a>
                                        &middot;
                                        <a href="#">Terms &amp; Conditions</a>
                                    </div>
                                </div>
                            </div>
                        </footer> -->
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
                                window.location.href="cerrarsesion.php";
                                </script>';
                            }
                           
                       