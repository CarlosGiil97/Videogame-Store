<?php
  session_start();
  var_dump(session_get_cookie_params());
  unset($_SESSION["carrito"]); 
  // session_destroy();
  header("Location: tienda.php");
  exit;
?>