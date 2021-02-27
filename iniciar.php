<?php
include("db.php");
$correo = $_POST['usuario'];
$contrase = $_POST['contrase'];

$consulta = "SELECT * FROM usuario Where correo='$correo' and contra='$contrase'";
$resultado = mysqli_query($conn,$consulta);
if (!(mysqli_num_rows($resultado)==1)) {
	$_SESSION['fallo']="Usuario o contraseño invalidos";
	header("location: login.php");
}else{
$row = mysqli_fetch_assoc($resultado);
	$_SESSION['id_u']=$row['id_u'];
	$_SESSION['nombre']=$row['nombre'];
	$_SESSION['apellidos']=$row['apellidos'];
	$_SESSION['correo']=$row['correo'];
	if(isset($_SESSION['fallo'])){
		session_unset($_SESSION['fallo']);
		} 
header("location: index.php");
}

 
?>