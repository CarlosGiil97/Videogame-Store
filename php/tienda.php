<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.css"></script>
    <style>
    body{
        background-color: #ADD5E3;
    }
    .dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
 .buscador{
    font-size:30px;
    text-align:center;
}
.col-4{
    text-align:center;
    margin-top:10px;
    margin-bottom:10px;
} 
#show_up{
	background-color: #E2F5FC;
    width:100%;
}
/* #show_up a{
	border-bottom: 1px solid #ddd;
	display: block;
	padding: 5px;
}  */
.shopping-cart-box{
    display:flex;
}
.carro:hover{
    background-color:#77DA88;
}
    </style>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Freshshop - Ecommerce Bootstrap 4 HTML Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/custom.css">

</head>

<script>
$(document).ready(function(e){
	$("#search").keyup(function(){
		$("#show_up").show();
		var text = $(this).val();
		$.ajax({
			type: 'GET',
			url: 'buscar.php',
			data: 'txt=' + text,
			success: function(data){
				$("#show_up").html(data);
			}
		});
	})
});



</script>
<?php session_start();?>
<body>
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
                        <!-- <li class="nav-item active"><a class="nav-link" href="index.html">Categorias</a></li> -->
                        <li class="nav-item"><a href="ranking.php" class="nav-link" >Ranking</a></li>
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
                                    <a href="modificarperfil.php">Modificar perfil</p>
                                    <a href="historialcompras.php">Historial pedidos</p>
                                    <a href="cerrarsesion.php">Cerrar Sesion</p></a></a>
                                    </div>
                                    </div>
                                    
                            
                </ul>
                <a href="#" class="cart-box" id="cart-info" title="View Cart">

                </a>
                    <li class="side-menu"><a href="../carrito.php">
                                        <i class="fa fa-shopping-bag"></i>
                                            <span class="badge"><?php 
                if(isset($_SESSION["carrito"])){
                    echo count($_SESSION["carrito"]); 
                }else{
                    echo 0; 
                }
                ?></span>
							<p></p>
					</a></li>

                
               

            </div>
        </header>
        <body>
        <!-- <div class="search-box">
        <input  style="width:100%" class="buscador" type="text" autocomplete="off" placeholder="Escribe el nombre del juego..." />
        <div class="result"></div> -->
        <input type="text" style="width:100%" placeholder="Introduce nombre del juego" name="names" id="search" class="buscador"/>
        <hr>
         <div id="show_up"></div>
        
    </div>
        </body>
           