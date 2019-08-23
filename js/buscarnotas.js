$(document).ready(function() {
      $("#resultadoBusqueda").html('<p>Sin resultados</p>');
  });

  function buscar() {

    var div = document.getElementById("buscador");
    div.style.display = 'block';
    
      var textoBusqueda = $("input#buscar").val();
       if (textoBusqueda != "") {
          $.post("buscar.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
              $("#resultadoBusqueda").html(mensaje);
     
           }); 
       } else { 
          $("#resultadoBusqueda").html('<p>Sin resultados</p>');

           var div = document.getElementById("buscador");
           div.style.display = 'none'; 

          };

  };