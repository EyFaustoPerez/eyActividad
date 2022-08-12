<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Registro de Alumnos</title>
	<link rel="stylesheet" type="text/css" href="estilo3.css">
</head>
<body>

<?php include('presentacion.php');?> 
    <br>
    <br>
	<form method="post" text-transform="uppercase">
		<h1>¡Registro de alumnos!</h1>
		<input type="text" name="control" placeholder="Ingrese el numero de control">
		<input type="text" name="apellidoP" placeholder="Ingrese el Apellido Paterno">
		<input type="text" name="apellidoM" placeholder="Ingrese el Apellido Materno">
		<input type="text" name="nombre" placeholder="Ingrese el Nombre(s)">

		<br>
		<br>
		<select class="selectores" type="text" name="carrera">
			<option type="text" name="carrera">CARRERA</option>
			<option type="text" name="carrera">IIND</option>
			<option type="text" name="carrera">IGE</option>
			<option type="text" name="carrera">IME</option>
			<option type="text" name="carrera">ISC</option>
		</select>
		<br>
		<br>
		<select class="selectores" type="text" name="generacion">
			<option type="text" name="generacion">GENERACION</option>
			<option type="text" name="generacion">2008</option>
			<option type="text" name="generacion">2009</option>
			<option type="text" name="generacion">2010</option>
			<option type="text" name="generacion">2011</option>
			<option type="text" name="generacion">2012</option>
			<option type="text" name="generacion">2013</option>
			<option type="text" name="generacion">2014</option>
			<option type="text" name="generacion">2015</option>
			<option type="text" name="generacion">2016</option>
			<option type="text" name="generacion">2017</option>
			<option type="text" name="generacion">2018</option>
			<option type="text" name="generacion">2019</option>
		</select>
		<br>
		<br>
		<select class="selectores" type="text" name="caja">
			<option type="text" name="caja">CAJA</option>
			<option type="text" name="caja">1</option>
			<option type="text" name="caja">2</option>
			<option type="text" name="caja">3</option>
			<option type="text" name="caja">4</option>
			<option type="text" name="caja">5</option>
			<option type="text" name="caja">6</option>
			<option type="text" name="caja">7</option>
			<option type="text" name="caja">8</option>
			<option type="text" name="caja">9</option>
			<option type="text" name="caja">10</option>
			<option type="text" name="caja">11</option>
			<option type="text" name="caja">B1</option>
			<option type="text" name="caja">B2</option>
			<option type="text" name="caja">B3</option>
			<option type="text" name="caja">B4</option>
			<option type="text" name="caja">B5</option>
			<option type="text" name="caja">B6</option>
			<option type="text" name="caja">B7</option>
			<option type="text" name="caja">B8</option>
		</select>
		<br>
		<br>
		<select class="selectores" type="text" name="alumno">
			<option type="text" name="alumno">TIPO DE ESTUDIANTE</option>
			<option type="text" name="alumno">EGRESADO</option>
			<option type="text" name="alumno">BAJA</option>
			<option type="text" name="alumno">ESTUDIANTE</option>
		</select>
		<br>
		<br>
		<select class="selectores" type="text" name="sex">
			<option type="text" name="sex">Sexo</option>
			<option type="text" name="sex">FEM</option>
			<option type="text" name="sex">MAS</option>
		</select>

		
		<input type="submit" name="Registrar" value="Registrar">
	</form>

	<?php
		
		include ("registrar.php");
	?>

	<style type="text/css">
		
		*{
			padding: 0;
			margin: 0;
			font-family: century gothic;
			text-align: center;
			text-transform: uppercase;
		}

		.selectores{
			margin: 0;
			height: auto;
			width: 60%;
			font-size: 17px;
			
		}
		form{
			padding: 50px 20px;
			background-color: #1B396A;
			margin: calc(20% + 100px);
			margin-top: 0px;
			padding-top: 28px;
			margin-bottom: 30px;
		}

@media tv and (min-width: 1024px) and (orientation: landscape) { 
		form{
			padding: 50px 20px;
			background-color: #1B396A;
			margin: calc(20% + 100px);
			margin-top: 0px;
			padding-top: 28px;
			margin-bottom: 30px;
		}
	}



		h1{
			text-align: center;
			padding: 12px;
			color: whitesmoke;
		}

		input{
			width: calc(60% - 20px);
			padding: 9px;
			margin: auto;
			margin-top: 8px;
			font-size: 16px;
		}

		input[type='submit']{
			background-color: #48e;
			color: #fff;
			width: calc(60% - 20px);
			margin: 10px 10%;
			margin-top: 22px;
			border: 10px;
		}


		.ok{
			text-align: center;
			width: 100%;
			padding: 12px;
			background-color: #a22;
			color: #fff;
		}

		.bad{
			text-align: center;
			width: 100%;
			padding: 12px;
			background-color: #a22;
			color: #fff;
		}
	</style>
</body>
</html>