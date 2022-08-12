<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Eliminar un registro de alumno</title>
</head>
<body>
	<?php 
        include ('presentacion.php');
    ?>
    <br>
    <br>
	<form method="post">
		<h1>¡BORRAR ALUMNO!</h1>
		<h2>INGRESE EL NUMERO DE CONTROL</h2>
		<input type="text" name="control" placeholder="Ingrese el numero de control">
		<input type="submit" name="Eliminar" value="Eliminar">
		<br>
		<br>
		<br>
		<?php 
			include ("borrar.php");
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

input {
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