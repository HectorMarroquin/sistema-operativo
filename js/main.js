$(document).ready(function(){

	var state= false;
 	$(".icon").click(function(){
		 if(!state){
        $("#modal").fadeIn(400);
        $("#adduser").hide();
	    state=true;
		 }else{
			 $("#modal").fadeOut(300);
			  $("#adduser").hide();
			 state=false;
		 }
		
				   
	
	});

 	$("#calcu").dblclick(function(){
      	 $("#modal").hide(500);
		 state=false;
		 $("#calc").show();
				   
	
	});

	$(".blocs").dblclick(function(){
      	 $("#modal").hide(500);
		 state=false;
		 $("#editordetexto").show();
				   
	
	});
	
	
	$(function() {
    $( ".calcu" ).draggable();
 	$( ".images" ).draggable();
	$( "#calc" ).draggable();
	$( "#div" ).draggable();
	$( ".blocs" ).draggable();
	});

	
});

var notaNueva = "<div class='nota'>"
+"<img class='mas' onclick='nuevaNota()' src='icon/mas.png'>"
+"<img class='basura' src='icon/basura.png'>"
+'<form action="notas.php" method="POST">'
+'<select class="selectpicker" required name="Tipo">'
+'<option>Guardar</option>'
+'<option>Editar</option>'
+'<option>Eliminar</option>'
+'</select><input type="submit" value="Aceptar" id="send">'
+'<textarea class="NombNota" placeholder="Nombre de la nota" name="NombreDeNotas" style="height:18px;"></textarea>'
+ 	'<div class="note_cnt">'
+"<textarea class='cnt' id='tarea' name='textoDeNotas'></textarea>"
+	'</div> '
+'<textarea class="miIDN" name="idNota" style="visibility:hidden;"></textarea>'
+'</form>'
+"</div>";

function borrarNota(){
    $(this).parent('.nota').hide(500);
	
};


function nuevaNota() {
  	$(notaNueva).hide().appendTo("#divNotas").show("fade", 300).draggable();
	$("#modal").hide(500);
	 state=false;
	
	$('.basura').click(borrarNota);
};























