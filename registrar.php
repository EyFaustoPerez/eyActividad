<?php


	$conecta = mysqli_connect("localhost","root","Fausto*27","midb"); 




if(isset($_POST['Registrar']))
		{
			if(strlen($_POST['control']) >=1 &&
				strlen($_POST['apellidoP']) >=1 &&
				strlen($_POST['apellidoM']) >=1 &&
				strlen($_POST['nombre']) >=1 &&
				strlen($_POST['carrera']) >=1 &&
				strlen($_POST['generacion']) >=1 &&	
				strlen($_POST['caja']) >=1 &&
				strlen($_POST['alumno']) >=1 &&
				strlen($_POST['sex']) >=1 )
			{
				$control = trim($_POST['control']);
				$apellidoP = trim($_POST['apellidoP']);
				$apellidoM = trim($_POST['apellidoM']);
				$nombre = trim($_POST['nombre']);
				$carrera = trim($_POST['carrera']);
				$generacion = trim($_POST['generacion']);
				$caja = trim($_POST['caja']);
				$alumno = trim($_POST['alumno']);
				$sex = trim($_POST['sex']);
				

				$consulta = "INSERT INTO alumnos (control, apellidoP, apellidoM, nombre, carrera, generacion, caja, alumno, sexo) VALUES ('$control', '$apellidoP', '$apellidoM', '$nombre', '$carrera', '$generacion', '$caja', '$alumno', '$sex')";
				echo $consulta;
				if($resultado = mysqli_query($conecta, $consulta))
				{
					?>
					<script type="text/javascript">
						alert('¡Se ha registrado de manera exitosa!')
					</script>
					<?php
				}
				else
				{
					?>
					<h3 class="bad">¡Por favor complete los campos</h3>
					<?php
				}
			}
			else
			{
				?>	
				<script type="text/javascript">
					alert('Complete los campos completos por favor');
				</script>
				<?php
			}
		}
?>