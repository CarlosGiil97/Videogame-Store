<?php
  session_start();
  var_dump(session_get_cookie_params());
  unset($_SESSION["visitas"]); 
  session_destroy();
  header("Location: ../index.php");
  exit;
?>

