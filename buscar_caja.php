<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Buscar por caja</title>
	
</head>
<body>
	<?php 
        include ('presentacion.php');
    ?>
    <br>
    <br>
    
	<form method="post">
		<h1>¡Buscar alumnno(a) por Caja!</h1>
		<h2>Ingrese el Número de de caja</h2>
		<br>
		<br>
		<select class="selectores" type="text" name="control">
			<option type="text" name="control">SELECCIONE EL NUMERO DE CAJA</option>
			<option type="text" name="control">1</option>
			<option type="text" name="control">2</option>
			<option type="text" name="control">3</option>
			<option type="text" name="control">4</option>
			<option type="text" name="control">5</option>
			<option type="text" name="control">6</option>
			<option type="text" name="control">7</option>
			<option type="text" name="control">8</option>
			<option type="text" name="control">9</option>
			<option type="text" name="control">10</option>
			<option type="text" name="control">11</option>
			<option type="text" name="control">B1</option>
			<option type="text" name="control">B2</option>
			<option type="text" name="control">B3</option>
			<option type="text" name="control">B4</option>
			<option type="text" name="control">B5</option>
			<option type="text" name="control">B6</option>
			<option type="text" name="control">B7</option>
			<option type="text" name="control">B8</option>
		</select>
		<input type="submit" name="Buscar" value="Buscar">
		<br>
		<br>
		<br>

		<?php
			include ("busqueda_caja.php");
		?>
	</form>

	<style type="text/css">
		* {
	padding: 0;
	margin: 0;
	font-family: century gothic;
	text-align: center;
    text-transform: uppercase;
}

form {
	padding: 50px 20px;
	background-color: #1B396A;
	margin: calc(10% + 100px);
	margin-top: 0px;
	padding-top: 28px;
	margin-bottom: 30px;
	color: white;
}

h1 {
	text-align: center;
	padding: 12px;
	color: white;
}

input, option {
	width: calc(100% - 20px);
	padding: 9px;
	margin: auto;
	margin-top: 12px;
	font-size: 16px

}

input[type='submit']{
	background-color: #48e;
	color: #fff;
	width: calc(80% - 20px);
	margin: 0 10%;
	margin-top: 22px;
	border: none;
}

.selectores {
	width: 50%;
	height: 40px;
	margin: 0 10%;
	margin-top: 22px;
	border: none;
}


.ok {
	text-align: center;
	width: 100%;
	padding: 12px;
	background-color: #1e6;
	color: #fff
}
.bad {
	text-align: center;
	width: 100%;
	padding: 12px;
	background-color: #a22;
	color: #fff
}
	</style>

</body>
</html>