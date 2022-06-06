<?php 
include('header.php');
?>

<link rel="stylesheet" href="css.css">

<title>Ruleta de la suerte</title>

<?php include('contenedor.php');?>

<div class="container">
	<h2>Panel Control Ruleta de la Suerte</h2>	
	<br>
	
	<div class="row mb-5 oculto">
		<div class="col-md-12">
			<div  id="rcorners"><h3><b style="color:white">Un conocido conociendo conozco</b></h3></div>
			</div>
		</div>
	<br>
	   
	<div class="row oculto" id="jugadores"> </div>

	<div class="row">
	<div class="form-group col-md-4">
		<label class="form-label">Nº Jugadores</label>
		
		<select  class="form-control select2-show-search" id="players" >
		
		<option selected value="null"  disabled>Seleccione nº jugadores...</option>
		
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		
		</select>

	</div>
	<div class="col-md-4 ">
		<label class="custom-control custom-checkbox">
			<input type="checkbox"  class="custom-control-input"  id="fallos" value="0"/>
			<span class="custom-control-label text-dark">Mostrar Fallos</span>
		</label>
	</div>
		
	<div class="col-md-4 ">
			<label class="custom-control custom-checkbox">
				<input type="checkbox"  class="custom-control-input"  id="historicos" value="0"/>
				<span class="custom-control-label text-dark">Mostrar Histórico</span>
			</label>
		</div>
	</div>
	
	<div class="row">
		<div class="form-group col-md-5">
			<label class="form-label">Palabra/Frase</label>
			<input type="text" style="width:70%;" id="palabra" placeholder="Introduzca frase">
		</div>
	
		<div class="form-group col-md-4">
			<label class="form-label">Pista</label>
			<input type="text" id="pista"  style="width:80%;" placeholder="Introduzca pista">
		</div>								
	</div>
	
	<input type="hidden" id="hidusu" value="1">
	<input type="hidden" id="hidpal" >
	<input type="hidden" id="hidaci" >
	<input type="hidden" id="hidfal" >
	
	<div class="mb-5">
		<div class="col-md-3">
			<input type="button" class="btn btn-default read-more" style="background:#3399ff;color:white" id="ir" value="Empezar juego">
		</div>
	</div>

	</br>
	</br>
	</br>
	</br>
	
	<div class="row">
		<div class="form-group col-md-4">
			<label class="form-label">Puntos</label>
			<input type="text" id="puntos" value="5">
		</div>
		<div class="col-md-2">
			<input type="button" id="puntar" value="Cambiar Puntaje">
		</div>
	</div>
</div>
</div>

<script>

$("#ir").click(function() {

	var pal = $("#palabra").val();
	var res = '';
	var sumap = 0;
	var indx = 0;
	var equis = 0;
	var palabras2 = pal.split(" ");
			
	palabras2.forEach(function(palas) {
		if(palas.length > 14) {
			return alert("Debe introducir palabras de menos de 15 carácteres");
			
			equis = 1;
		}

	});
		
	if(pal == 'null' || pal == null || pal.trim() == "") {
		return alert("Inserte palabra para continuar");
	} else {
		if(equis == 0) {  			
			setCookie('palabra',pal,1);
			
			$("#hidpal").val(pal);
			
			var palabras = pal.split(" ");
			
			for(var y = 0; y<palabras.length; y++) {
				var pals = palabras[y];
				
				sumap += pals.length;
				
				if(sumap > 11) {
					sumap = pals.length;
				} else {
					if(y != 0) {
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
							res+= '<td class="bordevacio"><h1 style="text-align: center;">&nbsp;</h1></td>';
						} else {
							letra = letra.toUpperCase();
							res+= '<td class="borde imagen"><div class="card-grid"><div class="front" name="' + letra + '"></div><div class="back"><h1 style="text-align: center;">' + letra + '</h1></div></div></td>';
						}
					});
				}else if(resta%2 == 0) {
					for(i=0; i < resta/2; i++) {
						res+='<td class="bordevacio"><h1 style="text-align: center;">&nbsp;</h1></td>';
					}
					
					chars.forEach(function(letra) {
						if(letra == ' ') {
							res+='<td class="bordevacio"><h1 style="text-align: center;">&nbsp;</h1></td>';
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
						if(letra == ' ') {
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
		}
	}

	var pal = $("#hidpal").val();
	var aci = $("#hidaci").val();
	var fal = $("#hidfal").val();
	var puntero = 1;	
	var jg = $("#players").val();

	if(jg == 'null' || jg == null) {
		return alert("Inserte un número de jugadores para continuar.");
	}

	var pista = $("#pista").val();

	if(pista == 'null' || pista == null || pista.trim() == "") {
		return alert("Inserte una pista para continuar");
	} else {	
		setCookie('pista',pista,1);
		
		var pis = '<h3><b style="color:white">' + pista + '</b></h3>';
		
		$("#rcorners").html(pis);
	}
	
	setCookie('nuevoJuego','1',1);
	setCookie('letra','0',1);	
	setCookie('usu',puntero,1);		
	
	if($('#fallos').is(':checked')) {
		setCookie('fallos','1',1);
	} else {
		setCookie('fallos','0',1);
	} if($('#historicos').is(':checked')) {
		setCookie('hist','1',1);
	} else {
		setCookie('hist','0',1);
	}
		
	setCookie('jg',jg,1);

	puntero = parseInt(puntero);
	pal = pal.toUpperCase();
});

$("#puntar").click(function() {
	var puntos = $("#puntos").val();
	
	if(puntos == 'null' || puntos == null) {
		alert("Inserte puntaje para continuar");
			
	} else {
		setCookie('puntos',puntos,1);
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
	setCookie('jg','0',1);
	setCookie('pista','',1);
	setCookie('palabra','',1);
	setCookie('letra','0',1);
	setCookie('puntos', '5' ,1);	
	setCookie('hist','0',1);
	setCookie('fallos','0',1);
});

</script>