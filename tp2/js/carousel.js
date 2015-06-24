/*function slide-ej(tipo){
    $('#ejerc1').Attr("src","img/ejercicios/"+tipo"/1.jpg");
    $('#ejerc2').Attr("src","img/ejercicios/"+tipo"/2.jpg");
    $('#ejerc3').Attr("src","img/ejercicios/"+tipo"/3.jpg");
    $('#ejerc4').Attr("src","img/ejercicios/"+tipo"/4.jpg");
};

en html: onclick="slide-ej(tipo)"

*/

$(document).ready(function()
    { 
    $('#myCarousel').carousel({ interval: 3000, cycle: true }); 
    });

$('#abdomen').on({
    'click': function(){
        $('#ejerc1').attr('src','img/ejercicios/abdomen/1.jpg');
        $("#ejerc2").attr('src','img/ejercicios/abdomen/2.jpg');
        $("#ejerc3").attr('src','img/ejercicios/abdomen/3.jpg');
        $("#ejerc4").attr('src','img/ejercicios/abdomen/4.jpg');
        $(location).attr('href','#myCarousel');
    }
});

$('#antebrazos').on({
    'click': function(){
        $('#ejerc1').attr('src','img/ejercicios/antebrazo/1.jpg');
        $("#ejerc2").attr('src','img/ejercicios/antebrazo/2.jpg');
        $("#ejerc3").attr('src','img/ejercicios/antebrazo/3.jpg');
        $("#ejerc4").attr('src','img/ejercicios/antebrazo/4.jpg');
        $(location).attr('href','#myCarousel');
    }
});

$('#biceps').on({
    'click': function(){
        $('#ejerc1').attr('src','img/ejercicios/bicep/1.jpg');
        $("#ejerc2").attr('src','img/ejercicios/bicep/2.jpg');
        $("#ejerc3").attr('src','img/ejercicios/bicep/3.jpg');
        $("#ejerc4").attr('src','img/ejercicios/bicep/4.jpg');
        $(location).attr('href','#myCarousel');
    }
});

$('#espalda').on({
    'click': function(){
        $('#ejerc1').attr('src','img/ejercicios/espalda/1.jpg');
        $("#ejerc2").attr('src','img/ejercicios/espalda/2.jpg');
        $("#ejerc3").attr('src','img/ejercicios/espalda/3.jpg');
        $("#ejerc4").attr('src','img/ejercicios/espalda/4.jpg');
        $(location).attr('href','#myCarousel');
    }
});

$('#gluteos').on({
    'click': function(){
        $('#ejerc1').attr('src','img/ejercicios/gluteos/1.jpg');
        $("#ejerc2").attr('src','img/ejercicios/gluteos/2.jpg');
        $("#ejerc3").attr('src','img/ejercicios/gluteos/3.jpg');
        $("#ejerc4").attr('src','img/ejercicios/gluteos/4.jpg');
        $(location).attr('href','#myCarousel');
    }
});

$('#hombros').on({
    'click': function(){
        $('#ejerc1').attr('src','img/ejercicios/hombros/1.jpg');
        $("#ejerc2").attr('src','img/ejercicios/hombros/2.jpg');
        $("#ejerc3").attr('src','img/ejercicios/hombros/3.jpg');
        $("#ejerc4").attr('src','img/ejercicios/hombros/4.jpg');
        $(location).attr('href','#myCarousel');
    }
});

$('#pecho').on({
    'click': function(){
        $('#ejerc1').attr('src','img/ejercicios/pecho/1.jpg');
        $("#ejerc2").attr('src','img/ejercicios/pecho/2.jpg');
        $("#ejerc3").attr('src','img/ejercicios/pecho/3.jpg');
        $("#ejerc4").attr('src','img/ejercicios/pecho/4.jpg');
        $(location).attr('href','#myCarousel');
    }
});


$('#pierna').on({
    'click': function(){
        $('#ejerc1').attr('src','img/ejercicios/pierna/1.jpg');
        $("#ejerc2").attr('src','img/ejercicios/pierna/2.jpg');
        $("#ejerc3").attr('src','img/ejercicios/pierna/3.jpg');
        $("#ejerc4").attr('src','img/ejercicios/pierna/4.jpg');
        $(location).attr('href','#myCarousel');
    }
});

$('#tricep').on({
    'click': function(){
        $('#ejerc1').attr('src','img/ejercicios/tricep/1.jpg');
        $("#ejerc2").attr('src','img/ejercicios/tricep/2.jpg');
        $("#ejerc3").attr('src','img/ejercicios/tricep/3.jpg');
        $("#ejerc4").attr('src','img/ejercicios/tricep/4.jpg');
        $(location).attr('href','#myCarousel');
    }
});



