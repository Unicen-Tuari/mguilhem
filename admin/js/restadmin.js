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

function borrarnoticia(id_noticia){
  console.log(id_noticia);
  $.ajax({
    method:   "DELETE",
    dataType: "HTML",
    url:      "api/noticia/"+id_noticia,
    data: {id_noticia: id_noticia}
  })
  .done(function() {
    alert("done");
  })
  .fail(function() {
    alert("fail");
  });
  
};

// guarda la CATEGORIA seleccionada en el dropdown
function cargarid($nombre){
  $('#dropdownMenu2').html($nombre+" <span class='caret'></span>");
  var texto = document.getElementById("idcategoria");
  texto.value = $nombre;
}

function borrarCategoria(categoria){
  $.ajax({
    method:   "DELETE",
    dataType: "HTML",
    url:      "api/categoria/"+categoria,
    data: {categoria:categoria}
  })
  .done(function() {
  alert("done");
})
  .fail(function() {
          alert("fail");
        });
}

function cambiarNombreCat(categoria){
  var newcat = '#'.concat(categoria);
  if ($(newcat).val() == ''){
    alert('Escribe un nuevo nombre para la categoria');
    return;
  }
  var nombre = $(newcat).val();
  $.ajax({
          method: "PUT",
          dataType: "HTML",
          url: "api/categoria/"+categoria+"/"+nombre,
          data: {categoria:categoria,nombre:nombre}
        })
        .done(function() {
          alert("done");
        })
        .fail(function() {
          alert("fail");
        });
}


$(document).ready(function(){
  //SUBMIT CATEGORIA
  $("#form-categoria").on("submit", function(event){
        event.preventDefault();
        
        if ($("#newcategoria").val() == ''){
        	alert('Poner el Nombre de la Nueva Categoría');
        	return;
        }
        
        else{
          var categoria = $("#newcategoria").val();
          $.ajax({
            method: "POST",
            dataType: "HTML",
            url: "api/categoria/"+categoria,
            data: {categoria:categoria}
          })
          .done(function() {
          alert("done");
        })
          .fail(function() {
          alert("fail");
        });
          $("#newcategoria").val("");
        }
	});
  
});