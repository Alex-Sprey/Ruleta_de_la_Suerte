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
