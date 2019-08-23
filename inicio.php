<?php 

require "conexion.php";

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<link rel="stylesheet" href="css/inicio.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	
</head>
<body>
	
   <div id="datos">

    <img id="imagen" src="img/yo.jpg">

    <h1 id="name">Héctor De Jesus Marroquin Gómez</h1>    
    
    <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
    
    <input type="password" placeholder="Contraseña" id="password" name="password">

    <input type="submit" value="Aceptar" name="entrar" id="submit">

    <p id="pin">Olvide mi pin</p>
      
    </form>

  </div>

    <?php
    session_start();
    if(isset($_POST['entrar'])){ 
    
      $password = $_POST['password'];
      
      $consulta = "SELECT * FROM usuarios WHERE contrasena = '$password' and rol ='Administrador'";
      $consulta2 = "SELECT * FROM usuarios WHERE contrasena = '$password' and rol ='Usuario'";
      $resultado = mysqli_query($conexion, $consulta);
      $resultado2 = mysqli_query($conexion, $consulta2);
      
      $fila = mysqli_num_rows($resultado);
      $fila2 = mysqli_num_rows($resultado2);

      if($fila > 0){
        
        header("location:index.php");
    
        }elseif ($fila2 > 0) {
          header("location:index2.php");
        }else{
        echo "<script>
             alert(' Error en la autenticación ');
             window.history.go(-1);
             </script>"; 
    }


      if ($fila = $resultado -> fetch_assoc()) {
      $_SESSION['id'] = $fila['id'];
      $_SESSION['nombre'] = $fila['nombre'];
      $_SESSION['contrasena'] = $fila['contrasena'];
      $_SESSION['confirmacion'] = $fila['confirmacion'];
      $_SESSION['indicio'] = $fila['indicio'];
      $_SESSION['rol'] = $fila['rol'];


    }


      mysqli_free_result($resultado);
      mysqli_close($conexion);

    if ($fila2 = $resultado2 -> fetch_assoc()) {
      $_SESSION['id'] = $fila2['id'];
      $_SESSION['nombre'] = $fila2['nombre'];
      $_SESSION['contrasena'] = $fila2['contrasena'];
      $_SESSION['confirmacion'] = $fila2['confirmacion'];
      $_SESSION['indicio'] = $fila2['indicio'];
      $_SESSION['rol'] = $fila2['rol'];



      $usuario = $_SESSION['nombre'];

      $structure = "./notas/$usuario/";

      $ruta = $serv . "$structure";
    if(!file_exists($ruta)){

        mkdir ($ruta,0777,true);
    if (!file_exists('notas/$usuario/buscar.php')) {
        
        copy('notas/buscar.php', 'notas/$usuario/buscar.php');
      }
          header("Location: index2.php");
  } else {
            if (!file_exists('notas/$usuario/buscar.php')) {
            copy('notas/buscar.php', 'notas/$usuario/buscar.php');
         }
          header("Location: index2.php");
  }
    }


      mysqli_free_result($resultado2);
      mysqli_close($conexion);
    
    }
?>

<?php 


  $sql = "SELECT * FROM usuarios";
  $result = $conexion->query($sql);
  if ($result->num_rows > 0) {
  // output data of each row
    echo "<div>";
    echo "<table id='usu'>";
  
      for ($i=0; $i < ($row = $result->fetch_assoc()); $i++) { 
      
        echo "<tr>";
      
        echo "<td>
                 <div class ='ava'>
                     <label for='$row[id]' class='datox'>$row[nombre]</label>
                </div>
             </td>";
    
        echo "</tr>";
      }
   
    echo "</table>";
    echo "</div>";
  } else {
    echo "0 results";
  }
  $conexion->close();


 ?>
</body>
</html>