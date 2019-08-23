$(document).ready(function(){
		
		$('#buttons').click(function(){
			var datos=$('#frmajax').serialize();
			$.ajax({
				type:"POST",
				url:"ingresar.php",
				data:datos,
				success:function(r){
					if(r==1){
						alert("Fallo el server");
					}else{
						
						alert("agregado con exito");
					}
				}
			});

			return false;
		});


		$('#enviarmodifica').click(function(){
			var datos1=$('#modificar').serialize();
			$.ajax({
				type:"POST",
				url:"modifica.php",
				data:datos1,
				success:function(r){
					if(r==1){
						alert("Fallo el server");
					}else{
						
						alert("modificado con exito");
					}
				}
			});

			return false;
		});


		$(document).on("click", "#add", function(){
			var nom = $("#nombre_add").text();
			var con = $("#contra_add").text();
			var con1 =$("#contra1_add").text();
			var ind =$("#indicio_add").text();
			var rolon =$("#rol_add").text();

			$.ajax({
				type:"POST",
				url:"ingresar.php",
				data:{usuario: nom, password: con, password1: con1, indicio: ind, select:rolon},
				success:function(r){

					obtener_datos();
				
				}
			});

			return false;
		});

		$(document).on("click", "#delete", function(){

			if (confirm("Estas seguro de eliminar este registro")) {

				var id = $(this).data("id");

				$.ajax({
				type:"POST",
				url:"eliminar.php",
				data:{id:id},
				success:function(r){

					if(r==1){
						alert("Fallo el server");
					}else{
						obtener_datos();
						alert("eliminado con exito");
					}
				
				}
			});

			return false;


			}

		});

		function obtener_datos(){

			$.ajax({

				url: "mostrar_datos.php",
				method: "POST",
				success: function(data){

					$("#changeadmin").html(data);
				}



			});
		}

		obtener_datos();



		$(document).on("blur","#nombre_usuario",function(){
			
				var id = $(this).data("id_usuario");
				var nombre = $(this).text();
			
			actualizar_datos(id,nombre,"nombre");

		});


		$(document).on("blur","#contrasena_usuario",function(){
			
				var id = $(this).data("id_contrasena");
				var contrasena = $(this).text();
		


			actualizar_datos(id,contrasena,"contrasena");

		});


		$(document).on("blur","#confirmacion_usuario",function(){
			
				var id = $(this).data("id_confirmacion");
				var confirmacion = $(this).text();
		


			actualizar_datos(id,confirmacion,"confirmacion");

		});

		$(document).on("blur","#indicio_usuario",function(){
			
				var id = $(this).data("id_indicio");
				var indicio = $(this).text();
		


			actualizar_datos(id,indicio,"indicio");

		});	

		$(document).on("blur","#rol_usuario",function(){
			
				var id = $(this).data("id_rol");
				var rol = $(this).text();
		


			actualizar_datos(id,rol,"rol");

		});	
		

		function actualizar_datos(id,texto,columna){

		$.ajax({

			url: "actualizar_admin.php",
			method: "POST",
			data: {id:id, texto:texto, columna:columna},
			success: function(data){

				obtener_datos();
			}



		});

		}


		$(document).on("click", "#salirpafuera", function(){

			$("#changeadmin").hide(500);
		});


	});

