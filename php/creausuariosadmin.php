<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/login.css">

    <title>Crear usuarios</title>
</head>
<body>
      <h1>Crear usuarios</h1>
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
            <label for="contraseña">Password</label>
            <input type="password" id="contraseña" name="contraseña">
            <label for="perfil">Perfil</label>
            <input type="text" id="perfil" name="perfil">
            <label for="fecha_registro">Fecha Registro</label>
            <input type="date" id="fecha_registro" name="fecha_registro">
            <label for="verificado">Verificado</label>
            <input type="text" id="verificado" name="verificado">
            <input type="submit" class="botonlogin" value="Registrar" name="boton3">

    </form>
  </div>
</div>


</body>
</html>

<?php
    require_once('conex.php');
    $con = conexion();
    if( !empty($_POST["nombre"]) && !empty($_POST["apellidos"]) && !empty($_POST["direccion"])  && !empty($_POST["telefono"]) 
    && !empty($_POST["email"]) && !empty($_POST["contraseña"]) && !empty($_POST["perfil"]) 
    && !empty($_POST["fecha_registro"]) && !empty($_POST["verificado"])){
    $nombre=$_POST["nombre"];
    $apellidos=$_POST["apellidos"];
    $direccion=$_POST["direccion"];
    $telefono = $_POST["telefono"];
    $email=$_POST["email"];
    $contraseña=$_POST["contraseña"];
    $perfil=$_POST["perfil"];
    $fecha_registro=$_POST["fecha_registro"];
    $verificado=$_POST["verificado"];
                          $sql= "SELECT email FROM usuarios WHERE email=:email";
                          $consulta_prep = $con->prepare($sql);
                          if($consulta_prep->execute(array(':email'=>$email))){
                            $res = $consulta_prep->fetchAll();
                            var_dump($res);
                            if(empty($res[0])){
                              addUser($nombre,$apellidos,$direccion,$telefono,$email,$contraseña,$perfil,$fecha_registro,$verificado,$con);
                          }else{
                            echo "Email ya utilizado, escoge otro";
                          }
                          }else{  
                            echo "Consulta no realizada";
                          }
}else{
  echo "faltan datos";
}
 
    
?>