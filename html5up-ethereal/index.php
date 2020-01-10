<?php
	//conectamos Con el servidor
	$conectar = new mysqli('localhost','id11961169_kevin','12345678','id11961169_formularios');
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}else{

	}
	//recuperar las variables
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	//hacemos la sentencia de sql
	$sql="INSERT INTO Datos VALUES('$name',
								   '$email',
								   '$message')";
	//ejecutamos la sentencia de sql
	$ejecutar=$conectar->query($sql);
	//verificamos la ejecucion
	if(!$ejecutar){
		echo"Hubo Algun Error";
	}else{
		echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
	}
	$numero_visitantes=$conectar->query(
	"SELECT COUNT (*) FROM Datos"
	);
	fetch_row()[0]
	
?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>TrabajoSRI</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Wrapper -->
					<div id="wrapper">

						<!-- Panel (Banner) -->
							<section class="panel banner right">
								<div class="content color0 span-3-75">
									<h1 class="major">Bienvenido al<br />
									Futuro <?=$numero_visitantes?></h1>
									<p>Esto es <strong>Monitoring Cantabria (MC)</strong>, una empresa pensada para tu seguridad y futuro. Pensado para empresas que quieran saberlo todo sobre sus sistemas.</p>
									<ul class="actions">
										<li><a href="#first" class="button primary color1 circle icon solid fa-angle-right">Next</a></li>
									</ul>
								</div>
								<div class="image filtered span-1-75" data-position="25% 25%">
									<img src="images/pic01.jpg" alt="" />
								</div>
							</section>

						<!-- Panel (Spotlight) -->
							<section class="panel spotlight medium right" id="first">
								<div class="content span-7">
									<h2 class="major">¿Quienes Somos?</h2>
									<p>MC es una empresa cantabra encargada de monitorizar por ti todos tus sistemas para que siempre estes al tanto de tu infraestructura.</p>
								</div>
								<div class="image filtered tinted" data-position="top left">
									<img src="images/pic02.jpg" alt="" />
								</div>
							</section>

						<!-- Panel -->
							<section class="panel color1">
								<div class="intro joined">
									<h2 class="major">¿Cuales son nuestras soluciones?</h2>
									<p>Nosotros nos encargaremos de diagnosticar e informar sobre tus sistemas haciendote ahorrar tiempo y dinero.</p>
								</div>
								<div class="inner">
									<ul class="grid-icons three connected">
										<li><span class="icon fa-gem"><span class="label">Lorem</span></span></li>
										<li><span class="icon solid fa-camera-retro"><span class="label">Ipsum</span></span></li>
										<li><span class="icon solid fa-cog"><span class="label">Dolor</span></span></li>
										<li><span class="icon solid fa-paper-plane"><span class="label">Sit</span></span></li>
										<li><span class="icon solid fa-chart-bar"><span class="label">Amet</span></span></li>
										<li><span class="icon solid fa-code"><span class="label">Nullam</span></span></li>
									</ul>
								</div>
							</section>

						<!-- Panel (Spotlight) -->
							<section class="panel spotlight large left">
								<div class="content span-5">
									<h2 class="major">¿Donde encontrarnos?</h2>
									<p>Nos encontramos en el parque tecnologico de cantabria.</p>
								</div>
								<div class="image filtered tinted" data-position="top right">
									<img src="images/pic03.jpg" alt="" />
								</div>
							</section>

						<!-- Panel -->
							<section class="panel">
								<div class="intro color2">
									<h2 class="major">Nuestra empresa</h2>
									<p>Aqui podras ver algunas imagenes de nuestra sede.</p>
								</div>
								<div class="gallery">
									<div class="group span-3">
										<a href="images/gallery/fulls/01.jpg" class="image filtered span-3" data-position="bottom"><img src="images/gallery/thumbs/01.jpg" alt="" /></a>
										<a href="images/gallery/fulls/02.jpg" class="image filtered span-1-5" data-position="center"><img src="images/gallery/thumbs/02.jpg" alt="" /></a>
										<a href="images/gallery/fulls/03.jpg" class="image filtered span-1-5" data-position="bottom"><img src="images/gallery/thumbs/03.jpg" alt="" /></a>
									</div>
									<a href="images/gallery/fulls/04.jpg" class="image filtered span-2-5" data-position="top"><img src="images/gallery/thumbs/04.jpg" alt="" /></a>
									<div class="group span-4-5">
										<a href="images/gallery/fulls/05.jpg" class="image filtered span-3" data-position="top"><img src="images/gallery/thumbs/05.jpg" alt="" /></a>
										<a href="images/gallery/fulls/06.jpg" class="image filtered span-1-5" data-position="center"><img src="images/gallery/thumbs/06.jpg" alt="" /></a>
										<a href="images/gallery/fulls/07.jpg" class="image filtered span-1-5" data-position="bottom"><img src="images/gallery/thumbs/07.jpg" alt="" /></a>
										<a href="images/gallery/fulls/08.jpg" class="image filtered span-3" data-position="top"><img src="images/gallery/thumbs/08.jpg" alt="" /></a>
									</div>
									<a href="images/gallery/fulls/09.jpg" class="image filtered span-2-5" data-position="right"><img src="images/gallery/thumbs/09.jpg" alt="" /></a>
								</div>
							</section>

						<!-- Panel -->
							<section class="panel color4-alt">
								<div class="intro color4">
									<h2 class="major">Contacto</h2>
									<p>Puedes contactarnos desde nuestra redes sociales o enviandonos un mensaje desde nuestra pagina, para poder informarte de cualquier duda que tengas..</p>
								</div>
								<div class="inner columns divided">
									<div class="span-3-25">
										<form method="post">
											<div class="fields">
												<div class="field half">
													<label for="name">Nombre</label>
													<input type="text" name="name" id="name" />
												</div>
												<div class="field half">
													<label for="email">Email</label>
													<input type="email" name="email" id="email" />
												</div>
												<div class="field">
													<label for="message">Comentario</label>
													<textarea name="message" id="message" rows="4"></textarea>
												</div>
											</div>
											<ul class="actions">
												<li><input type="submit" value="Enviar Comentario" class="button primary" /></li>
											</ul>
										</form>
									</div>
									<div class="span-1-5">
										<ul class="contact-icons color1">
											<li class="icon brands fa-twitter"><a href="#">@MCSantander</a></li>
											<li class="icon brands fa-facebook-f"><a href="#">facebook.com/MCSantander</a></li>
											<li class="icon brands fa-snapchat-ghost"><a href="#">@MCSantander</a></li>
											<li class="icon brands fa-instagram"><a href="#">@MCSantander</a></li>
											<li class="icon brands fa-medium-m"><a href="#">medium.com/MCSantander</a></li>
										</ul>
									</div>
								</div>
							</section>

						<!-- Copyright -->
							<div class="copyright">&copy; MCSantander <a href="https://html5up.net">MCSantander</a>.</div>

					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>