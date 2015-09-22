function cargarweb(web){
$.ajax({
    type: "GET",
    dataType: "html",
    url: web,
    success: function(data){
        $("#contenedorweb").html(data);
    },
    error: function(){
        alert("error");
    }
		
})
};

function getInformationByGroup(grupo){
  $.ajax({
     type: "GET",
     dataType: 'JSON',
     url: "http://web-unicen.herokuapp.com/api/group/" + grupo,
     success: function(data){
         
         var html = "";
      
         var alimento ="";
         var calorias = "";
         var proteinas = "";
         var lipidos = "";
         var hcarbono = "";
         
         for (var i = 0; i < data.information.length;i++) 
         {
             alimento = data.information[i]['thing'][0];
             calorias = data.information[i]['thing'][1];
			 proteinas = data.information[i]['thing'][2];
			 lipidos = data.information[i]['thing'][3];
			 hcarbono = data.information[i]['thing'][4];
             html += "<tr><th>" + alimento + "</th><th>" + calorias + "</th><th>" + proteinas + "</th><th>" + lipidos + "</th><th>" + hcarbono + "</th></tr>";
         }
       $("#infoGroup").html(html);
     }
  })
};


function guardarInformacion(){
    
    var alimento = $("#alimento").val();
    var calorias = $("#calorias").val();
    var proteinas = $("#proteinas").val();
    var lipidos = $("#lipidos").val();
    var hcarbono = $("#hcarbono").val();
    
    var informacion = [alimento, calorias,proteinas,lipidos,hcarbono];
    var grupo = 28; //grupo asignado en REST
    var info = {
        "group": grupo,
        "thing": informacion
    };

    if (alimento && calorias && proteinas && lipidos && hcarbono){
        $.ajax({
		type: "POST",
		dataType: 'JSON',
		data: JSON.stringify(info),
		contentType: "application/json; charset=utf-8",
		url: "http://web-unicen.herokuapp.com/api/create",
        success: function(data){
            alert('Se agrego correctamente');
            },
        error:function(data){
		alert('No se pudo comunicar con el servidor');
            }
		});
    }
    else {alert('Faltan datos');}
}