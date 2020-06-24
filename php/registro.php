<?php
session_start();
if(isset($_SESSION['visitas'])){
    unset($_SESSION["visitas"]); 
  session_destroy();
  header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/estilologin.css">
    
    <title>Registro de clientes</title>
</head>
<body>
    <div class="login-page">
  <div class="form">
      <h1>REGISTRO DE CLIENTES</h1>
    <form class="login-form" action="registro.php" method="post">
    <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre">
            <label for="apellidos">Apellidos</label>
            <input type="text" id="apellidos" name="apellidos">
            <label for="direccion">Direccion</label>
            <input type="text" id="direccion" name="direccion">
            <label for="telefono">Telefono</label>
            <input type="number" id="telefono" name="telefono">
            <label for="email">Email</label>
            <input type="email" id="email" name="email">
            <label for="contrasena">Password</label>
            <input type="password" id="contrasena" name="contrasena">
            <input type="submit" class="botonlogin" value="Registrar" name="boton3">
      <p class="message">Tienes usuario ya? <a href="login.php">Inicia sesión</a></p>
    </form>
  </div>
</div>


</body>
</html>

<?php
    require_once('conex.php');
    $con = conexion();
    if(isset($_POST['boton3'])){
        if( !empty($_POST["nombre"]) && !empty($_POST["apellidos"]) && !empty($_POST["direccion"])  && !empty($_POST["telefono"]) 
        && !empty($_POST["email"])  && !empty($_POST["contrasena"])){
        $nombre=$_POST["nombre"];
        $apellidos=$_POST["apellidos"];
        $direccion=$_POST["direccion"];
        $telefono = $_POST["telefono"];
        $email=$_POST["email"];
        $contrasena=$_POST["contrasena"];
        $perfil='Cliente';
        if(!is_numeric($nombre)){
          $nombre = ucfirst(strtolower($nombre));
            if( strlen ($nombre) >3){
                  if(!is_numeric($apellidos)){
                    $apellidos = ucfirst(strtolower($apellidos));
                      if(strlen ($apellidos) >3){
                          if( $telefono > 600000000 && $telefono < 700000000){
                              
                              $email = filter_var($email, FILTER_SANITIZE_EMAIL);
                              $email = filter_var($email, FILTER_VALIDATE_EMAIL);
                              $sql= "SELECT email FROM usuarios WHERE email=:email";
                              $consulta_prep = $con->prepare($sql);
                              if($consulta_prep->execute(array(':email'=>$email))){
                                $res = $consulta_prep->fetchAll();
                                // var_dump($res);
                                if(empty($res[0])){
                                  addCliente($nombre,$apellidos,$direccion,$telefono,$email,$contrasena,$perfil,$con);
                              }else{
                                echo "Email ya utilizado, escoge otro";
                              }
                              }else{  
                                echo "Consulta no realizada";
                              }
    
    
                          }else{
                            echo "El telefono no está en el rango 600000000-70000000, compruebalo";
                          }
                        
                      }else{
                        echo "El apellido tiene menos de 3 caracteres, compruebalo";
                      }
                  }else{
                    echo "El apellido contiene caracteres numericos, eliminelos";
                  }
            }else{
              echo "El usuario tiene menos de 3 caracteres, compruebalo";
            }
        }else{
          echo "El usuario contiene caracteres numericos, eliminelos";
        }
    
        
    
    
    }else{
      echo "faltan datos";
    }
     
    }
    
    
?>