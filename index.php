<?php
session_start();		 
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Gapp Calzado</title>
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/font.css">
</head>
<body>
   <header class="main-header">
    	<div class="container container--flex">
	       <div class="logo-container column column--50">
			 <h1 class="logo">Gapp Calzado</h1>
		   </div>
		   <div class="main-header__contactInfo column column--50">
				<p class="main-header__contactInfo__phone">
					<span class="icon-phone-1">314 350 4888</span>
				</p>
				<p class="main-header__contactInfo__address">
					<span class="icon-location">Urb Centro 12-Lorica,Córdoba </span>
				</p>
			</div>
		</div>
   </header>
   <nav class="main-nav">
   	<div class="container container--flex">
   	 <span class="icon-menu" id="btnmenu"></span>	
   	 <ul class="menu" id="menu">
   	 	<li class="menu__item"><a href="index.html" class="menu__link menu__link--select">Inicio</a></li>
   	 	<li class="menu__item"><a href="nosotros.html" class="menu__link">Nosotros</a></li>
   	 	<li class="menu__item"><a href="galeria.html" class="menu__link">Galeria</a></li>
   	 	<li class="menu__item"><a href="contacto.html" class="menu__link">Contacto</a></li>
   	 	<?php
		 if(isset($_SESSION['id_u'])){
			 ?>
			 <h2 class="usuario">
			 <?php
			echo "".$_SESSION['nombre']." ".$_SESSION['apellidos'];
			 ?>
			</h2>
			 <li class="menu__item"><a href="cerra.php" class="menu__link">Cerrar Sesion</a></li>
			 <?php
			  }else{
			 ?>
			 <li class="menu__item"><a href="login.html" class="menu__link">login</a></li>
			 <?php
		 }
			?>
   	 </ul>
   	 <div class="social-icon">
   	 	<a href="" class="social-icon__link"><span class="icon-facebook"></span></a>
   	 	<a href="" class="social-icon__link"><span class="icon-youtube"></span></a>
   	 	<a href="" class="social-icon__link"><span class="icon-instagram"></span></a>
   	 </div>
   	</div>
   </nav>
   	<section class="banner">
   		<img src="img/20.jpg" alt="" class="banner__img">
   		<div class="banner__content">Lo Mejor En Calidad Y Estilo</div>
   	</section>
   	<main class="main">
   		<section class="group group--color">
   			<div class="container">
   				<h2 class="main__title">Bienvenidos A Su Tienda De Calzado </h2>
   				<p class="main__txt">Tenemos los mas altos estandares de calidad en calzado para damas,caballeros y niños.Y una gran variedad de estilos y colores con muy comodos precios al alcanse de tu bolsillo.</p>
   			</div>
   		</section>
   		<section class="group main__about__description">
   			<div class="container container--flex">
   				<div class="column column--50">
   					<img src="img/18.jpg" alt="">
   				</div>
   				<div class="column column--50">
   					<h3 class="column__title title_t">ZAPATOS UNDER ARMUR</h3>
   					<p class="column__txt">Zapatos UNDER ARMOUR - Ua Speedform Gemini Vent 3020661
                            Zapatillas para correr de la marca Under Armour. Caña cómodamente perfilada es textil - textil. Plantilla es textil. Suela con propiedades de amortiguación es material de alta calidad. Modelo está equipado con tecnología 8 mm Drop, Blown Rubber, Charged Cushioning, Micro G, SpeedForm. Anatómicamente perfiladas son perfectos tanto para distancias largas como cortas.</p>
   					<a href="" class="btn btn--contact">Contacto</a>
   				</div>
   			</div>
   		</section>
   		
   		<section class="group today-special">
   			<h2 class="group__title">Zapatos De Todas Las Marcas</h2>
   			<div class="container container--flex">
   				<div class="column column--50-25">
   					<img src="img/play1%20(1).jpg" alt="" class="today-special__img">
   					<div class="today-special__title">Converse</div>
   					<div class="today-special__price">$150.000</div>
   				</div>
   				<div class="column column--50-25">
   					<img src="img/play1%20(2).jpg" alt="" class="today-special__img">
   					<div class="today-special__title">Nike Boltion</div>
   					<div class="today-special__price">$200.000</div>
   				</div>
   				<div class="column column--50-25">
   					<img src="img/play1%20(3).jpg" alt="" class="today-special__img">
   					<div class="today-special__title">Vans</div>
   					<div class="today-special__price">$100.000</div>
   				</div>
   				<div class="column column--50-25">
   					<img src="img/play1%20(4).jpg" alt="" class="today-special__img">
   					<div class="today-special__title">Nike Fhasion</div>
   					<div class="today-special__price">$130.000</div>
   				</div>
   				<div class="column column--50-25">
   					<img src="img/g%20(1).jpg" alt="" class="today-special__img">
   					<div class="today-special__title">Under Armur</div>
   					<div class="today-special__price">$290.000</div>
   				</div>
   				<div class="column column--50-25">
   					<img src="img/g%20(2).jpg" alt="" class="today-special__img">
   					<div class="today-special__title">Adidas</div>
   					<div class="today-special__price">$120.000</div>
   				</div>
   				<div class="column column--50-25">
   					<img src="img/g%20(3).jpg" alt="" class="today-special__img">
   					<div class="today-special__title">Fila</div>
   					<div class="today-special__price">$230.000</div>
   				</div>
   				<div class="column column--50-25">
   					<img src="img/g%20(4).jpg" alt="" class="today-special__img">
   					<div class="today-special__title">	Under Play</div>
   					<div class="today-special__price">$240.000</div>
   				</div>
   				<div class="column column--50-25">
   					<img src="img/g%20(8).jpg" alt="" class="today-special__img">
   					<div class="today-special__title">Under Ex</div>
   					<div class="today-special__price">$190.000</div>
   				</div>
   				<div class="column column--50-25">
   					<img src="img/g%20(13).jpg" alt="" class="today-special__img">
   					<div class="today-special__title">Nike Explis</div>
   					<div class="today-special__price">$150.000</div>
   				</div>
   				<div class="column column--50-25">
   					<img src="img/g%20(14).jpg" alt="" class="today-special__img">
   					<div class="today-special__title">Adidas Xio</div>
   					<div class="today-special__price">$200.000</div>
   				</div>
   				<div class="column column--50-25">
   					<img src="img/g%20(9).jpg" alt="" class="today-special__img">
   					<div class="today-special__title">Fila Hf</div>
   					<div class="today-special__price">$210.000</div>
   				</div>	
   				<div class="column column--50-25">
   					<img src="img/g%20(11).jpg" alt="" class="today-special__img">
   					<div class="today-special__title">Nike Fhas</div>
   					<div class="today-special__price">$130.000</div>
   				</div>
   				<div class="column column--50-25">
   					<img src="img/g%20(5).jpg" alt="" class="today-special__img">
   					<div class="today-special__title">Under W</div>
   					<div class="today-special__price">$150.000</div>
   				</div>
   				<div class="column column--50-25">
   					<img src="img/zap1.jpg" alt="" class="today-special__img">
   					<div class="today-special__title">Lacoste</div>
   					<div class="today-special__price">$200.000</div>
   				</div>
   				<div class="column column--50-25">
   					<img src="img/zap2.jpg" alt="" class="today-special__img">
   					<div class="today-special__title">Nike Fem</div>
   					<div class="today-special__price">$170.000</div>
   				</div>	
   			</div>
   			
   			
   		</section>
   	</main>
	<footer class="main-footer">
   			<div class="container container--flex">
   				<div class="column column--33">
   					<h2 class="column__title">¿Por que visitarnos?</h2>
   					<p class="column__txt">Tienda virtual de venta online de zapatos para toda la familia, caballero, señora, chica, a un inmejorable precio y con constantes ofertas. Encontrarás zapatillas de estar por casa, zapatillas de deporte y mucho más.</p>
   				</div>
   				<div class="column column--33">
   					<h2 class="column__title">Contactanos</h2>
   					<p class="column__txt">Urb Centro 12,Lorica-cordoba</p>
   					<p class="column__txt">Telefono:314 350 4888</p>
   					<p class="column__txt">Gappcalzado@gmail.com</p>
   				</div>
   				<div class="column column--33">
   					<h2 class="column__title">Siguenos en nuestras redes</h2>
   					<p class="column__txt"><a href="" class="icon-facebook">GappCalzado</a></p>
   					<p class="column__txt"><a href="" class="icon-youtube">Gapp_Calzado</a></p>
   					<p class="column__txt"><a href="" class="icon-instagram">@Gapp_Calzado</a></p>
   				</div>
   				<p class="copy">© 2019  Designed by Gervis_Pajaro ǀ Todos los drechos reservados </p>
   			</div>
   		</footer>
   	<script src="js/menu.js"></script>	   	
</body>
</html>