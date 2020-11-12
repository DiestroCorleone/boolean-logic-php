<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel = "stylesheet" href = "https://diestrocorleone.github.io/quark-css/quark.css">
	<link rel = "stylesheet" href = "https://fonts.googleapis.com/css?family=Lato">	
	<script src="control.js"></script>
	<title>Lógica Booleana | Ejercicios</title>
	<style type="text/css">
		.font-Lato{
			font-family: Lato;
		}
	</style>
</head>
<body class="font-Lato">
	<div class="row col-full padded">
		<div class="col-3quarter padded no-margin shadowed">
			<form action="javascript:calcDiscount();" class="text-c">
				<h3 class="font-blue text-c">Calculá tu descuento</h3><hr class="bordered border-blue bg-blue"><br>
				<div class="row col-full">
				<div class="col-quarter">
					<br><label for="selectBank">Elegí tu banco:</label><br><br>
					<select name="selectBank" id="banco" class="input bordered border-blue" required>
						<option disabled selected value>Desplegá para opciones...</option>
						<option value ="banco1">Banco 1</option>
						<option value="banco2">Banco 2</option>
					</select>
				</div>
				<div class="col-quarter">
					<p>Sos jubilado?</p>
					<input type="radio" name="jubilado" id="no" required>
					<label for="no">No</label>
					<input type="radio" name="jubilado" id="si" required>
					<label for="si">Sí</label>
				</div>
				<div class="col-quarter">
					<br><label for="monto">Monto de tu compra:</label><br><br>
					<input type="number" name="monto" id="monto" class="input bordered border-blue" step=".01" required>
				</div>
				<div class="col-quarter">
					<br><label for="fecha">Fecha de tu compra:</label><br><br>
					<input type="date" id="fecha" class="input bordered border-blue" required>
				</div>
				</div>
				<br><input type="submit" value="Calcular" class="btn-blue">
			</form>
			<p id="resultado"></p>
		</div>
	</div>
	<div class="row col-full padded">
	<div class="col-3quarter padded no-margin shadowed">
			<form action="javascript:calcSalary();" class="text-c">
			<h3 class="font-blue text-c">Calculá tu salario</h3><hr class="bordered border-blue bg-blue"><br>
			<div class="row col-full">
			<div class="col-third">
				<label for="categoria">Categoría:</label><br><br>
				<select name="categoria" id="categoria" class="input bordered border-blue" required>
					<option disabled selected value>Desplegá para opciones...</option>
					<option value="A">A</option>
					<option value="B">B</option>
					<option value="C">C</option>
					<option value="D">D</option>
					<option value="E">E</option>
				</select>
			</div>	
			<div class="col-third">
				<label for="fechaIngreso">Fecha de ingreso a la empresa:</label><br><br>
				<input type="date" name="fechaIngreso" id="fechaIngreso" class="input bordered border-blue required" min="1980-01-02" max=
				<?php
					echo date('Y-m-d', strtotime('-1 days'));
				?> 
				>
			</div>	
			<div class="col-third">
				<label for="horas">Horas diarias trabajadas en el último mes:</label><br><br>
				<input type="number" name="horas" id="horas" class="input bordered border-blue required">				
			</div>
			</div>
			<br><input type="submit" value="Calcular salario" class="btn-blue">
		</form>
		<p id="salario"></p>
	</div>
	</div>
	<div class="row col-full padded">
	<div class="col-3quarter padded no-margin shadowed">
			<form action="control.php" method="POST" class="text-c">
			<h3 class="font-blue text-c">Calculá tu salario con PHP</h3><hr class="bordered border-blue bg-blue"><br>
			<div class="row col-full">
			<div class="col-third">
				<label for="category">Categoría:</label><br><br>
				<select name="category" id="category" class="input bordered border-blue" required>
					<option disabled selected value>Desplegá para opciones...</option>
					<option value="A">A</option>
					<option value="B">B</option>
					<option value="C">C</option>
					<option value="D">D</option>
					<option value="E">E</option>
				</select>
			</div>	
			<div class="col-third">
				<label for="datein">Fecha de ingreso a la empresa:</label><br><br>
				<input type="date" name="datein" id="datein" class="input bordered border-blue required" min="1980-01-02" max=
				<?php
					echo date('Y-m-d', strtotime('-1 days'));
				?> 
				>
			</div>	
			<div class="col-third">
				<label for="hours">Horas diarias trabajadas en el último mes:</label><br><br>
				<input type="number" name="hours" id="hours" class="input bordered border-blue required">				
			</div>
			</div>
			<br><button class="btn-blue" onclick="calcSalario()">Calcular salario</button>
		</form>
		<p id="salario"></p>
	</div>
	</div>	
</body>
</html>