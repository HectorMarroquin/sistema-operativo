<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    
	<link rel="stylesheet" href="css/efectospopup.css">
	<link rel="stylesheet" href="css/perfil3.css">
    <title>uno</title>
    
</head>
<body>
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
			<li class="li2"><button onclick="document.execCommand('bold',false,'');">Negrita</button></li>

			<li class="li2"><button onclick="document.execCommand('italic',false,'');">Italica</button></li>
			<li class="li2"><button onclick="document.execCommand('underline',false,'');">Subrayado</button></li>

			<li class="li2"><button onclick="document.execCommand('fontsize',false,'4');">H2</button></li>

			<li class="li2"><button onclick="document.execCommand('fontsize',false,'5');">H1</button></li>

			<li class="li2"><button class="open15">Eliminar</button></li>
			
			<li class="li2"><button name="enviar" id="enviar" value="Save">Guardar</button></li>

			<li class="li2"><button onclick="document.execCommand('cut',false,'');">Cortar</button></li>
			
			<li class="li2"><button onclick="document.execCommand('copy',false,'');">Copiar</button></li>
			
		</ul>
	</nav>

</div>

<div id="div104">
		<section id="textBox" contenteditable="true">
    	</section>
</div>
<div id="div105">
		<input type="text" name="buscar" id="buscarTxt" placeholder="File to search"><br>
	<div id="txtHint">
	</div>
	<input type="text" placeholder="Name Of File" id="nombre">
</div>
<input type="text" name="pasarvariable" id="pasarvariable">
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
</body>
</html>