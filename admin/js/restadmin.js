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

function cargarnoticias(categoria,web){
$.ajax({
    type:       "POST",
    dataType:   "html",
    url:        "index.php",
    data: {action: web,dropdown : categoria},
    success: function(data){
        $("#contenedorweb").html(data);
    },
    error: function(){
        alert("Error al Cargar la Pagina de " + web);
    }
  })
};

/* guarda la CATEGORIA seleccionada en el dropdown */
function cargarid($nombre){
  $('#dropdownMenu2').html($nombre+"<span class='caret'></span>");
  var texto = document.getElementById("idcategoria");
  texto.value = $nombre;
}

function borrarnoticia(id_task,web){
$.ajax({
    type:       "POST",
    dataType:   "html",
    url:        "index.php",
    data: {action: web,id_task : id_task},
    success: function(data){
        cargarnoticias('todos','home_min')
    },
    error: function(){
        alert("Error");
    }
  })
};

/* guarda la CATEGORIA seleccionada en el dropdown */
function cargarid($id,$nombre){
  $('#dropdownMenu2').html($nombre+" <span class='caret'></span>");
  var texto = document.getElementById("idcategoria");
  texto.value = $id;
}

  //SUBMIT NOTICIA
	$("#form-noticia").on("submit", function(event){
        event.preventDefault();
        
        if ($("#imageToUpload").val() == ''){
        	alert('Seleccione Imagen');
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

  //SUBMIT CATEGORIA
  /*
	$("#form-categoria").on("submit", function(event){
        event.preventDefault();
        
        if ($("#imageToUpload").val() == ''){
        	alert('Seleccione Imagen');
        	return;
        }        
        else{
	        $.ajax({
	          type: "POST",
	          dataType: "HTML",
	          url: event.target.action,
	          data: new FormData(this),
	          success: function(data){
	            $('#huecoreply').html(data);
	          },
	          error: function(){
	            alert("Error al Enviar el proceso");
	          },
	          contentType : false,
	          processData : false
	        });
        }
	});
    */

