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
         
       for (var i = 0; i < data.information.length;i--) 
       {
            html += "<tr>";
            for (var j = 0; j < 5; j++) 
            {
            
            html += "<th>" + data.information[i]['thing'] + "</th>";
            i++;
            }
            i++;
            html += "</tr>";
       }
       $("#infoGroup").html(html);
     }
  })
};
