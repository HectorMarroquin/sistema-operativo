<?php 
session_start();
	#error_reporting(0);
	$usu = $_SESSION['nombre'];
	$contra = $_SESSION['contrasena'];
    $contra1 = $_SESSION['confirmacion'];
    $indi =  $_SESSION['indicio'];
    $rol =  $_SESSION['rol'];
	

	if ($usu==null || $usu =='') {

		echo "<h1>No tienes autorizacion</h1>";
		die();
	}
 ?>
<!doctype html>
<html lang="en">
	
  <head>
    <meta charset="UTF-8">
    <title>Sistema Operativo</title>
    <link rel="stylesheet" href="css/StyleDesktop.css">
	  <link rel="stylesheet" href="css/modal.css">
	  <link rel="stylesheet" href="css/estiloscalculadora.css">
	  <script src="js/jquery-3.3.1.min.js"></script>
	  <script src="js/main.js"></script>
	  <script src="js/jquery-ui.min.js"></script>
	  <script src="js/scrip-ui.js"></script>
	  <script type="text/javascript" src="js/adduser.js"></script>
	  <script src="js/funcalculadora.js"></script>
	  <script type="text/javascript" src="js/inserta.js"></script>
	  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	  <link href="css/perfil.css" rel="stylesheet">
	  <link href="css/notas.css" rel="stylesheet">
	  <link rel="stylesheet" href="css/adduser.css">
	  <link rel="stylesheet" type="text/css" href="css/agregarusuario.css">
   	  <link rel="stylesheet" type="text/css" href="css/editortxt.css">
   	  <link rel="stylesheet" type="text/css" href="css/efectospopup.css">
   	  <link rel="stylesheet" type="text/css" href="css/changeadmin.css">
	<link rel="stylesheet" type="text/css" href="css/tableadmin.css">	


	<script type="text/javascript">
	function bloquear(){
		if ("<?php echo $_SESSION['rol']; ?>" == "Administrador") {
		
		var w = document.getElementById('spoti');
		w.setAttribute('disabled','disabled');
		
		}else{
			alert("Holaa");
		}

		if ("<?php echo $_SESSION['rol']; ?>" == "Usuario") {
		var x = document.getElementById('desactivar');
		x.setAttribute('disabled','disabled');
		}		
		
	}
	</script>

  </head >

  <body onload="init();">
	  
	  <div id="barra">
			   
		  <img class="icon" src="icon/inicio.png">
		  <input class="buscar" type="text">
		  <img class="icon1" src="icon/panorama.png">
		  <img class="icon0" src="icon/biblioteca.ico">
		  <img class="icon2" src="icon/dropbox.png">
		  <img class="icon3" src="icon/avion.png">
		  <img class="icon3" src="icon/bateria.png">
		  <img class="icon3" src="icon/speaker.png">
		  <img class="icon3" src="icon/bluetooth.png">
		  <img class="icon4" src="icon/detalles.png">
	  </div>
	  
    <div id="modal">
		
		<div class="barra2">
			
			<img id="apagar" src="icon/apagar.png">
			<img id="settings" src="icon/settings.png">
			<img id="windows" src="icon/windows.png">
			<img id="perfil" src="img/yo.jpg">
		
		</div>
    		<div class="conte-modal">
				<div><p id="mensaje">La vida, es un vistaso</p></div>
				<img class="calcu" src="icon/calculadora.png">
				<img class="images" src="icon/edge.png">
				<img class="images" id="spoti" src="icon/spotify.png" onclick=" bloquear();">
				<img class="images" onclick="nuevaNota();" src="icon/notas.png">
				<div>
				<img class="images" src="icon/explorador.png">
				<img class="images" src="icon/firefox.png">
				<img class="images" src="icon/pelis.png">
				<img class="blocs" src="icon/blocs.png">
				</div>
			</div>
	  
	  
   </div>
	  
	  <div id="calc">
			
			<table id="table">
				<thead>
					<tr class="tr">
						<th colspan="3">Calculadora</th>
						<th id="x"></th>
						
					</tr>
				</thead>
				<tr>
					<td class="td" colspan="5"><span id="resultado"></span></td> 
				
				</tr>
				<tr class="tr">
					<td class="td"><button id="reset">CE</button></td>
					<td class="td"><button id="botonimage"></button></td>
					<td class="td"><button id="mod">%</button></td>
					<td class="td"><button id="division">/</button></td>
				
				
				</tr>
				<tr class="tr">
					<td class="td"><button id="siete" >7</button></td>
					<td class="td"><button id="ocho" >8</button></td>
					<td class="td"><button id="nueve" >9</button></td>
					<td class="td"><button id="multiplicacion" >x</button></td>
				
				
				</tr>
				<tr class="tr">
					<td class="td"><button id="cuatro" >4</button></td>
					<td class="td"><button id="cinco" >5</button></td>
					<td class="td"><button id="seis" >6</button></td>
					<td class="td"><button id="resta">-</button></td>
					
				
				</tr>
				<tr class="tr">
					<td class="td"><button id="uno" >1</button></td>
					<td class="td"><button id="dos" >2</button></td>
					<td class="td"><button id="tres" >3</button></td>
					<td class="td"><button id="suma" >+</button></td>
				
				
				</tr>
				<tr class="tr">
					<td class="td"><button id="punto">.</button></td>
					<td class="td"><button id="cero" >0</button></td>
					<td class="td"><button ></button></td>
					<td class="td"><button id="igual">=</button></td>
					
				</tr>
			</table>
	  	</div>
	 
		
	  	
			<div id="tableperfil">
				<img id="min" src="icon/cerrar.png">
				<img id="yoo"src="img/logo.png">

				<form form id="modificar" method="post">
				
				<table id="mod">
			<tr>
					<td>Nombre De Usuario: </td>
					<td> <input type="text" name="usuario" value="<?php echo "$usu";?>" required></td>
			</tr>
			<tr>
					<td>Contraseña: </td>
					<td> <input type="text"  name="contrasena"  value="<?php echo "$contra";?>" required></td>
			</tr>
			<tr>
					<td>Verifica Contraseña: </td>
					<td><input type="text" name="confirmacion"  value="<?php echo "$contra1";?>" required></td>
			</tr>
			<tr>
					<td>Indicio: </td>
					<td><input type="text" name="indicio"  value="<?php echo "$indi";?>" required></td>
			</tr>
			<tr>
					<td>Rol: </td>
					<td><input type="text"  name="rol"  value="<?php echo "$rol";?>" required disabled></td>
					
			</tr>
			<tr>
					<td>Profesor: </td>
					<td><input type="text" value="Juan Carlos Pimentel" required disabled></td>
					
			</tr>
			<tr>
				<td><input type="reset" value="Limpiar"></td>
				<td><button id="enviarmodifica">modificar</button></td>
				
			</tr>

		</table>
	  </form>
			</div>
	  
	  	<div id="divNotas">
	  		

	  	</div>
	  	
		<div id="adduser">
					
		<table>
				<tr>
					
					<td>
							<div id="info">Información de Usuario</div>
					</td>

				</tr>
				<tr>
					
					<td>
						<div id="CerrarSesion"><a href="cerrar_sesion.php" style="text-decoration: none; color: white;">Cerrar Sesion</a></div>
					</td>
					
				</tr>
				<tr>
					
					<td>
						<div id="CrearUsuario">Crear nuevo usuario</div>
					</td>
					
				</tr>
				<tr>
					
					<td>
						<div id="usuarioschange">Usuarios</div>
					</td>
					
				</tr>

		</table>

		</div>

		<div id="agregarusuario">
			
			<label class="lab">Agregar un usuario</label>
			<p>Elige una contraseña que sea facil de recordar para ti pero dificil de adivinar para otros. Si la olvidas te mostraremos el indicio.</p>
				
				<form form id="frmajax" method="POST">
				<table class="tablex">
					
					<tr>
							<td>Nombre de Usuario</td>
							<td><input type="text" id="usuario" name="usuario"></td>
						<!--	<td>
								<select name="selector" id="Usu" name="Usu">
  								<option value="usuario1" selected>Administrador</option> 
 								 <option value="usuario2" >Usuario</option>
							</select>

							</td>
							-->
					</tr>
					<tr>
							<td>Contraseña</td>
							<td><input type="password" id="password" name="password"></td>
					</tr>
					<tr>
							<td>Vuelva a escribir la contraseña</td>
							<td><input type="password" id="password1" name="password1"></td>
					</tr>
					<tr>
							<td>Indicio de contraseña</td>
							<td><input type="text" id="indicio" name="indicio"></td>
					</tr>
					<tr>
							<td>Tipo de Usuario</td>
							<td>
							<select name="select" id="select">
  								<option value="Administrador" selected>Administrador</option> 
 								 <option value="Usuario" >Usuario</option>
							</select>
							</td>
					</tr>
				</table>
				<div class="but">
				<button id="buttons">Agregar</button>
				<button id="buttonsC">Cancelar</button>
				<input type="reset" name="limpia" value="limpia">

				</div>
				
			</form>
		</div>
	
	<div id="changeadmin">
			
	
	
</div>
			
<div id="editordetexto">
<div id="div102">
	<nav id="barra1">
		<ul id="ul1">
			<li class="li"><a href="">Archivo</a></li>
			<li class="li"><a href="">Edición</a></li>
			<li class="li"><a href="">Formato</a></li>
			<li class="li"><a href="">Ver</a></li>
			<li class="li"><a href="">Ayuda</a></li>
		</ul>
	</nav>
</div>

<div id="div103">
	<nav id="barra2">
		<ul id="ul2">
			<li class="li2"><button class="bot" onclick="document.execCommand('bold',false,'');">Negrita</button></li>

			<li class="li2"><button class="bot" onclick="document.execCommand('italic',false,'');">Italica</button></li>
			<li class="li2"><button class="bot" onclick="document.execCommand('underline',false,'');">Subrayado</button></li>

			<li class="li2"><button class="bot" onclick="document.execCommand('fontsize',false,'4');">H2</button></li>

			<li class="li2"><button class="bot" onclick="document.execCommand('fontsize',false,'5');">H1</button></li>

			<li class="li2"><button class="bot" class="open15">Eliminar</button></li>
			
			<li class="li2"><button class="bot" name="enviar" id="enviar" value="Save">Guardar</button></li>

			<li class="li2"><button class="bot" onclick="document.execCommand('cut',false,'');">Cortar</button></li>
			
			<li class="li2"><button class="bot" onclick="document.execCommand('copy',false,'');">Copiar</button></li>
			
		</ul>
	</nav>

</div>

<div id="div104">
		<section id="textBox" contenteditable="true">
    	</section>
</div>
<div id="div105">
		<input type="text" name="buscar" id="buscarTxt" placeholder="File to search" class="inp"><br>
	<div id="txtHint">
	</div>
	<input type="text" placeholder="Name Of File" id="nombre" class="inp">
</div>

<div id="popup15" style="display: none;"> <!--  -->
    <div class="content-popup15">
    <div class="close15"><a href="#" id="close15"><img src="img/close.png"/></a></div>
       <div>
		<label>File Name</label><br>
			<!-- Para borrar el archivo-->
		<form action="borrarArchivo.php" method="post" id="formBorrarArchivo">
			<input type="text" name="borrararchivo1" id="borrararchivo1">
			<input type="submit" name="delete1" id="delete1">
		</form>
	</div>
</div>
</div>
</div>
  </body>

</html>
