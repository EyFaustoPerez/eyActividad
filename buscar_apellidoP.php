<!DOCTYPE html>
<html>
<head>
	<title>Buscar alumno por Apellido Paterno</title>
	<meta charset="utf-8">
</head>
<body>
    <?php 
        include ('presentacion.php');
    ?>
    <br>
    <br>
    
    <form  method="post">
    	<h1>¡Buscar alumno/a!</h1>
        <h2>Escriba el Apellido Paterno </h2>
        <input type="text" name="nombre" placeholder="Ingrese el Apellido Paterno">
        <input type="submit" name="Buscar" value="Buscar">
        <br>
        <br>
        <br>
        <?php 
        include("busqueda_apellido.php");
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