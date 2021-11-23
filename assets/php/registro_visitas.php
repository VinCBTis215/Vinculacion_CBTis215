<?php

include 'conexion_bd.php';

$nombre_completo = $_POST['nombre_completo'];
$estudiante_visitante = $_POST['estudiante_visitante'];
$correo = $_POST['correo'];

$query = "INSERT INTO visitantes(nombre_completo, estudiante_visitante, correo)
VALUES('$nombre_completo', '$estudiante_visitante', '$correo')";

$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
	echo '
	<script>
	alert("Se a registrado su visita exitosamente")
	window.location = "../registro.php";
	</script>';
}else{
	echo '
<script>
	alert("No se a registrado su visita, Intentalo nuevamente")
	window.location = "../registro.php";
	</script>';
	
}
mysqli_close($conexion);

?>