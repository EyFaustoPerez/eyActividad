<?php
$conex = mysqli_connect("localhost","root","Fausto*27","midb"); 
?>
<br>
<table border="1">
	
	<tr>
		<td>No. de control</td>
		<td>Apellido Paterno</td>
		<td>Apellido Materno</td>
		<td>Nombre(s)</td>
		<td>Carrera</td>
		<td>Generación</td>
		<td>Caja</td>
		<td>Alumno</td>
	</tr>
	<?php 
	if (isset($_POST['Buscar'])) 
	{
		if (strlen($_POST['control']) <= 0) 
		{
			echo "Ingrese el Número de la caja";
		}
		else
		{
			if (strlen($_POST['control']) > 1) 
			{
				echo "Los resultados fueron los siguientes:			";
				$nombre = trim($_POST['control']);
				$sql = "SELECT control, apellidoP, apellidoM, nombre, carrera, generacion, alumno, caja FROM alumnos WHERE caja = '$nombre'";
				if ($sql == TRUE) 
				{
					$result = mysqli_query($conexion, $sql);
					while ($mostrar = mysqli_fetch_array($result)) 
					{
						?>
							<tr>
								<td><?php echo $mostrar['control']?></td>
								<td><?php echo $mostrar['apellidoP']?></td>
								<td><?php echo $mostrar['apellidoM']?></td>
								<td><?php echo $mostrar['nombre']?></td>
								<td><?php echo $mostrar['carrera']?></td>
								<td><?php echo $mostrar['generacion']?></td>
								<td><?php echo $mostrar['caja']?></td>
								<td><?php echo $mostrar['alumno']?></td>
							</tr>
						<?php
					}
				}
				else
				{
					echo "Apellido Paterno no encontrado";
				}
			}
			else
			{
				echo "Ingrese el Número de la caja";
			}
		}
	}
	else
	{
		echo "Hubo un error al momento de presionar el boton, Intentelo de nuevo";;
	}
	?>
</table>