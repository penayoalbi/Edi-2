<?php
include("con_conexion_bd.php");
//si se presionó registro
if(isset($_POST['registrar'])){
	//verifico si estan vacios
	if(strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['edad'])&& strlen($_POST['email'])){
		$nombre= trim($_POST['nombre']);//remueve espacio de inicio- final 
		$apellido= trim($_POST['apellido']);
		$edad= trim($_POST['edad']);
		$email= trim($_POST['email']);
		$fecha_reg=date("d/m/y");
		
		$consulta= "INSERT INTO usuarios(nombre, apellido, edad, email, fecha_reg) VALUES ('$nombre','$apellido','$edad','$email','$fecha_reg')"; 
		
		$resultado=mysqli_query($conex,$consulta);
		if($resultado){
			echo"<h2> class='ok' >Se registro correctamente</h2>";
			
		}else{
			
			echo "<h2 class='error'> UPS! hubo un error</h2>";
		}
}
}
?>