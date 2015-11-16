//$(document).ready(function(){
  function llamarmodel(categoria,titulo,imagen,text){
      var html = "";
      html = "<div class='modal-content' ><div class='modal-header'> <button type='button' class='close' data-dismiss='modal'>&times;</button>"+categoria+"    <h3 class='modal-title'>"+titulo+"</h3>    </div>    <div class='modal-body'><img class='imgmodel' src='"+imagen+"'/>    <p>"+text+"</p>    </div>    <div class='modal-footer'>    <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>    </div>       </div>";
      document.getElementById('model').innerHTML = html;
  }
//});