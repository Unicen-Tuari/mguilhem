$(document).ready(function(){
  $("#consulta").on("submit", function(event){
      event.preventDefault();

      if ($("#mensajea").val() ==''){
          alert('mensaje vacio');
          return;
      }
      if ($("#nombremail").val() ==''){
          alert('Complete el nombre');
          return;
      }
      if ($("#mailfrom").val() ==''){
          alert('Escriba su Email');
          return;
      }
    else{
      
      $("#submitmail").addClass("invisible");
      $("#loading").html('<i class="fa fa-cog fa-spin fa-5x"></i>');
      
      $.ajax({
        type: "POST",
        dataType: "HTML",
        url: event.target.action,
        data: new FormData(this),
        success: function(data){
          $("#contact").html(data);
        },
        error: function(){
          alert("Error al Enviar el mail");
        },
        contentType : false,
        processData : false
      });
    }
	
  });
});