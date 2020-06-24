<?php
session_start();
if(!empty($_SESSION['carrito'])){
    $id= $_POST['id'];
    if (in_array($id, $_SESSION['carrito'])){
        $_SESSION['carrito']++;
    }else{
        array_push($_SESSION['carrito'], $id);
    }
   

}else{
    $_SESSION['carrito'] = [];
   $id= $_POST['id'];
    array_push($_SESSION['carrito'], $id);
 
}
// if(isset($_POST['id'])){
//     $_SESSION['carrito']=$_POST['id'];
// }
// var_dump($_POST['id']);
// // echo ($id;)
// // json_encode(var_dump($_POST));
// echo json_encode($_POST['id']);
// if (!isset($_SESSION['carrito'])){
//     session_start();
//     $_SESSION['carrito'] = array();
//     $_SESSION['carrito']=$_POST['id'];
// }else{
//    $_SESSION['carrito']=$_POST['id'];
// }

?>