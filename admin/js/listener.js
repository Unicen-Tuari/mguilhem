function cambiarValorNot(id,sector,newinput){
  var input = '#'.concat(newinput);
  console.log(input);
  if ($(input).val() == ''){
    alert('Escribe un nuevo nombre para: '+sector);
    return;
  }
  var nombre = $(input).val();
  console.log(id);
  console.log(sector);
  console.log(nombre);
  $.ajax({
    method: "PUT",
    dataType: "HTML",
    url: "api/noticia/"+id+"/"+sector+"/"+nombre,
    data: {id: id, sector: sector, nombre: nombre}
  })
  .done(function() {
    var idinput="#".concat(sector).concat(id);
    $(idinput).html(nombre);
  })
  .fail(function() {
    alert("Error al cambiar la descripcion de la noticia");
  });
};

function MustacheNuevaNot(categoria,idcat){
    $.ajax({ 
    url: 'js/templates/noticia.mst',
    async:false,
    success: function(template) {
      var rendered = Mustache.render(template, categoria);
      var divnoticias = "#noticias".concat(idcat);
      $(divnoticias).append(rendered);
    }
  });
};

$(document).ready(function(){

  //logout
  $("#logout").click("submit", function(event){
      event.preventDefault();

      $.ajax({
        type: "POST",
        dataType: "HTML",
        url: event.target.action,
        data: {
              action: 'logout'
              },
        success: function(data){
          window.location.reload();
        },
        error: function(){
          alert("Error al Enviar el proceso");
        }
      });
      
   });

  //SUBMIT NOTICIA
  $("#form-noticia").on("submit", function(event){
      event.preventDefault();
      if ($("#imagesToUpload").val() ==''){
          alert('Seleccione imagen');
          return;
      }
      if ($("#idcategoria").val() ==''){
          alert('Seleccione Categoria');
          return;
      }
      if ($("#titulonew").val() ==''){
          alert('Escriba un título');
          return;
      }
      if ($("#descripcion").val() ==''){
          alert('escriba un texto en la noticia');
          return;
      }
      else{
        var img = $("#imagesToUpload").val();
        var idcat = $("#idcategoria").val();
        var titulo = $("#titulonew").val();
        var desc = $("#descripcion").val();
        
        
        $.ajax({
          method: "POST",
          dataType: "HTML",
          url: "api/noticia/"+img+"/"+idcat+"/"+titulo+"/"+desc,
          data: new FormData(this),
          contentType : false,
          processData : false
        })
        .done(function(idydire) {
          var obj= JSON.parse(idydire);
          var dimagen=obj.direimagen;
          var idnot=obj.idnot;
          var cate = {dimagen:dimagen, titulo:titulo,idcat: idcat, desc: desc,idnot:idnot};
          MustacheNuevaNot(cate,idcat);
        })
        .fail(function() {
          alert("fallo al crear la nueva noticia");
        });
      }
   });

});