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
          $("#html").html(data);
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
        $.ajax({
          type: "POST",
          dataType: "HTML",
          url: event.target.action,
          data: new FormData(this),
          success: function(data){
            cargarweb('home_min');
          },
          error: function(){
            alert("Error al Enviar el proceso");
          },
          contentType : false,
          processData : false
        });
      }
   });

});