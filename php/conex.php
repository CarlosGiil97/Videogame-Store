<?php
function conexion(){
    $usuario = "videojuegos";
    $password = "videojuegos";
    $dbname = "videojuegos";
    // Primera opción 
    // $dsn='mysql:dbname='.$dbname.';host=127.0.0.1;charset=utf8';
    $dsn='mysql:dbname='.$dbname.';host=localhost';
    $array_atributos = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8' COLLATE 'utf8_spanish_ci'");
    try {
        $conexDB = new PDO($dsn, $usuario, $password, $array_atributos);
        // echo "Conexión establecida";
        $res = $conexDB->query("SELECT COLLATION('$dbname')");
        //  var_dump($res);
        // echo "<br>";
        // echo $res->fetch(PDO::FETCH_NUM)[0];
        // echo "<br>";
        // echo $conexDB->getAttribute(PDO::ATTR_SERVER_INFO);
        

    } catch (PDOException $th) {
        $th->getMesssage();
        exit();
        //throw $th;
    }
    return $conexDB;
}

        $con = conexion();

    function addUser($nombre,$apellidos,$direccion, $telefono, $email, $perfil,$contrasena,$con){
        $total = $con->prepare("INSERT INTO usuarios (nombre, apellidos, direccion, telefono,email, perfil,contrasena) 
        VALUES (:nombre, :apellidos, :direccion, :telefono, :email, :perfil,:contrasena)");
        // $total->bindValue(':nombre', $nombre);
        // $total->bindValue(':apellidos', $apellidos);
        // $total->bindValue(':direccion', $direccion);
        // $total->bindValue(':telefono',$telefono);
        // $total->bindValue(':email',$email);
        // $total->bindValue(':contraseña',$contraseña);
        // $total->bindValue(':perfil',$perfil);
        // $total->bindValue(':fecha_registro',$fecha_registro);
        // $total->bindValue(':verificado',$verificado);
        $total->execute(array(':nombre'=>$nombre, ':apellidos'=>$apellidos, ':direccion'=>$direccion, 
        ':telefono'=>$telefono,':email'=>$email,  ':perfil'=>$perfil,':contrasena'=>$contrasena));
        $arr = $total->errorInfo();
        var_dump($arr);
    }
    
    function addCliente($nombre,$apellidos,$direccion,$telefono,$email,$contrasena,$perfil,$con){
        $total = $con->prepare("INSERT INTO usuarios (nombre, apellidos, direccion, telefono,email,perfil,contrasena) 
        VALUES (:nombre, :apellidos, :direccion, :telefono, :email,:perfil,:contrasena)");
        $total->execute(array(':nombre'=>$nombre, ':apellidos'=>$apellidos, ':direccion'=>$direccion, 
        ':telefono'=>$telefono,':email'=>$email, ':perfil'=>$perfil,':contrasena'=>$contrasena));
        $arr = $total->errorInfo();
        // var_dump($arr);
        echo '<script type="text/javascript">
        alert("Registro exitoso, se le redigirá al login");
        window.location.assign("login.php");
        </script>';
    }

    function listaUsuarios($con){
        $sql = "SELECT * FROM usuarios";
        $result_usuarios = $con->query($sql);
        echo "<h1>LISTADO DE USUARIOS</h1>";
        foreach ($con->query($sql) as $row) {
            echo "<br> <b>El id es</b> ".$row['id'] . " cuyo nombre es ".$row['nombre']." ,su apellido es  ".$row['apellidos']." , la direccion  
            es ".$row['direccion']." ,el telefono es ".$row['telefono']." ,el email es ".$row['email'].", su contraseña es ".$row['contrasena'].", 
            el perfil activo es".$row['perfil'].", la fecha de registro fue ".$row['fecha_registro']," 
            ,el verificado fue".$row['verificado'];

            }
    }
    function showRanking($con){
        $sql = "SELECT * FROM juegos ORDER BY ranking";
        $result_prestamo = $con->query($sql);
        echo "<h1>JUEGOS ORDENADOS POR RANKING</h1>";
        foreach ($con->query($sql) as $row) {
            echo "<center><br><b>JUEGO:</b> ".$row['titulo'] . "</center><br>";
        }
    }

    function delUsu($idaeliminar,$con){
        $sql = 'DELETE FROM usuarios WHERE id = :id';
        $stmt = $con->prepare($sql);
        $stmt->bindValue(':id', $idaeliminar);
        $stmt->execute();

        return $stmt->rowCount();
    }

    function updateJuego($id,$titulo,$nombre,$fecha_lanzamiento,$productora,$descripcion,$ranking,$pvp,$con){

        $sql = "UPDATE juegos SET titulo = :titulo, 
            nombre = :nombre, 
            fecha_lanzamiento = :fecha_lanzamiento,  
            productora = :productora,  
            descripcion = :descripcion,
            ranking = :ranking,
            pvp = :pvp
            WHERE id = :id";

        $total = $con->prepare($sql);                                   
        $total->execute(array(':id'=>$id,':titulo'=>$titulo, ':nombre'=>$nombre, ':fecha_lanzamiento'=>$fecha_lanzamiento, 
        ':productora'=>$productora,':descripcion'=>$descripcion, ':ranking'=>$ranking, ':pvp'=>$pvp));
        $total->execute(); 
        echo'<script type="text/javascript">
        alert("Juego modificado");
        
        </script>';

    }

    function insertJuego($titulo,$nombre,$fecha_lanzamiento,$productora,$descripcion,$ranking,$pvp,$con){
        $total = $con->prepare("INSERT INTO juegos (titulo, nombre, fecha_lanzamiento, productora,descripcion, ranking, pvp) 
        VALUES (:titulo, :nombre, :fecha_lanzamiento, :productora, :descripcion, :ranking, :pvp)");

        $total->execute(array(':titulo'=>$titulo, ':nombre'=>$nombre, ':fecha_lanzamiento'=>$fecha_lanzamiento, 
        ':productora'=>$productora,':descripcion'=>$descripcion, ':ranking'=>$ranking, ':pvp'=>$pvp));
        $arr = $total->errorInfo();
    }

    function eliminarJuego($juegoaeliminar,$con){
        $sql = 'DELETE FROM juegos WHERE id = :id';
        $stmt = $con->prepare($sql);
        $stmt->bindValue(':id', $juegoaeliminar);
        $stmt->execute();

        return $stmt->rowCount();
    }
  

    function listaClientes($con){
        $sql = "SELECT * FROM usuarios WHERE perfil='Cliente'";
        $result_usuarios = $con->query($sql);
        echo "<h1>LISTADO DE CLIENTES</h1>";
        foreach ($result_usuarios as $row) {
            echo "<br> <b>El id es</b> ".$row['id'] . " cuyo nombre es ".$row['nombre']." ,su apellido es  ".$row['apellidos']." , la direccion  
            es ".$row['direccion']." ,el telefono es ".$row['telefono']." ,el email es ".$row['email'].", su contraseña es ".$row['contrasena'].", 
            el perfil activo es".$row['perfil'].", la fecha de registro fue ".$row['fecha_registro']," 
            ,el verificado fue".$row['verificado'];
            }
    }
    
    function modificarUsu($usuarioelegido,$nombre,$apellidos,$telefono,$email,$direccion,$con){
       $sql="UPDATE usuarios_clientes SET nombre=:nombre,apellidos=:apellidos,telefono=:telefono,email=:email,direccion=:direccion WHERE nombre=:usuarioelegido";
       $total = $con->prepare($sql);                                   
        $total->execute(array(':nombre'=>$nombre,':apellidos'=>$apellidos, ':telefono'=>$telefono, ':email'=>$email, 
        ':direccion'=>$direccion,':usuarioelegido'=>$usuarioelegido));
        $total->execute(); 
        echo'<script type="text/javascript">alert("Usuario modificado");</script>';

    }
    // delUsu(2,$con);

    function modificarCliente($id,$nombre,$apellidos,$direccion,$telefono,$email,$contrasena,$con){
        $sql="UPDATE usuarios SET nombre=:nombre,apellidos=:apellidos,direccion=:direccion,telefono=:telefono,email=:email,contrasena=:contrasena WHERE id=:id";
        $total = $con->prepare($sql);                                   
         $total->execute(array(':id'=>$id,':nombre'=>$nombre,':apellidos'=>$apellidos, ':direccion'=>$direccion,':telefono'=>$telefono, ':email'=>$email, 
         ':contrasena'=>$contrasena));
         $total->execute(); 
         $arr = $total->errorInfo();
        // echo'<script type="text/javascript">alert("Compra realizada con exito");</script>';
    //   var_dump($arr);
         echo'<script type="text/javascript">alert("Usuario modificado");</script>';
 
     }
    function venta_diaria($con){
        $sql = "SELECT * FROM venta_diaria";
        $result_usuarios = $con->query($sql);
        foreach ($result_usuarios as $row) {
            echo "<h4> <b>El Dinero ganado hoy  es</b> ".$row['ganado_dia']."€<img src='../images/dinero.png' width='100px' height='100px'></h4>";
            }
    }

    function ultimoUsuInsertado($con){
        $sql = "SELECT * FROM usuarios ORDER BY id DESC LIMIT 1";
        $result_usuarios = $con->query($sql);
        foreach ($result_usuarios as $row) {
            echo $row['id'];
        }
    }
    function saberpreciojuego($con,$juego){
        $sql = "SELECT pvp FROM juegos WHERE titulo = '$juego'";
        $result_usuarios = $con->query($sql);
        foreach ($result_usuarios as $row) {
            return $row['pvp'];
        }
    }
    function saberIDcontitulo($con,$juego){
        $sql = "SELECT id FROM juegos WHERE titulo = '$juego'";
        $result_usuarios = $con->query($sql);
        foreach ($result_usuarios as $row) {
            return $row['id'];
        }
    }
  
    function insertaJuegoCesta($usuario,$juego,$ejemplar,$metodo_pago,$precio_venta,$con){
        $total = $con->prepare("INSERT INTO cesta (usuario, juego, ejemplar,metodo_pago, precio_venta)
        VALUES (:usuario, :juego, :ejemplar, :metodo_pago, :precio_venta)");
        $total->execute(array(':usuario'=>$usuario, ':juego'=>$juego, ':ejemplar'=>$ejemplar, 
        ':metodo_pago'=>$metodo_pago, ':precio_venta'=>$precio_venta));
        echo '<script type="text/javascript">
        alert("Compra realizada correctamente y se le vaciará el carrito  ✅");
        window.location.assign("destruircarro.php");
        </script>';
              
        $arr = $total->errorInfo();
      var_dump($arr);
    }
    
    function sacarUltimonumeroNumEjem($con,$juego){
        $sql= "SELECT MAX(num_ejemplar) AS ultimo FROM ejemplar_juego WHERE juego = $juego";
        $result_usuarios = $con->query($sql);
        $arr = $result_usuarios->errorInfo();
        foreach ($result_usuarios as $row) {
            return $row['ultimo'];
        }
        var_dump($arr);

    }

    function comprasrealizadas($id,$fecha1,$fecha2,$con){
        $sql="SELECT * FROM cesta WHERE usuario=$id AND fecha_compra BETWEEN '$fecha1' AND '$fecha2'";
        $result_usuarios = $con->query($sql);
        echo "<h5>Compras realizadas:</h5>";
        foreach ($result_usuarios as $row) {
            // echo $row['juego'].$row['ejemplar'].$row['fecha_compra'].$row['metodo_pago'].$row['precio_venta'];
            echo "<h4>Compraste el ejemplar ".$row['ejemplar']." del juego ".$row['juego']." el dia ".$row['fecha_compra']." mediante ".$row['metodo_pago']." por un precio
             de ".$row['precio_venta']."€</h4>";
        }
        $arr = $result_usuarios->errorInfo();
    //   var_dump($arr);
      
    }

?>
