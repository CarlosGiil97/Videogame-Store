<?php session_start();?>

<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Freshshop - Ecommerce Bootstrap 4 HTML Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/custom.css">
<header class="main-header">

<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
            <a class="navbar-brand" href="index.html"><img src="../images/logo.png" height="60px" width="60px" alt=""></a>
        </div>

        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                <!-- <li class="nav-item active"><a class="nav-link" href="index.html">Categorias</a></li> -->
                <div class="dropdown">
                        <div class="dropdown">
                        <a class="nav-link" ><span><?php
                    
                    if(isset($_SESSION['visitas'])){
                        echo "<img src='../images/user.png' width='25px' height='25px'>Bienvenido ".$_SESSION['visitas']['nombre'];
                        
                    }else{
                        echo "Inicia sesión";
                    }
                    ?></span>
                            <div class="dropdown-content">
                            <a href="cerrarsesion.php">Cerrar Sesion</p></a></a>
                            </div>
                            </div>
                            
                    
        </ul>
     

        
       

    </div>
</header>
<div class="cart-box-main">
<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive"><h1>MODIFICAR DATOS CLIENTE</h1>
                 
                    <form class="login-form" action="modificarperfil.php" method="POST">
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
                                                           <br>
                                                            <label for="contraseña">Password</label>
                                                            <input type="password" id="contrasena" name="contrasena"><br>
                                                           
                                                            <input type="submit" class="botonañadir" value="Modificar" name="boton3">
                                                    </form>
                                                    <?php
                                                        require_once('conex.php');
                                                        $con = conexion();
                                                        // var_dump($_POST["verificado"]);
                                                        if(isset($_POST['boton3'])){
                                                            if(!empty($_POST["nombre"]) && (!empty($_POST["apellidos"])) && (!empty($_POST["direccion"])) 
                                                            && (!empty($_POST["telefono"])) && (!empty($_POST["email"])) && (!empty($_POST["contrasena"])))
                                                               {
                                                                $nombre=$_POST["nombre"];
                                                                $apellidos=$_POST["apellidos"];
                                                                $direccion=$_POST["direccion"];
                                                                $telefono =strval($_POST["telefono"]);
                                                                $email=$_POST["email"];
                                                                $contrasena=$_POST["contrasena"];
                                                                $id=strval($_SESSION['visitas']['id']);
                                                                // echo $id;
                                                                // var_dump($_SESSION['visitas']['id']);
                                                                modificarCliente($id,$nombre,$apellidos,$direccion,$telefono,$email,$contrasena,$con);
                                                                $_SESSION['visitas']['nombre']= $_SESSION['visitas']['nombre'];
                                                               }
                                                            }
                                                            
                                                    ?>
                                                    <a href="tienda.php"><input type="button" value="Volver atrás">
                </div>
                </div>
            </div>
        </div>
    </div>    </div>