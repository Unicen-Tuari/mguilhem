function cargarweb(web){
$.ajax({
    type:       "GET",
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
    type:       "GET",
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


