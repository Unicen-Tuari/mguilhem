$(document).ready(function(){

  //Access Event
  $("#form-login").on("submit", function(event){
      event.preventDefault();

      if ($("#txtEmail").val() ==''){
          alert('Complete Email');
          return;
      }
      if ($("#txtPassword").val() ==''){
          alert('Seleccione Categoria');
          return;
      }
      else{
        $.ajax({
          type: "POST",
          dataType: "HTML",
          url: event.target.action,
          data: new FormData(this),
          success: function(data){
            $("#html").html(data);
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