<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
</head>
<style>
  .myButton {
	box-shadow: 0px 0px 0px 2px #9fb4f2;
	background:linear-gradient(to bottom, #7892c2 5%, #476e9e 100%);
	background-color:#7892c2;
	border-radius:10px;
	border:1px solid #4e6096;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:12px;
	padding:9px 25px;
	text-decoration:none;
	text-shadow:0px 1px 0px #283966;
}
.myButton:hover {
	background:linear-gradient(to bottom, #476e9e 5%, #7892c2 100%);
	background-color:#476e9e;
}
.myButton:active {
	position:relative;
	top:1px;
}
.myButton3 {
  margin-right: 10px;
	box-shadow: 0px 0px 0px 2px #9fb4f2;
	background:linear-gradient(to bottom, #7892c2 5%, #c1ccd9 100%);
	background-color:#7892c2;
	border-radius:10px;
	border:1px solid #4e6096;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:14px;
	padding:7px 26px;
	text-decoration:none;
	text-shadow:0px 1px 0px #283966;
}
.myButton3:hover {
	background:linear-gradient(to bottom, #c1ccd9 5%, #7892c2 100%);
	background-color:#c1ccd9;
}
.myButton3:active {
	position:relative;
	top:1px;
}


      

</style>
<?php
function search($text){
	

	$db = new PDO("mysql:host=localhost;dbname=videojuegos", 'videojuegos', 'videojuegos');

	$text = htmlspecialchars($text);

	$get_name = $db->prepare("SELECT * FROM juegos WHERE titulo LIKE concat('%', :titulo, '%')");

  $get_name -> execute(array('titulo' => $text));
  echo "<form class='formulario'>";
    echo "<div class='container'><div class='row'>";
	while($titulos = $get_name->fetch(PDO::FETCH_ASSOC)){

    echo "<div id=pepe class='col-4'>";
    echo "<form>";
                    echo "<h2>" . $titulos["titulo"] . "</h2>";
                    echo "<img width=150 heigt=200 class='imagenagrandada' src='../images/".strtolower($titulos["titulo"]).".png' ><br>";
                    echo "<p><b>Ranking:</b>". $titulos["ranking"] ."</p><br>";
                     echo "<p><b>Fecha Lanzamiento:</b>". $titulos["fecha_lanzamiento"] ."</p><br>";
                     echo "<p><b>Productora:</b>". $titulos["productora"] ."</p>";
                     echo "<p><b>Precio:</b><h3>". $titulos["pvp"] ."€</h3></p>";
                     echo "<div style='display:none' id='div-".$titulos["titulo"]."'>".$titulos["descripcion"]."</div>";
                     echo "<input type='button' class='myButton3' id='mostrardiv-".$titulos["titulo"]."' value='Detalles'><input type='button' id='".$titulos["titulo"]."'   class='myButton' value='Añadir'>";
                    //  echo '<input name="'.$titulos["id"].'" id="oculto" type="hidden" value="'.$titulos["id"].'">';
                     echo "</div></form>";
    }
    // var_dump($_SESSION['carrito']);
    echo "</div>";
   

}
search($_GET['txt']);
?>
<script type="text/javascript">
$('.myButton3').click(function(e){
    var id=$(this).attr('id');
    var res = id.substring(11,40);
    divelegido='div-'+res
    // alert(divelegido);
    document.getElementById(divelegido).style.display = "block";
    $('#div-'+res).show();

    // alert(id);
});

$('.myButton').click(function(e){
    var id=$(this).attr('id');
    alert('Añadiendo al carrito ...')   
    $.ajax({ 
        url: "administrarcarrito.php",
        type: "POST",
        async: true,
        dataType:"json", 
        data: {'id':id}
    }).success(function(data){ //on Ajax success
      console.log(data);
        
    })
    e.preventDefault();
    location.reload();
});
// $('.formulario').submit(function(e){
//         e.preventDefault();
//         var formu = $(this);
//         alert('añadiendo al carro ...')
//         $.ajax({
//             url: "administrarcarrito.php",
//             async: true,
//             type: 'post',
//             dataType: "json",
//             data: formu.serialize(),
//             success: correcta,
//             error: respuestaError
//         });
//     });


</script>