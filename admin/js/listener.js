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
      if ($("#titulo").val() ==''){
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
        var titulo = $("#titulo").val();
        var desc = $("#descripcion").val();
        
        $.ajax({
          method: "POST",
          dataType: "HTML",
          url: "api/noticia/"+img+"/"+idcat+"/"+titulo+"/"+desc,
          data: new FormData(this),
          contentType : false,
          processData : false
        })
        .done(function() {
          alert("done");
        })
        .fail(function() {
          alert("fail");
        });
      }
   });

});