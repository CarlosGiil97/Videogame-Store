<?php
 require_once("conex.php");

 /***
  * Partimos de la base de que este fichero sería el que procesara el link de verificación enviado a un usuario a su correo 
  */

// Comprobamos si están establecidos los parámetros t y user y los separamos 
if(isset($_GET['t']) && isset($_GET['user'])){
    $token = $_GET['t'];
    $userId = $_GET['user'];
    // verficarCuenta es una función que realizamos nosotros en la que se comprueba para el usuario dado que el token sea el pasado como parámetro. En caso afirmativo la función hace un update del campo y lo pone con valor TRUE. El campo será siempre un campo de tipo VARCHAR, dado que alberga tanto el token generado en hexadecimal como el valor TRUE cuando ha sido comprobado. 
    echo verificarCuenta($token, $userId);
    
}
else{
    echo "Parámetros no establecidos, los sentimos pulsa un enlace válido";
}
