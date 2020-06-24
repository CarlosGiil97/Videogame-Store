<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

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
                        <form action="php/procesaformulario.php" method="POST">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Imagen</th>
                                    <th>Juego</th>
                                    <th>Ranking</th>
                                    <th>Precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php
                                include_once('conex.php');
                                $con= conexion();
                                  $sql = "SELECT * FROM juegos ORDER BY ranking";
                                  $result_usuarios = $con->query($sql);
                                  foreach ($con->query($sql) as $row) {
                                         echo "<tr>";
                                        // echo "img src='images/".$_POST['carrito'][$i].".png' alt="" ></td>";
                                        echo "<td class='thumbnail-img'><img  class='img-fluid' width=150 heigt=200 class='imagenagrandada' src='../images/".$row['titulo'].".png' ></td>";
                                        echo "<td class='name-pr'>".$row['titulo']."</td>";
                                        echo "<td class='price-pr'><h1>".$row['ranking']."</h1></td>";
                                        echo "<td class='price-pr'>".$row['pvp']."</td>";
                                        
                                        echo "</tr>";
                          
                                      }
                                   
                                   
                                ?>
                                
                                </tr> 
                            </tbody>
                        </table>
                                
                    </div>
                </div>
                <a href="tienda.php"><input type="button" value="Volver a la tienda">
            </div>