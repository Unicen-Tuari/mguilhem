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

/*
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
*/

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
        cargarweb('home_min');
    },
    error: function(){
        alert("Error");
    }
  })
};

/* guarda la CATEGORIA seleccionada en el dropdown */
function cargarid($nombre){
  $('#dropdownMenu2').html($nombre+" <span class='caret'></span>");
  var texto = document.getElementById("idcategoria");
  texto.value = $nombre;
}

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
        if ($("#task").val() ==''){
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

  //SUBMIT CATEGORIA
  
	$("#form-categoria").on("submit", function(event){
        event.preventDefault();
        
        if ($("#newcategoria").val() == ''){
        	alert('Poner el Nombre de la Categoría');
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
	            alert("Error al crear categoria");
	          },
	          contentType : false,
	          processData : false
	        });
        }
	});
    

