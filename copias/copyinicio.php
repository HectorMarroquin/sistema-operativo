<?php

$conexion = mysqli_connect("localhost", "root" ,"" ,"sistema");
  
  if (!$conexion){
    echo "conexion fallida";
    
  }else{
   # echo "Conexion Exitosa";
  }
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
    
    <input type="password" placeholder="PIN" id="password" name="password">

    <input type="submit" value="Aceptar" name="entrar" id="submit">

    <p id="pin">Olvide mi pin</p>
      
    </form>

  </div>

    <?php
  
    if(isset($_POST['entrar'])){ 
    
    $password = $_POST['password'];
    
      $consulta = "SELECT * FROM usuarios WHERE password = '$password'";
      $resultado = mysqli_query($conexion, $consulta);
      $fila=mysqli_num_rows($resultado);

      if($fila > 0){
        
        header("location:index.html");
    
        }else{
        echo "<script>
      alert(' Error en la autenticación ');
      window.history.go(-1);
        </script>"; 
    }

      mysqli_free_result($resultado);
      mysqli_close($conexion);
    
    }
?>
<div id="usu">
  <table>
  	<tr>
  			<td>
  				<div class="ava">
  					<img src="img/yo.jpg" class="avatar">
  					<label>Hector De Jesus Marroquin Gomez</label>
  				</div>
  			</td>
  	</tr>
	<tr>
  			<td>
  		      <div class="ava">	
  				  	<img src="img/yo.jpg" class="avatar">
  				  	<label>Hector De Jesus Marroquin Gomez</label>
  			  	</div>
  			</td>
  	</tr>

	<tr>
  			<td>
  		      <div class="ava">	
  				  	<img src="img/yo.jpg" class="avatar">
  				  	<label>Hector De Jesus Marroquin Gomez</label>
  			  	</div>
  			</td>

	</tr>

  </table>
</div>

</body>
</html>