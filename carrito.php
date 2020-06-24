<?php
session_start();
include_once('php/conex.php');
$con = conexion();
?>
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

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.css"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
<style>
    form{
        display: contents;
    }
</style>
<script type="text/javascript">
// $(document).ready(function(){
// $('.eliminar').click(function(e){
//     var id=$(this).attr('id');
//    alert(id);
//    $.ajax({
//     data: {'id':id},
//     url: "php/archivo.php",
//     method: "post",
//     success: function(data) {
//         location.reload();
//     }
// });
// })
// });

</script>
</head>

<body>
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
  
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Resumen compra</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="php/tienda.php">Tienda</a></li>
                        <li class="breadcrumb-item"><a href="php/destruircarro.php">Vaciar Carrito</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
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
                                    <th>Precio</th>
                                    <th>Cantidad</th>
                                    <!-- <th>Eliminar</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                
                                <?php
                                 
                                    for ($i=0;$i<count($_SESSION['carrito']);$i++){
                                        echo "<tr>";
                                        // echo "img src='images/".$_POST['carrito'][$i].".png' alt="" ></td>";
                                        echo "<td class='thumbnail-img'><img  class='img-fluid' width=150 heigt=200 class='imagenagrandada' src='images/".$_SESSION['carrito'][$i].".png' ></td>";
                                        echo "<td class='name-pr'>".$_SESSION['carrito'][$i]."</td>";
                                        echo "<td class='price-pr'>".saberpreciojuego($con,$_SESSION['carrito'][$i])."</td>";
                                        echo '<input type="hidden" name="costo[]" value="'.saberpreciojuego($con,$_SESSION['carrito'][$i]).'">';
                                        echo "<td class='quantity-box'><input type='number' name='cantidad[]' size='4' value='1' min='0' step='1' class='c-input-text qty text'></td>";
                                        // echo "<td ><input type='button' id='".$_SESSION['carrito'][$i]."'   class='eliminar' value='Eliminar'></td>";
                                        
                                        echo '<input type="hidden" name="juego[]" value="'.$_SESSION['carrito'][$i].'">';
                                        echo "</tr>";
                                        ?>
                                        <!-- aqui paso los campos ocultos que voy a necesitar luego -->
                                        <input type="hidden" name="usuario" value="<?php echo $_SESSION['visitas']['id']; ?>">  
                                        <?php
                                    };
                                   
                                ?>
                                
                                </tr> 
                            </tbody>
                        </table>
                                
                    </div>
                </div>
            </div>
            <div class="row my-5">
                
                <div class="col-lg-6 col-sm-6">
                <!-- <input type="button" name="pago" value="Paypal" class="btn btn-primary">
                <input type="button" name="pago" value="Tarjeta de credito" class="btn btn-danger">
                <input type="button" name="pago" value="Transferencia" class="btn btn-success"> -->
                <label class="btn btn-danger">
                <input type="checkbox" name="pago" value="Paypal"  />Paypal<br />
                <span class="glyphicon glyphicon-ok"></span>
                </label>
                <label class="btn btn-info">
                <input type="checkbox" name="pago" value="Tarjeta Credito"  />Tarjeta Credito<br />
                <span class="glyphicon glyphicon-ok"></span>
                </label>
                <label class="btn btn-primary">
                <input type="checkbox" name="pago" value="Transferencia"  />Transferencia<br />
                <span class="glyphicon glyphicon-ok"></span>
                </label>
                <br><br>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="update-box">
                        <input type="submit" value="Pagar" type="submit">
                    </div>
                </div>
                
            </div>
            <div class="row my-5">
                <div class="col-lg-8 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12">
                   

        </div>
    </div>

    </form>
  