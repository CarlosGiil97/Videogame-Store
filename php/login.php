<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" type="text/css" href="../css/all.css"> -->
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="../css/estilologin.css">

    <title>Inicio de Sesión</title>
</head>
<body>
    <!-- <form action="" method="post">
        <label for="">Email</label>
        <input type="text" name="email">
        <label for="">Pass</label>
        <input type="password" name="pw">
        <input type="submit" value="Enviar"><br>
        ¿No tienes cuenta?<a href="registro.php">Regístrate</a>
    </form> -->
    <div class="login-page">
  <div class="form">
      <h1>INICIO DE SESIÓN</h1>
    <form class="login-form" action="" method="post">
      <input type="text" name="email" placeholder="email"/>
      <input type="password" name="pw" placeholder="password"/>
      <input class="botonlogin" type="submit" value="Enviar"><br>
      <p class="message">No estas registrado? <a href="registro.php">Create una cuenta</a></p>
    </form>
  </div>
</div>


</body>
</html>

<?php
    require_once('conex.php');
    echo "<div id='centrado'>";
    $miDB = conexion();
    if (!empty($nombreusuario)){
        if(isset($_SESSION['visitas'])){
            unset($_SESSION['visitas']);
            echo "Sesion borrada";
        }
    }
    if(  !empty($_POST["email"]) && !empty($_POST["pw"]) ){
        $a = $_POST['email'];
    $b = $_POST['pw'];


    $sql= "SELECT id,nombre,email,perfil,contrasena FROM usuarios WHERE email= :a";
    $consulta_prep = $miDB->prepare($sql);
    if($consulta_prep->execute(array(':a'=>$a))){
        $fila=$consulta_prep->fetch();
        // var_dump($fila);
        $nombreusuario=$fila['nombre'];
        $perfil=$fila['perfil'];
        // password_verify($b, $fila['pw'])
        if($fila['email'] == $a && $fila['contrasena'] == $b ){
            // echo "Usuario válido";
            if (!isset($_SESSION['visitas'])){
                    session_start();
                    $_SESSION['visitas'] = 0;
                }
            if(isset($_SESSION['visitas'])){
                $_SESSION['visitas']=array('nombre'=>$fila['nombre'],'perfil'=>$fila['perfil'],'id'=>$fila['id']);
                if($_SESSION['visitas']['perfil']=='Administrador'){
                    header( "Location: zonaadmin.php" );
                }else if($_SESSION['visitas']['perfil']=='Cliente'){
                    header( "Location: tienda.php" );
                }else if($_SESSION['visitas']['perfil']=='Tienda'){
                    header( "Location: zonatienda.php" );
                }
                echo "Bienvenido".$_SESSION['visitas']['perfil'];
               
            }else{
                echo "No se ha iniciado sesion";
            }
           
        }
        else{
            echo "Usuario No válido";
        }
    }
    else{
        echo "Cagada";
        echo "</div>";
    }
    }
    
?>