<?php
 session_start();
 $borrar=array_search($_POST['id'],$_SESSION['carrito']);
 unset($_SESSION['carrito'][$borrar]);
 ?>
