<?php 

$conn = mysqli_connect("localhost","root","Fausto*27","midb"); 
?>

<br>


<table border="1">
	<tr>
	<td>No. de Control</td>
	<td>Apellido Paterno</td>
	<td>Apellido Materno</td>
	<td>Nombre(s)</td>
	<td>Carrera</td>
	<td>Generacion</td>
	<td>Caja</td>
	<td>Alumno</td>
	</tr>


<?php 
	if (isset($_POST['Buscar'])) 
	{
		if (strlen($_POST['control']) < 9) 
		{
			echo "Ingrese un numero de control valido por favor";
		}
		else
		{
			if (strlen($_POST['control']) == 9) 
			{
				echo "Los resultados fueron los siguientes";
				$control = trim($_POST['control']);
				$sql = "SELECT control, apellidoP, apellidoM, nombre, carrera, generacion, caja, alumno FROM alumnos WHERE control = '$control'";
				if ($sql == TRUE) 
				{
					$result = mysqli_query($conn,$sql);
					while($mostrar = mysqli_fetch_array($result))
					{
						?>
            			<tr>
            			<td><?php echo $mostrar['control'] ?></td>
            			<td><?php echo $mostrar['apellidoP'] ?></td>
            			<td><?php echo $mostrar['apellidoM'] ?></td>
            			<td><?php echo $mostrar['nombre'] ?></td>
            			<td><?php echo $mostrar['carrera'] ?></td>
            			<td><?php echo $mostrar['generacion'] ?></td>
            			<td><?php echo $mostrar['caja'] ?></td>
            			<td><?php echo $mostrar['alumno'] ?></td>
            			</tr>
        
        				<?php 
					}
				}
				else
				{
					echo "Hubo un error con la busqueda";	
				}
				
			}
			else
			{
				echo "Ingrese un Número de control valido ´por favor";
			}
		}
	}
	else
	{
		echo "El número de control no existe, favor de verificar";
	}
?>
</table>