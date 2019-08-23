<?php 
	 
	require "conexion.php";

 	$sql = "SELECT * FROM usuarios";
 	$result = $conexion->query($sql);
    if ($result->num_rows > 0) {
  
    echo "<div>";

    echo "<h1>Administrar Usuarios</h1><br>";
    echo "<table id='usu'>";

    		echo "

    		<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Contraseña</th>
					<th>Confirmacion</th>
					<th>Indicio</th>
					<th>Rol</th>
					<th>Eliminar</th>

    		</tr>


    		";

  
      for ($i=0; $i < ($row = $result->fetch_assoc()); $i++) { 
      
        echo "<tr>";
      
        echo "<tr>

				<td>".$row["id"]."</td>
				<td id='nombre_usuario' data-id_usuario='".$row["id"]."' contenteditable>".$row['nombre']."</td>
				<td id='contrasena_usuario' data-id_contrasena='".$row['id']."' contenteditable>".$row['contrasena']."</td>
				<td id='confirmacion_usuario' data-id_confirmacion='".$row['id']."' contenteditable>".$row['confirmacion']."</td>
				<td id='indicio_usuario' data-id_indicio='".$row['id']."' contenteditable>".$row['indicio']."</td>
				<td id='rol_usuario' data-id_rol='".$row['id']."' contenteditable>".$row['rol']."</td>
				<td><button id='delete' data-id='".$row["id"]."'>Eliminar</button></td>
		</tr>";
      }

      echo "<tr>
			<td id='id_add'></td>
			<td id='nombre_add' contenteditable></td>
			<td id='contra_add' contenteditable></td>
			<td id='contra1_add' contenteditable></td>
			<td id='indicio_add' contenteditable></td>
			<td id='rol_add' contenteditable></td>
			<td><button id='add'>Agregar</button></td>

      </tr>";		

   
    echo "</table>";
    echo "<br>
			<br>
    ";
    echo "<button id='salirpafuera' style=' width: 120px; color: black;'>Salir</button>";
    echo "</div>";
  } else {
    echo "0 results";
  }
 	 $conexion->close();


 	
 ?>

