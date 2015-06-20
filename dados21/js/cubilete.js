$(".col-md-5").hide();
$("div .col-md-2 .verdados").css('visibility','hidden');
var gamer;

Dado.prototype.tirar= function(){
    this.valor= Math.floor(Math.random()*6)+1;
    document.getElementById(this.idHTML).src = "images/dado"+this.valor+".png"; 
}

function tepasaste(contador1){
    if (contador1>21){
        document.getElementById('audio-dados').pause();
        document.getElementById('audio-cuac').play();
        alert("Te Pasaste Soquete!!!");
        terminar();
    }
}

function imprimir(contador1,player){
    if (player=="jug1"){var resultado=document.getElementById("puntos");}
    else {var resultado=document.getElementById("puntos2");}
    resultado.innerHTML = contador1;
    tepasaste(contador1);
}

function Dado(idDado){
    this.valor=1;
    this.idHTML=idDado;
}

function Cubilete(){
    this.dado1=new Dado("dado1");
    this.dado2=new Dado("dado2");
    this.tirar=function(){
        this.dado1.tirar();
        this.dado2.tirar();
        }
    this.suma = function(){
        return this.dado1.valor + this.dado2.valor;
        }
}

function jugador(idjugador){
    this.idHTML=idjugador;
    this.puntos=0;
    this.ronda=0;
}

function Jugador(){
    this.jug1=new jugador("jugador1");
    this.jug2=new jugador("jugador2");
    this.actualizarpuntos=function(sumadados,player){
        if (player=="jug1"){
            this.jug1.puntos+=sumadados;
            return this.jug1.puntos;}
        else {
            this.jug2.puntos+=sumadados;
            return this.jug2.puntos;
        }    
    }
}

function juega1(){
    var player="jug1";
    lanzarDados(player);
}

function juega2(){
    var player="jug2";
    lanzarDados(player);
}

function turno2(){
    $("div .col-md-5 .p-der").css('visibility','visible');
    $("div .col-md-5 .p-izq").css('visibility','hidden');
    $("h1.izq").css('box-shadow', 'none');
    $("h1.der").css('box-shadow', '0px 0px 40px 10px rgba(255,255,255,0.5)');
}

function lanzarDados(player){
    document.getElementById('audio-dados').play();
    var cubilete=new Cubilete();
    cubilete.tirar();
    imprimir(gamer.actualizarpuntos(cubilete.suma(),player),player);
}

function terminar(){
    document.getElementById('audio-ganador').play();
    $("div .col-md-5 .p-der").css('visibility','hidden');
    $("div .col-md-5 .p-izq").css('visibility','hidden');
    if (gamer.jug1.puntos>21){
        $("h1.izq").css('box-shadow', 'none');
        $("h1.der").css('box-shadow', '0px 0px 40px 10px rgba(255,255,0,0.9)');
        alert("jugador 2 GANA!!!");
    }
    else if (gamer.jug2.puntos>21){
        $("h1.der").css('box-shadow', 'none');
        $("h1.izq").css('box-shadow', '0px 0px 40px 10px rgba(255,255,0,0.9');
        alert("jugador 1 GANA!!!");
    }
    else if (gamer.jug1.puntos>gamer.jug2.puntos){
        $("h1.der").css('box-shadow', 'none');
        $("h1.izq").css('box-shadow', '0px 0px 40px 10px rgba(255,255,0,0.9)');
        alert("jugador 1 GANA!!!");
    }
    else if (gamer.jug2.puntos>gamer.jug1.puntos){
        $("h1.der").css('box-shadow', '0px 0px 40px 10px rgba(255,255,0,0.9)');
        alert("jugador 2 GANA!!!");
    }
    else {
        $("h1").css('box-shadow', '0px 0px 40px 10px rgba(255,255,0,0.9)');
        alert("EMPATE!!!");
    }
}
function empezar(){
    $("#comenzar").hide();
    $(".col-md-5").show();
    $("div .col-md-5 .p-der").css('visibility','hidden');
    $("div .col-md-2 .verdados").css('visibility','visible');
    gamer=new Jugador()
}

