<script>

   $(".idNot").click(function(){

   var div = document.getElementById("buscador");
      div.style.display = 'none';  
  
  var textoBusqueda = $(this).val();

  var texto = document.getElementsByClassName(textoBusqueda)[0].value;
  var textoNombre = document.getElementsByClassName(textoBusqueda)[1].value;
  
  alert(textoBusqueda);
 
     if (textoBusqueda != "") {
      
     $("#divNotas").css("display", "block");
     $(".NombNota").html(textoNombre);
     $(".cnt").html(texto);
     $(".miIDN").html(textoBusqueda);      
    
     } else { 
       
        };
    });
  
</script>

<?php
session_start();
require('conexion.php');
$id = $_SESSION['id'];

$consultaBusqueda = $_POST['valorBusqueda'];
//Filtro anti-XSS
$caracteres_malos = array("<", ">", "\"", "'", "/", "<", ">", "'", "/");
$caracteres_buenos = array("& lt;", "& gt;", "& quot;", "& #x27;", "& #x2F;", "& #060;", "& #062;", "& #039;", "& #047;");
$consultaBusqueda = str_replace($caracteres_malos, $caracteres_buenos, $consultaBusqueda);

$mensaje = "";
$mensaje2 = "";
$idN = "";
$idD = "";
$text ="";
$nombre ="";

if (isset($consultaBusqueda)) {

    $consulta = mysqli_query($conexion, "SELECT  id, nombre, texto FROM notas WHERE usuarios_id='$id' and nombre COLLATE UTF8_SPANISH_CI LIKE '%$consultaBusqueda%'");
    
    $filasN = mysqli_num_rows($consulta);
    if ($filasN > 0) {
    
      echo 'Resultados para <strong>'.$consultaBusqueda.'</strong>';

      while($resultados = mysqli_fetch_array($consulta)) {
      $nombre = $resultados['nombre'];//Output
      $idN = $resultados['idnotas'];
      $text = $resultados['texto'];
      $mensaje .= "<br><div>
      <button value=".$idN." name='idNot' class='idNot' onclick='nuevaNota(this);' >".$nombre."</button> 
      <textarea class=".$idN."  style='visibility:hidden;height:1px;'>".$text."</textarea>
      <textarea class=".$idN."  style='visibility:hidden;height:1px;'>".$nombre."</textarea>
      </div>";
      
    };
    
  }
    else{
    
    $mensaje = "<p>No hay</p>";};
 
};

echo $mensaje;

?>