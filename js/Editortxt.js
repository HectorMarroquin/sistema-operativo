$(document).ready(function() {

	$("#enviar").click(function(event) {
		alert("hola");
		let texto = $("#textBox").html();

		let nombre = $("#nombre").val();

		console.log("nombre", nombre);

		console.log("texto", texto);

	    var params = {
	    	"nombre" : nombre,
	    	"texto" : texto
	    };

	    
	    $.ajax({
	    	data:  params,
	    	url:   'guardarArchivo.php',
	    	dataType: 'html',
	    	type:  'post',
	    	success:  function (response) {
	            console.log(response);
	          }
	    });
	});

		$("#buscarTxt").keyup(function(event) {
		let buscar = $("#buscarTxt").val();
		console.log("buscar", buscar);

	    var params = {
	    	"buscar" : buscar
	    };

	    $.ajax({
	    	data:  params,
	    	url:   'buscararchivos.php', //se indica la ruta donde esta el archivo que buscara los demas archivos
	    	dataType: 'html',
	    	type:  'post',
	    	success:  function (response) {
	            console.log(response);
	            $("#txtHint").html(response);
	          }
	    });
	});


		$(document).on('click', 'input[type="submit"]', function(event) {
		let id = this.id;
		console.log("se presiono el boton con la id: " + id );

		$("#nombre").val(id);

	    
	    var params = {
	    	"texto" : id
	    };


	    $.ajax({
	    	data:  params,
	    	url:   'mostrararchivo.php',
	    	dataType: 'html',
	    	type:  'post',
	    	success:  function (response) {

	            $("#textBox").html(response);

	        }
	    });
});


		$(document).on("blur","#eliminararchivo",function(){
		let buscar = $("#eliminararchivo").val();
		console.log("eliminararchivo", buscar);

	    var params = {
	    	"eliminararchivo" : buscar
	    };

	    $.ajax({
	    	data:  params,
	    	url:   'borrarArchivo.php', //se indica la ruta donde esta el archivo que buscara los demas archivos
	    	dataType: 'html',
	    	type:  'post',
	    	success:  function (response) {
	            console.log(response);
	            $("#txtHint").html(response);
	          }
	    });
	});


});
