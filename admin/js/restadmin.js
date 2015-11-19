function cargarweb(web){
  $.ajax({
      type:       "POST",
      dataType:   "html",
      url:        "index.php",
      data: {action: web},
      success: function(data){
          $("#contenedorweb").html(data);
      },
      error: function(){
          alert("Error al Cargar la Pagina de " + web);
      }
  })
};

function cargarid($nombre){
    $('#dropdownMenu2').html($nombre+"<span class='caret'></span>");
    var texto = document.getElementById("idcategoria");
    texto.value = $nombre;
}

function borrarnoticia(id_noticia,web){
  $.ajax({
      type:       "POST",
      dataType:   "html",
      url:        "index.php",
      data: {action: web, id_noticia: id_noticia},
      success: function(data){
          cargarweb('home_min');
      },
      error: function(){
          alert("Error");
      }
    })
};

// guarda la CATEGORIA seleccionada en el dropdown
function cargarid($nombre){
  $('#dropdownMenu2').html($nombre+" <span class='caret'></span>");
  var texto = document.getElementById("idcategoria");
  texto.value = $nombre;
}

$(document).ready(function(){
  //SUBMIT CATEGORIA
  $("#form-categoria").on("submit", function(event){
        event.preventDefault();
        
        if ($("#newcategoria").val() == ''){
        	alert('Poner el Nombre de la Categoría');
        	return;
        }        
        else{
	        $.ajax({
	          type: "POST",
	          dataType: "HTML",
	          url: event.target.action,
	          data: new FormData(this),
	          success: function(data){
                cargarweb('home_min');
	          },
	          error: function(){
	            alert("Error al crear categoria");
	          },
	          contentType : false,
	          processData : false
	        });
        }
	});
  
});