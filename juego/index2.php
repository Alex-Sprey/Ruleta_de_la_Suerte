<?php 
include('header.php');
?>

	<link rel="stylesheet" href="css.css">

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
		
		<input type="hidden" id="hidusu">
		<input type="hidden" id="puntos">
		<input type="hidden" id="mult">
		<input type="hidden" id="hidmult">
		<input type="hidden" id="hidpal">
		<input type="hidden" id="hidaci">
		<input type="hidden" id="hidfal">
		<input type="hidden" id="ckmult">
		<input type="hidden" id="ckpuntos">
		<input type="hidden" id="ckpalabra">
		<input type="hidden" id="ckjg">
		<input type="hidden" id="ckpista">
		<input type="hidden" id="ckletra">
		<input type="hidden" id="ckhist">
		<input type="hidden" id="ckfallos">
	
	</div>
	
	<div  id="rule">
		<iframe id="pts" src="https://wheeldecide.com/e.php?c1=20puntos&c2=10puntos&c3=5punts&time=5" width="400" height="400" scrolling="no" frameborder="0"></iframe>
	</div>

	<div style="margin:50px 50px 50px 50px;">
		<a class="btn btn-default read-more" style="background:#3399ff;color:white" href="index2.php">Nuevo Juego</a>		
	</div>

<script>

</script>