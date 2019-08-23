$(document).ready(function(){

	var state = false;
 
 	$("#perfil").click(function(){
		
		 if(!state){

		 	$("#adduser").show();
		 	state=true;
		 }else{
		 	$("#adduser").hide();
		 	state =false;
		 }		   
	});

 		$("#info").click(function(){
      	 $("#modal").hide(500);
      	 $("#adduser").hide();
		 $("#tableperfil").show();
		 state = false;  // hace que no de doble clic para abrir el modal(info)
	
	});


 		$("#CrearUsuario").click(function(){
      	 $("#modal").hide(500);
      	 $("#adduser").hide();
		 $("#agregarusuario").show();
		 state = false;
				   
	
	});

		 $("#usuarioschange").click(function(){
      	 $("#modal").hide(500);
      	 $("#adduser").hide();
		 $("#changeadmin").show();
		 state = false;
				   
	
	});
		 $("#buttonsC").click(function(){
		 $("#agregarusuario").hide();				   
	
	});

	
		$("#x").click(function(){
      	 $("#calc").hide();
		
	});
	
		$("#min").click(function(){
      	 $("#tableperfil").hide();
		
	});
	

	
});
