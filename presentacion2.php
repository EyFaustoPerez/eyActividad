<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Presentación</title>
</head>
<body>
    <header>
        <td>
            <img class="imgobierno" src="logoheader.svg" >
            <h4 class="h4-a">Gobierno</h4>
            <h4 class="h4-b">Participa</h4>
            <h4 class="h4-c">Datos</h4>
        </td>
    </header>
<section>
	<table width="800" align="center">
        <br>
		<tr>
		<td><a href="https://www.gob.mx/sep"><img src="http://sii.iztapalapa.tecnm.mx/sistema//img/Educacion-2020.png" width="130"/></td></a>
		<td class="td">
			<font class="titulo1">Sistema de registro de alumnos Egresados y Bajas</font>
			<br>
            <br>
			<font class="titulo2"> Instituto Tecnológico de Iztapalapa</font>
			<br>
			<!---<font class="titulo2"> Version 1</font>--->
		</td>
		<td><a href="https://www.tecnm.mx/"><img class="imagenizq" src="pleca_tecnm.jpg" width="110"/></td></a>
		</tr>

	</table>
</section>
<hr>

<div class="todo">




<div class="menu-wrapper">
        <ul class="principal-menu">
            <li><a href="http://localhost/codeIgniter/">INICIO</a></li>
            <li><a>REGISTRAR</a>
                <ul class="sub-menu">
                    <li><a href="http://localhost/codeIgniter/public/registros.php">Registrar informacion</a></li>  
                </ul>
            </li>

            <li><a>BUSCAR</a>
                <ul class="sub-menu">
                    <li><a href="http://localhost/codeIgniter/public/buscar_control.php">Por Numero de control</a></li>  
                    <li><a href="http://localhost/codeIgniter/public/buscar_apellidoP.php">Por Apellido Paterno</a></li>  
                    <li><a href="http://localhost/codeIgniter/public/buscar_apellidoM.php">Por Apellido Materno</a></li>  
                    <li><a href="http://localhost/codeIgniter/public/buscar_nombre.php">Por Nombre</a></li>  
                    <li><a href="http://localhost/codeIgniter/public/buscar_carrera.php">Por Carrera</a></li>  
                    <li><a href="http://localhost/codeIgniter/public/buscar_tipo.php">Por Tipo de alumno</a></li>  
                    <li><a href="http://localhost/codeIgniter/public/buscar_caja.php">Por Numero de caja</a></li>  
                </ul>
            </li>

            <li><a href="#">ELIMINAR</a>
                <ul class="sub-menu">
                    <li><a href="http://localhost/codeIgniter/public/eliminar.php">Eliminar registros</a></li>  
                </ul>
            </li>
            <li><a href="#">MODIFICAR</a>
                <ul class="sub-menu">
                    <li><a href="">Modificar registros</a></li>  
                </ul>
            </li>
        </ul>           
    </div>
 <div id="efecto">
   </div>
 <div id="publicidad">
   </div>
</div>
    </div>



	<style type="text/css">

	/* Eso es para todo el formato de la pagina  */
		*{
			margin: 0;
			padding: 0;
			border-sizing: border-box;

		}

		body{
			font-family: Monserrat Medium Bold;
			font-variant: small-caps;
			
			
		}

        header .imgobierno{
            width: 400px;
            height: 90%;
            text-align: right;
            margin: 0 -140px;
        }

        h4{
            text-align: right;
            font-family: Monserrat;
            font-size: 12px;
            color: white;
        }

        .h4-a{
            color: white;
            margin: -20px 200px;
            text-transform: capitalize;
        }

        .h4-b{
            color: white;
            margin: 7px 130px;
            text-transform: capitalize;
        }

        .h4-c{
            color: white;
            margin: -20px 60px;
            text-transform: capitalize;
        }

        header{
            background-color: #000000;  /*negro*/
            margin: 0;
            padding: 0;
            width: 100%;
            height: 30px;
            text-align: left;

        }

		section{
			margin: 0;
			padding: 0;
			width: 100%;
			height: 80px;
			background-color: #FFFFFF; /*blanco*/
			
		}

		.titulo1{
			font-size: 15px;
			color: #000000;
            margin: 0 -10px;
            font-weight: bold;
            color: black;
			
			
		}

		.titulo2{
			font-size: 15PX;
			font-weight: bold;
			color: #000000;
			
		}
		.imgagenizq{
			text-align: right;
			margin: 0 800px;
		}

		table{
			margin: 0;
			padding: 0;
			width: 100%;

		}

        .imagenizq{
            background-color: #1B396A;
        }


/* Stile Menu*/

/* MENU HORIZONTAL*/
        body{
            margin: 10;
            font-family: Monserrat Medium Bold;
            font-size: 15px;
        }

/* MENU HORIZONTAL LADO HOV*/
        .principal-menu > li {
            display: inline-block;
        }

/*TAMAÑO MENU HORIZONTAL RECUADRO*/
        .principal-menu > li > a{
            display: block;
            padding: 10px 5px;
            width: 90px;
        }
        li ul{
            position: absolute;
            display: none;
        }

/*TAMAÑO SUBMENU HORIZONTAL RECUADRO*/
        .sub-menu a {
            display: block;
            padding: 10px 5px;
            width: 180px;
        }

        li{
        	color: white;
        }

        li:hover ul{
            display: block;
        }
/* COLOR MENU HORIZONTAL RECUADRO*/
        .menu-wrapper, li ul{
            background: #1B396A; 
            text-align: center;
        } 

/* DISTRIBUCION MENU HORIZONTAL RECUADRO*/
        .principal-menu {
            width: 600px;
            margin: 0 auto;
        }
 
/* COLOR LETRAS MENU HORIZONTALRECUADRO*/
        .principal-menu a {
            color: #FFFFFF;
            text-decoration: none;
            font-weight: bold;       /*aqui tengo que agregar el de la clase*/

        }
/* COLOR SOMBRAS LETRAS MENU HORIZONTAL RECUADRO*/
        .principal-menu li:hover{
            background: blue;
            text-shadow: 0 0 2px #000;
        }

        a{
            text-align: left;
            font-size: 11px;
        }


        .sub-menu{
        	color: #FFFFFF;
            text-decoration: none;
            font-weight: bold; 
            font-size: 10px;
        }
	</style>
</body>
</html>