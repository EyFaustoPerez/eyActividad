<?php 

 include ("database.php"); 
 
 
?>



<table border="1" >
   
    <?php 
    if (isset($_POST['Eliminar'])) 
    {
        if(strlen($_POST['control']) < 9 )
        {
            echo "Ingrese un numero de control valido por favor";
        }
        else
        if (strlen($_POST['control']) >= 9 )
        {
            $control = trim($_POST['control']);
            $sql= "SELECT control, apellidoP, apellidoM, nombre, carrera, generacion, alumno, caja FROM alumnos WHERE control='$control'";
            if($sql==true)
            {
                $result=mysqli_query($conex,$sql);
            while($mostrar=mysqli_fetch_array($result))
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
            $control = trim($_POST['control']);
    $sql2 = "DELETE FROM alumnos WHERE control='$control'";
    if($result=mysqli_query($conex,$sql2))
    {
        echo "El elemento fue borrado con exito y estos fueron los datos que se eliminaron. ";
    }
            
        }
        else{
            echo "El numero de control no existe, favor de verificar";
        }
    }
    

 ?>


</table>