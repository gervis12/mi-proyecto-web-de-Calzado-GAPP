<?php 
include("db.php");
$nombre = $_POST['nombres'];
$apellido = $_POST['apellidos'];
$correo = $_POST['correo'];
$contrase = $_POST['contrase'];
$contrase2 = $_POST['contrase2'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];

if (!($contrase==$contrase2)) {
	die("Las contraseñas no coinciden");
}
$regis = "INSERT INTO usuario values(null,'$nombre','$apellido','$correo','$contrase','$telefono','$direccion')";
$resultado = mysqli_query($conn,$regis);
if (!$resultado) {
	die("fallo al guardar");
}else{
header("location: index.html");
}

 ?>
