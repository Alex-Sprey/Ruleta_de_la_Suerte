<?php 
include('header.php');
?>

<link rel="stylesheet" href="css.css">

<style> 
.form-group {
	outline: none;
	padding: 20px;
	display: block;
	width: 270px;
	border-radius: 3px; 
	border: 1px solid #eee;
	margin: 20px auto;
}

.button-group {
	outline: none;
	padding: 20px;
	display: block;
	width: 270px;
	margin: 20px auto;
}	

#rule {
  border-radius: 25px;
  padding: 1.5%;
  width: 80%;
  height: 20%;
  
margin: auto !important;

text-align: center !important;
}

.player-border {
    border-color: red blue yellow green;
  border-width: 0.5px;
  border-style: inset;
}
</style> 

<title>Ruleta de la suerte</title>

<?php include('contenedor.php');?>

<div class="container">
	<br>
	<table class="table align-items-center gradient-border" id="tabla">

	<tr>

	<td class="bordevacio"><h1 style="text-align: center;">&nbsp;</h1></td>
	<td class="borde imagen" style="background: white;"><div class="card-grid" style="perspective: 125.925px; position: relative; transform-style: preserve-3d;"><div class="front" name="L" style="backface-visibility: hidden; transform-style: preserve-3d; position: absolute; z-index: 0; height: 100%; width: 100%; transition: all 0.5s ease-out 0s; transform: rotateY(180deg);"></div><div class="back" style="backface-visibility: hidden; transform-style: preserve-3d; position: relative; z-index: 1; height: 100%; width: 100%; transform: rotateY(0deg); transition: all 0.5s ease-out 0s;"><h1 style="text-align: center; backface-visibility: hidden;">L</h1></div></div></td>

	<td class="borde imagen" style="background: white;"><div class="card-grid" style="perspective: 125.925px; position: relative; transform-style: preserve-3d;"><div class="front" name="A" style="backface-visibility: hidden; transform-style: preserve-3d; position: absolute; z-index: 0; height: 100%; width: 100%; transition: all 0.5s ease-out 0s; transform: rotateY(180deg);"></div><div class="back" style="backface-visibility: hidden; transform-style: preserve-3d; position: relative; z-index: 1; height: 100%; width: 100%; transform: rotateY(0deg); transition: all 0.5s ease-out 0s;"><h1 style="text-align: center; backface-visibility: hidden;">A</h1></div></div></td>

	<td class="bordevacio"><h1 style="text-align: center;">&nbsp;</h1></td>

	<td class="borde imagen" style="background: white;"><div class="card-grid" style="perspective: 125.925px; position: relative; transform-style: preserve-3d;"><div class="front" name="R" style="backface-visibility: hidden; transform-style: preserve-3d; position: absolute; z-index: 0; height: 100%; width: 100%; transition: all 0.5s ease-out 0s; transform: rotateY(180deg);"></div><div class="back" style="backface-visibility: hidden; transform-style: preserve-3d; position: relative; z-index: 1; height: 100%; width: 100%; transform: rotateY(0deg); transition: all 0.5s ease-out 0s;"><h1 style="text-align: center; backface-visibility: hidden;">R</h1></div></div></td>

	<td class="borde imagen" style="background: white;"><div class="card-grid" style="perspective: 125.925px; position: relative; transform-style: preserve-3d;"><div class="front" name="U" style="backface-visibility: hidden; transform-style: preserve-3d; position: absolute; z-index: 0; height: 100%; width: 100%; transition: all 0.5s ease-out 0s; transform: rotateY(180deg);"></div><div class="back" style="backface-visibility: hidden; transform-style: preserve-3d; position: relative; z-index: 1; height: 100%; width: 100%; transform: rotateY(0deg); transition: all 0.5s ease-out 0s;"><h1 style="text-align: center; backface-visibility: hidden;">U</h1></div></div></td>

	<td class="borde imagen" style="background: white;"><div class="card-grid" style="perspective: 125.925px; position: relative; transform-style: preserve-3d;"><div class="front" name="L" style="backface-visibility: hidden; transform-style: preserve-3d; position: absolute; z-index: 0; height: 100%; width: 100%; transition: all 0.5s ease-out 0s; transform: rotateY(180deg);"></div><div class="back" style="backface-visibility: hidden; transform-style: preserve-3d; position: relative; z-index: 1; height: 100%; width: 100%; transform: rotateY(0deg); transition: all 0.5s ease-out 0s;"><h1 style="text-align: center; backface-visibility: hidden;">L</h1></div></div></td>

	<td class="borde imagen" style="background: white;"><div class="card-grid" style="perspective: 125.925px; position: relative; transform-style: preserve-3d;"><div class="front" name="E" style="backface-visibility: hidden; transform-style: preserve-3d; position: absolute; z-index: 0; height: 100%; width: 100%; transition: all 0.5s ease-out 0s; transform: rotateY(180deg);"></div><div class="back" style="backface-visibility: hidden; transform-style: preserve-3d; position: relative; z-index: 1; height: 100%; width: 100%; transform: rotateY(0deg); transition: all 0.5s ease-out 0s;"><h1 style="text-align: center; backface-visibility: hidden;">E</h1></div></div></td>

	<td class="borde imagen" style="background: white;"><div class="card-grid" style="perspective: 125.925px; position: relative; transform-style: preserve-3d;"><div class="front" name="T" style="backface-visibility: hidden; transform-style: preserve-3d; position: absolute; z-index: 0; height: 100%; width: 100%; transition: all 0.5s ease-out 0s; transform: rotateY(180deg);"></div><div class="back" style="backface-visibility: hidden; transform-style: preserve-3d; position: relative; z-index: 1; height: 100%; width: 100%; transform: rotateY(0deg); transition: all 0.5s ease-out 0s;"><h1 style="text-align: center; backface-visibility: hidden;">T</h1></div></div></td>

	<td class="borde imagen" style="background: white;"><div class="card-grid" style="perspective: 125.925px; position: relative; transform-style: preserve-3d;"><div class="front" name="A" style="backface-visibility: hidden; transform-style: preserve-3d; position: absolute; z-index: 0; height: 100%; width: 100%; transition: all 0.5s ease-out 0s; transform: rotateY(180deg);"></div><div class="back" style="backface-visibility: hidden; transform-style: preserve-3d; position: relative; z-index: 1; height: 100%; width: 100%; transform: rotateY(0deg); transition: all 0.5s ease-out 0s;"><h1 style="text-align: center; backface-visibility: hidden;">A</h1></div></div></td>

	<td class="bordevacio"><h1 style="text-align: center;">&nbsp;</h1></td>

	<td class="borde imagen" style="background: white;"><div class="card-grid" style="perspective: 125.925px; position: relative; transform-style: preserve-3d;"><div class="front" name="D" style="backface-visibility: hidden; transform-style: preserve-3d; position: absolute; z-index: 0; height: 100%; width: 100%; transition: all 0.5s ease-out 0s; transform: rotateY(180deg);"></div><div class="back" style="backface-visibility: hidden; transform-style: preserve-3d; position: relative; z-index: 1; height: 100%; width: 100%; transform: rotateY(0deg); transition: all 0.5s ease-out 0s;"><h1 style="text-align: center; backface-visibility: hidden;">D</h1></div></div></td>

	<td class="borde imagen" style="background: white;"><div class="card-grid" style="perspective: 125.925px; position: relative; transform-style: preserve-3d;"><div class="front" name="E" style="backface-visibility: hidden; transform-style: preserve-3d; position: absolute; z-index: 0; height: 100%; width: 100%; transition: all 0.5s ease-out 0s; transform: rotateY(180deg);"></div><div class="back" style="backface-visibility: hidden; transform-style: preserve-3d; position: relative; z-index: 1; height: 100%; width: 100%; transform: rotateY(0deg); transition: all 0.5s ease-out 0s;"><h1 style="text-align: center; backface-visibility: hidden;">E</h1></div></div></td>

	<td class="bordevacio"><h1 style="text-align: center;">&nbsp;</h1></td>

	</tr>

	<tr>
	<td class="bordevacio"><h1 style="text-align: center;">&nbsp;</h1></td><td class="bordevacio"><h1 style="text-align: center;">&nbsp;</h1></td>

	<td class="borde imagen" style="background: white;"><div class="card-grid" style="perspective: 125.925px; position: relative; transform-style: preserve-3d;"><div class="front" name="L" style="backface-visibility: hidden; transform-style: preserve-3d; position: absolute; z-index: 0; height: 100%; width: 100%; transition: all 0.5s ease-out 0s; transform: rotateY(180deg);"></div><div class="back" style="backface-visibility: hidden; transform-style: preserve-3d; position: relative; z-index: 1; height: 100%; width: 100%; transform: rotateY(0deg); transition: all 0.5s ease-out 0s;"><h1 style="text-align: center; backface-visibility: hidden;">L</h1></div></div></td>

	<td class="borde imagen" style="background: white;"><div class="card-grid" style="perspective: 125.925px; position: relative; transform-style: preserve-3d;"><div class="front" name="A" style="backface-visibility: hidden; transform-style: preserve-3d; position: absolute; z-index: 0; height: 100%; width: 100%; transition: all 0.5s ease-out 0s; transform: rotateY(180deg);"></div><div class="back" style="backface-visibility: hidden; transform-style: preserve-3d; position: relative; z-index: 1; height: 100%; width: 100%; transform: rotateY(0deg); transition: all 0.5s ease-out 0s;"><h1 style="text-align: center; backface-visibility: hidden;">A</h1></div></div></td>

	<td class="bordevacio"><h1 style="text-align: center;">&nbsp;</h1></td>

	<td class="borde imagen" style="background: white;"><div class="card-grid" style="perspective: 125.925px; position: relative; transform-style: preserve-3d;"><div class="front" name="S" style="backface-visibility: hidden; transform-style: preserve-3d; position: absolute; z-index: 0; height: 100%; width: 100%; transition: all 0.5s ease-out 0s; transform: rotateY(180deg);"></div><div class="back" style="backface-visibility: hidden; transform-style: preserve-3d; position: relative; z-index: 1; height: 100%; width: 100%; transform: rotateY(0deg); transition: all 0.5s ease-out 0s;"><h1 style="text-align: center; backface-visibility: hidden;">S</h1></div></div></td>

	<td class="borde imagen" style="background: white;"><div class="card-grid" style="perspective: 125.925px; position: relative; transform-style: preserve-3d;"><div class="front" name="U" style="backface-visibility: hidden; transform-style: preserve-3d; position: absolute; z-index: 0; height: 100%; width: 100%; transition: all 0.5s ease-out 0s; transform: rotateY(180deg);"></div><div class="back" style="backface-visibility: hidden; transform-style: preserve-3d; position: relative; z-index: 1; height: 100%; width: 100%; transform: rotateY(0deg); transition: all 0.5s ease-out 0s;"><h1 style="text-align: center; backface-visibility: hidden;">U</h1></div></div></td>

	<td class="borde imagen" style="background: white;"><div class="card-grid" style="perspective: 125.925px; position: relative; transform-style: preserve-3d;"><div class="front" name="E" style="backface-visibility: hidden; transform-style: preserve-3d; position: absolute; z-index: 0; height: 100%; width: 100%; transition: all 0.5s ease-out 0s; transform: rotateY(180deg);"></div><div class="back" style="backface-visibility: hidden; transform-style: preserve-3d; position: relative; z-index: 1; height: 100%; width: 100%; transform: rotateY(0deg); transition: all 0.5s ease-out 0s;"><h1 style="text-align: center; backface-visibility: hidden;">E</h1></div></div></td>

	<td class="borde imagen" style="background: white;"><div class="card-grid" style="perspective: 125.925px; position: relative; transform-style: preserve-3d;"><div class="front" name="R" style="backface-visibility: hidden; transform-style: preserve-3d; position: absolute; z-index: 0; height: 100%; width: 100%; transition: all 0.5s ease-out 0s; transform: rotateY(180deg);"></div><div class="back" style="backface-visibility: hidden; transform-style: preserve-3d; position: relative; z-index: 1; height: 100%; width: 100%; transform: rotateY(0deg); transition: all 0.5s ease-out 0s;"><h1 style="text-align: center; backface-visibility: hidden;">R</h1></div></div></td>

	<td class="borde imagen" style="background: white;"><div class="card-grid" style="perspective: 125.925px; position: relative; transform-style: preserve-3d;"><div class="front" name="T" style="backface-visibility: hidden; transform-style: preserve-3d; position: absolute; z-index: 0; height: 100%; width: 100%; transition: all 0.5s ease-out 0s; transform: rotateY(180deg);"></div><div class="back" style="backface-visibility: hidden; transform-style: preserve-3d; position: relative; z-index: 1; height: 100%; width: 100%; transform: rotateY(0deg); transition: all 0.5s ease-out 0s;"><h1 style="text-align: center; backface-visibility: hidden;">T</h1></div></div></td>

	<td class="borde imagen" style="background: white;"><div class="card-grid" style="perspective: 125.925px; position: relative; transform-style: preserve-3d;"><div class="front" name="E" style="backface-visibility: hidden; transform-style: preserve-3d; position: absolute; z-index: 0; height: 100%; width: 100%; transition: all 0.5s ease-out 0s; transform: rotateY(180deg);"></div><div class="back" style="backface-visibility: hidden; transform-style: preserve-3d; position: relative; z-index: 1; height: 100%; width: 100%; transform: rotateY(0deg); transition: all 0.5s ease-out 0s;"><h1 style="text-align: center; backface-visibility: hidden;">E</h1></div></div></td>

	<td class="bordevacio"><h1 style="text-align: center;">&nbsp;</h1></td>
	<td class="bordevacio"><h1 style="text-align: center;">&nbsp;</h1></td>
	<td class="bordevacio"><h1 style="text-align: center;">&nbsp;</h1></td>

	</tr>
	</table>

	<div class="row mb-5"></div>
	<div class="col-md-12"></div>
	<div  id="rcorners"><h3><b style="color:white">Ruleta de la Suerte</b></h3></div>
	
	<br>
	<div id="jugadores"></div>
	<div class="form-group col-md-3">
		<label class="form-label">Letra</label>
		<input type="text" id="letra" placeholder="Introduzca letra">
	</div>

	<div class="button-group col-md-1">
		<input type="button" id="letrar" value="Comprobar">
	</div>
			
	<div class="form-group col-md-3">
		<label class="form-label">Resolver</label>
		<input type="text" id="respuesta" placeholder="Introduzca respuesta">
	</div>

	<div class="button-group col-md-1">
		<input type="button" id="respuestar" value="Comprobar">
	</div>
	</div>

	<div class="row oculto" id="rowfallos">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title"><h2 class="my-6"> Letras Falladas</h2></h3>
					<br>
				</div>
				<div class="card-body "   >
					<div class="row" id="falladas">
																
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row oculto" id="rowhist">
		<div class="col-12">
			<div class="card "    >
				<div class="card-header">
					<h3 class="card-title"><h2 class="my-6"> Histórico</h2></h3>
					<br>	
				</div>
				<div class="card-body "   >
					<div class="row" id="hist">
					</div>
				</div>
			</div>	
		</div>
	</div>
	
	<div>
		
	<input type="hidden" id="players" value="0">
	<input type="hidden" id="hidusu" value="1">
	<input type="hidden" id="puntos" >
	<input type="hidden" id="hidpal" >
	<input type="hidden" id="hidaci" >
	<input type="hidden" id="hidfal" >
	<input type="hidden" id="ckpuntos" value="0">
	<input type="hidden" id="ckpalabra" value="">
	<input type="hidden" id="ckjg" value="0">
	<input type="hidden" id="ckpista" value="">
	<input type="hidden" id="ckletra" value="0">
	<input type="hidden" id="ckhist" value="0">
	<input type="hidden" id="ckfallos" value="0">

	</div>


<div id="rule">
<iframe src="https://wheeldecide.com/e.php?c1=20+puntos&c2=5+puntos&c3=15+puntos&c4=10+puntos&c5=50+puntos&c6=1+puntos&c7=25+puntos&c8=30+puntos&time=5" width="500" height="500" scrolling="no" frameborder="0"></iframe>
</div>
	
<script>
	
function getRandomColor() {
    var letters = 'BCDEF'.split('');
    var color = '#';
    
	for(var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * letters.length)];
    }
	
	color = color+'66';
    return color;
}

function jugadoresFun() {
	var ply = $('#ckjg').val();
	var res = '';
	res += '<div class="row">';
		
	for(i=1; i <= parseInt(ply); i++) {
		if(i == 4) {
			res += '<div class="row">';
		}
		
		var randomColor = Math.floor(Math.random()*16777215).toString(16);
		res+= '<div class="col-md-4 mb-2 cardj"  ><div class="card" style="background:' + getRandomColor() + '"><div class="card-header" id="player' + i + '"><h4 class="card-title">Jugador ' + i + '</h4></div><div class="card-body"><div class="row" ><div class="col-md-12 score" id="puntos' + i + '">0</div></div></div></div></div>';
		
		if(i == 3) {
			res+= '</div>';
		}
	}
	
	if(i != 3) {
		res+= '</div>';
	}

	$('#jugadores').html(res);	
	$("#player1").addClass("player-border");
}

function palabraFun() {
	var pal = $("#ckpalabra").val();
	var res = '';
	var sumap = 0;

	$("#hidpal").val(pal);
	$("#tabla").addClass( "gradient-border");
			
	var palabras = pal.split(" ");

	for(var y = 0; y < palabras.length; y++) {
		var pals = palabras[y];
		sumap += pals.length;
				
		if(sumap > 11) {
			sumap = pals.length;
		} else {
			if(y!=0) {
				palabras[y-1] = palabras[y-1] + ' ' + palabras[y];
				sumap++;
				palabras.splice(y,1);
				y--;
			}
		}
	}

	palabras.forEach(function(pals) {
		res+= '<tr>';
				
		var chars = pals.split("");
		var resta = 14 - chars.length;
						
		if(resta == 0) {
			chars.forEach(function(letra) {
				if(letra == ' ') {
					res+='<td class="bordevacio"><h1 style="text-align: center;">&nbsp;</h1></td>';
				} else {
					letra = letra.toUpperCase();
					res+= '<td class="borde imagen"><div class="card-grid"><div class="front" name="' + letra + '"></div><div class="back"><h1 style="text-align: center;">' + letra + '</h1></div></div></td>';
				}
			});
		} else if(resta%2==0) {
			for(i=0;i<resta/2;i++) {
				res+='<td class="bordevacio"><h1 style="text-align: center;">&nbsp;</h1></td>';
			}
				
			chars.forEach(function(letra) {
				if(letra == ' ') {
					res += '<td class="bordevacio"><h1 style="text-align: center;">&nbsp;</h1></td>';
				} else {
					letra = letra.toUpperCase();
					res+= '<td class="borde imagen"><div class="card-grid"><div class="front" name="' + letra + '"></div><div class="back"><h1 style="text-align: center;">' + letra + '</h1></div></div></td>';
				}
			});
						
			for(j = 0; j < resta/2; j++) {
					res+='<td class="bordevacio"><h1 style="text-align: center;">&nbsp;</h1></td>';
			}
		} else {
			for(i = 0; i < parseInt(resta/2); i++) {
				res+='<td class="bordevacio"><h1 style="text-align: center;">&nbsp;</h1></td>';
			}
							
			chars.forEach(function(letra) {
				if(letra ==' ') {
					res+='<td class="bordevacio"><h1 style="text-align: center;">&nbsp;</h1></td>';
				} else {
					letra = letra.toUpperCase();
					res+= '<td class="borde imagen"><div class="card-grid"><div class="front" name="'+letra+'"></div><div class="back"><h1 style="text-align: center;">'+letra+'</h1></div></div></td>';
				}
			});
						
			for(j = 0; j < parseInt(resta/2) + 1; j++) {
				res+='<td class="bordevacio"><h1 style="text-align: center;">&nbsp;</h1></td>';
			}	
		}
		res+= '</tr>';
	});
	

	$("#tabla").html(res);
	$(".card-grid").flip();
	$(".card-grid").off(".flip");
};

function pistaFun() {
	var pista = $("#ckpista").val();
		pista = pista.toUpperCase();
	var pis = '<h3><b><style="color:white">' + pista + '</b></h3>';
	
	$("#rcorners").html(pis);	
};

		
$("#respuestar").click(function() {
	var palabra = $("#hidpal").val();
	var respuesta = $("#respuesta").val();

	if(respuesta == 'null' || respuesta == null || respuesta.trim() == "") {
		alert("Inserte una respuesta para continuar");	
	} else {			
		if (respuesta == palabra) { 
			$(".front").parent().parent().css("background", "white");
			$(".front").parent().flip(true);
				
			var puntero = $("#hidusu").val();
			puntero = parseInt(puntero);
			var valor = 100;
			var pts = $("#puntos"+puntero).html(); 
			pts = parseFloat(pts);
			var nuevopts = pts + valor;
				
			$('#puntos' + puntero + '').html(nuevopts);

			alert("¡RESUELTO!");	

		} else {
			var jg = $("#players").val();
			var puntero = $("#hidusu").val();
			puntero = parseInt(puntero);
			var valor = -20;
			var pts = $("#puntos" + puntero).html(); 
			pts = parseFloat(pts);
			var nuevopts = pts + valor;

			$('#puntos' + puntero + '').html(nuevopts);
			$('#player' + puntero + '').removeClass('player-border');
			
			puntero++;
				
			if(puntero > parseInt(jg)) { 
				puntero = 1;
			}
			
			$("#hidusu").val(puntero);
			$('#player' + puntero + '').addClass('player-border');

			alert("Respuesta incorrecta")
		}
	}
});

$("#letrar").click(function() {		
	var letra = $("#letra").val();
	var res = '';
	var x = 0;

	if(letra == 'null' || letra == null || letra.trim() == "") {
		alert("Inserte una letra para continuar");
	}

	if(letra.length > 1) {
		alert("Inserte una sola letra para continuar");
			
		$("#letra").val("");

		} else {
			setCookie('letra',letra,1);
				
			$("#letra").val("");
				
			var pal = $("#hidpal").val();
			var aci = $("#hidaci").val();
			var fal = $("#hidfal").val();	
			var puntero = $("#hidusu").val();
			var jg = $("#players").val();
			var puntos = $("#puntos").val();
						
			setCookie('puntos',puntos,1);		
			setCookie('usu',puntero,1);		
				
			puntero = parseInt(puntero);
			pal = pal.toUpperCase();
			letra = letra.toUpperCase();
				
			if (pal.indexOf(letra) >= 0) {
				$("div[name=" + letra + "]").parent().parent().css("background", "white");
				$("div[name=" + letra + "]").parent().flip(true);
				
				if (aci.indexOf(letra) >= 0) {
				} else {
					aci += letra;
						
					$("#hidaci").val(aci);			
			
					var palabras = pal.split(" ");
				
			
					palabras.forEach(function(pals) {
						var chars = pals.split("");

						chars.forEach(function(car) {
							if(car == letra) {
								x++;
							}
						});
					});
			
					var h = '<div class="col-md-1"><div class="card"><h1 style="text-align: center;">'+ x + 'x' + letra + '</h1></div></div>';
					var valor = parseFloat(puntos) * x;
					var pts = $("#puntos" + puntero).html(); pts = parseFloat(pts);
					var nuevopts = pts + valor;

					$('#puntos' + puntero + '').html(nuevopts);
					$('#hist').append(h);
				}
			} else {
				if (fal.indexOf(letra) >= 0) { 

				} else {
					fal += letra;

					$("#hidfal").val(fal);

					var l = '<div class="col-md-1"><div class="card"><h1 style="text-align: center;">'+letra+'</h1></div></div>';
						
					$('#falladas').append(l);	
					$("#falladas").parent().addClass( "bordef");
				}
			}
				
			$('#player' + puntero + '').removeClass('player-border');

			puntero++;

			if(puntero > parseInt(jg)) {
				puntero = 1;
			}

			$("#hidusu").val(puntero);
			$('#player' + puntero + '').addClass('player-border');	
		}
});
	
		
$(function() {
	var pathname = window.location.pathname;
	
	console.log(pathname);
	
	if(pathname == 'index3.php') {
		$('#control').addClass('active');
	} else {
		$('#ru').addClass('active');
	}
	
	setInterval(function(){ actCookies(); }, 500);	
});
		
function actCookies(){
	var jg = getCookie('jg');
	var pista = getCookie('pista');
	var palabra = getCookie('palabra');
	var letra = getCookie('letra');
	var puntos = getCookie('puntos');
	var hist = getCookie('hist');
	var fallos = getCookie('fallos');
			
	console.log(puntos);
	console.log("---");
			
	var ckjg = $('#ckjg').val();
	var ckpista = $('#ckpista').val();
	var ckpalabra = $('#ckpalabra').val();
	var ckletra = $('#ckletra').val();
	var ckpuntos = $('#ckpuntos').val();
	var ckhist = $('#ckhist').val();
	var ckfallos = $('#ckfallos').val();
			
	if(jg != ckjg) {
		console.log(jg)
		
		$('#players').val(jg);
		$('#ckjg').val(jg);
		
		jugadoresFun();
	}
			
	if(pista != ckpista) {
		$('#ckpista').val(pista);
		pistaFun();
	}
	
	if(palabra != ckpalabra) {
		$('#ckpalabra').val(palabra);
		palabraFun();
	}
	
	if(puntos != ckpuntos) {
		$('#ckpuntos').val(puntos);
		$('#puntos').val(puntos);
	}

	if(letra != ckletra) {
		$('#ckletra').val(letra);
	}
			
	if(hist != ckhist) {
		$('#ckhist').val(hist);
		
		if(hist == '1') {
			$('#rowhist').show('500');
		} else {
			$('#rowhist').hide('500');
		}
	}
			
	if(fallos != ckfallos) {
		$('#ckfallos').val(fallos);
				
		if(fallos == '1'){
			$('#rowfallos').show('500');
		} else {
			$('#rowfallos').hide('500');
		}
	}
			
	var nuevoJ = getCookie('nuevoJuego');
			
	if(nuevoJ == '1') {
		setCookie('nuevoJuego','0',1);
		
		location = "index2.php";
	}		
}

</script>