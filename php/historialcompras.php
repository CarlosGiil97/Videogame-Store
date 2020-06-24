<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<?php 
session_start();
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>ThewayShop - Ecommerce Bootstrap 4 HTML Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.css"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">
    <div class="cart-box-main">
<div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <form action="historialcompras.php" method="POST">
                            <H3>HISTORIAL DE COMPRAS:</H3><br>
                            Desde:<input type="date" name="fecha1"> hasta: <input type="date" name="fecha2">
                            <input type="submit" value="Mostrar" name="boton3">
                    </form>
                     <?php
                    include_once('conex.php');
                    $con=conexion();
                    if(isset($_POST['boton3'])){
                        if(!empty($_POST["fecha1"]) && (!empty($_POST["fecha2"])))
                           {
                               $fecha1=$_POST["fecha1"];
                               $fecha2=$_POST["fecha2"];
                               $id=$_SESSION['visitas']['id'];
                               comprasrealizadas($id,$fecha1,$fecha2,$con);
                           }
                    }
                     ?>
                    </div>
                </div>
                <a href="tienda.php"><input type="button" value="Volver a la tienda">
            </div>