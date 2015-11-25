/*function cargarweb(web){
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
MVC
*/ 

function cargarid(idcat,nombre){
  $('#dropdownMenu2').html(nombre+" <span class='caret'></span>");
  var texto = document.getElementById("idcategoria");
  texto.value = idcat;
}// guarda la CATEGORIA seleccionada en el dropdown

function borrarCategoria(id_cat){
  var catborrada = '#categoria'.concat(id_cat);
  var catborradadrop = '#dropdown'.concat(id_cat);
  $.ajax({
    method:   "DELETE",
    dataType: "HTML",
    url:      "api/categoria/"+id_cat,
    data: {categoria:id_cat}
  })
  .done(function() {
    $(catborrada).remove();
    $(catborradadrop).remove();
  })
  .fail(function() {
    alert("Error al borrar categoria");
  });
}

function cambiarNombreCat(categoria){
  var newcat= "#cata".concat(categoria);
  if ($(newcat).val() == ''){
    alert('Escribe un nuevo nombre para la categoria');
    return;
  }
  catnombre="#cata".concat(categoria);
  var nombre = $(catnombre).val();
  $.ajax({
    method: "PUT",
    dataType: "HTML",
    url: "api/categoria/"+categoria+"/"+nombre,
    data: {categoria:categoria,nombre:nombre}
  })
  .done(function() {
    var idcate ='#cat'.concat(categoria);
    var idcatea ='#cata'.concat(categoria);
    $(idcate).html(nombre);
    $(idcatea).attr("placeholder",nombre);
    $('#dropdown'+categoria).html(nombre);
    $('#dropdown'+categoria).attr('onclick',"cargarid('"+categoria+"','"+nombre+"')");
  })
  .fail(function() {
    alert("Error en cambiar el nombre a la categoria");
  });
}

function MustacheNuevaCategoria(categoria) {
  $.ajax({ 
    url: 'js/templates/categoria.mst',
    async:false,
    success: function(template) {
      var rendered = Mustache.render(template, categoria);
      $('#categorias').append(rendered);
    }
  });
}

function MustacheNuevaCategoriaDrop(categoria) {
  $.ajax({ 
    url: 'js/templates/categoriadrop.mst',
    async:false,
    success: function(template) {
      var rendered = Mustache.render(template, categoria);
      $('#catedrop').append(rendered);
    }
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
          .done(function(idCategoria) {
            var idCat=idCategoria.substring(1,idCategoria.length-1);//les saco las comillas
            var cate = {id_categoria:idCat, nombre:categoria};
            MustacheNuevaCategoria(cate);
            MustacheNuevaCategoriaDrop(cate);
          })
          .fail(function() {
            alert("error al cargar la nueva categoria");
          });
          $("#newcategoria").val("");
        }
	});
  
});