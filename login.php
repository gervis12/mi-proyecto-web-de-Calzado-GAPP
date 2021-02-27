<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>GAPP CALZADO</title>
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/font.css">
  </head>
  <body>
<div class="login">
  <img class="avatar" src="img/logo.jpg" alt="logo">
  <h1>Login</h1>
  <form action="iniciar.php" method="POST">
    <label for="Username">Usuario</label>
    <input type="text" name="usuario" placeholder="Username">

    <label for="Password">Contraseña</label>
    <input type="Password" name="contrase" placeholder="Password">
      <input type="submit"  value="Iniciar sesion" name="boton" />
    <a href="#">Olvidaste Tu Contraseña?</a><br>
    <a href="registro.html">Crear Usuario?</a>
    <h1 class="fallo">
    	<?php
		if(isset($_SESSION['fallo'])){
			echo $_SESSION['fallo'];
		} 
		?>
    </h1>
  </form>
 </div>



</body>
</html>
