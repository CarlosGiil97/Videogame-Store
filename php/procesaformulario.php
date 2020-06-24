<?php
session_start();
include_once('conex.php');
// $pago=$_POST['pago'];
// var_dump($_POST);

$con =conexion();

for ($i = 0; $i<count($_POST['juego']); $i++) {
    $usuario=$_POST['usuario'];
    $juego=saberIDcontitulo($con,$_POST['juego'][$i]);
    $ejemplar=sacarUltimonumeroNumEjem($con,$juego);
    $metodo_pago=$_POST['pago'];
    $precio_venta=$_POST['costo'][$i];
    // echo 'usuario:'.$usuario.'Juego:'.$juego.'Ejemplares:'.$ejemplar.'Metodo_pago:'.$metodo_pago.'Precio venta:'.$precio_venta.'<br>';
    insertaJuegoCesta($usuario,$juego,$ejemplar,$metodo_pago,$precio_venta,$con);
   

   
}
// echo $pago;
// var_dump($_POST['costo']);
// var_dump($_POST['cantidad']);
// var_dump($_POST['juego']);
// var_dump($_POST['usuario']);
// var_dump($_POST['pago']);
// var_dump($_POST['fecha_compra']);
?>