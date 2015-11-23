$(document).ready(function(){

  //Access Event
  $("#form-login").on("submit", function(event){
      event.preventDefault();

      if ($("#txtEmail").val() ==''){
          alert('Complete el Email');
          return;
      }
      if ($("#txtPassword").val() ==''){
          alert('Complete el Password');
          return;
      }
      else{
        var Password = (CryptoJS.MD5($("#txtPassword").val())).toString();
        var txtEmail = $('#txtEmail').val();
        $.ajax({
          type: "POST",
          dataType: "HTML",
          url: event.target.action,
          data: {
				action: 'login',
				txtEmail: txtEmail,
				txtPassword: Password
                },
          success: function(data){
            $("#html").html(data);
          },
          error: function(){
            alert("Error al Enviar el proceso");
          }
        });
      }
   });

});