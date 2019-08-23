<?php

$conexion = mysqli_connect("localhost", "root" ,"","sistema");
	
	if (!$conexion){
		echo "conexion fallida";
		
	}else{
		
		
	}
?>


<!doctype html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/estilos.css">
	<script src="js/jquery-3.3.1.min.js"></script>
	  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  </head>

  <body>
	  
	  <div id="datos">
		
	  <img id="imagen" src="img/yo.jpg">

	  <h1 id="name">Héctor De Jesus Marroquin Gómez</h1>	  
	  s
	  <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">
    
 	  <input type="text" placeholder="PIN" id="password" name="password">

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

  </body>

</html>