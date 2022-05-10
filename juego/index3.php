<?php 
include('header.php');
?>

<title>Ruleta de la suerte</title>

<?php include('contenedor.php');?>

<div class="container">
	<h2>Panel Control Ruleta de la Suerte</h2>	
	<br>
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
											
	<div class="col-md-1">
	<input type="button" id="ir" value="Generar">
	</div>
	<div class="form-group col-md-5">
	<label class="form-label">Pista</label>
	<input type="text" id="pista"  style="width:80%;" placeholder="Introduzca pista">
	</div>
	<div class="col-md-1">
	<input type="button" id="pistar" value="Aceptar">
	</div>
	</div>
	<div class="row">
	<div class="form-group col-md-4">
	<label class="form-label">Puntos</label>
	<input type="text" id="puntos" value="20">
	</div>
	<div class="form-group col-md-4">
	<label class="form-label">Multiplicador</label>
	<input type="text" id="mult" value="1">
	</div>
	</div>
	</div>
	<input type="hidden" id="hidusu" value="1">
	<input type="hidden" id="hidmult" >
	<input type="hidden" id="hidpal" >
	<input type="hidden" id="hidaci" >
	<input type="hidden" id="hidfal" >
	<div style="margin:50px 0px 0px 0px;">
		<a class="btn btn-default read-more" style="background:#3399ff;color:white" id="nuevo" >Nuevo Juego</a>		
	</div>

</div>