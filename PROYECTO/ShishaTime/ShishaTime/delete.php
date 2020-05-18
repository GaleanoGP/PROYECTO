<?php
// Iniciamos la sesión.
session_start();
// Guardamos la variable que ha usado el usuario para iniciar sesión, en este caso su correo. Para después realizar la consulta a la base de datos.
$correo = $_SESSION['correo'];
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!--Título de la página web.  -->
    <title>Shisha Time.</title>
	<link rel="icon" type="image/png" href="images/favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/magnific-popup.min.css">
  <link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <link rel="stylesheet" href="css/niceselect.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/flex-slider.min.css">
  <link rel="stylesheet" href="css/owl-carousel.css">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css/responsive.css">
</head>
<body class="js">
  <!--Este código lo he reutilizado de la página de inicio , puesto que será igual en todas las páginas que contenga la web , líneas 29-189 son iguales
en todas las páginas. -->
		<!-- Cabecera -->
    <header class="header shop v3">
  		<!-- Vamos a crear un primer contendeor que contenga información como teléfono y email de la tienda por una parte , la parte central estará vacía y el parte derecha
    se encontrará la dirección de la tienda y los botones de "Mi cuenta" y "Login" a estos tres últimos elementos le añadiremos un pequeño icono para estilizarlo. -->
  		<div class="topbar">
  			<div class="container">
  				<div class="inner-content">
  					<div class="row">
  						<div class="col-lg-4 col-md-12 col-12">
  							<!-- Parte izquierda de la cabecera. -->
  							<div class="top-left">
  								<ul class="list-main">
                    <!--Aquí añadimos el número y el correo. -->
  									<li><i class="ti-headphone-alt"></i> +34 651093926</li>
  									<li><i class="ti-email"></i> goshishatime@gmail.com</li>
  								</ul>
  							</div>

  						</div>
  						<div class="col-lg-8 col-md-12 col-12">
  							<!-- Parte derecha de la cabecera. -->
  							<div class="right-content">
  								<ul class="list-main">
  									<li><i class="ti-location-pin"></i> C/ Villar 1 Madrid</li>
  									<li><i class="ti-user"></i> <a href="panel-control.php">Mi cuenta.</a></li>
                    <!--Creamos un enlace sobre la palabra "Login" , que nos llevará a un formulario para iniciar sesión. -->

  									<li><i class="ti-power-off"></i><a href="login.html#">Login</a></li>
  								</ul>
  							</div>

  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
      <!--En esta parte , crearemos una segunda sección superior en la web. -->
  		<div class="middle-inner">
  			<div class="container">
  				<div class="row">
  					<div class="col-lg-2 col-md-2 col-12">
  						<!-- Aquí insertaremos el logo arriba a la izquierda.  -->
  						<div class="logo">
                <!-- Al pulsar en el logo , crearemos una referencia que nos lleve a index.php -->
  							<a href="index.php"><img src="images/shishatime.png" alt="logo"></a>
  						</div>

  						<!-- Form de búsqueda.-->
  						<div class="search-top">
  							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>

  							<div class="search-top">
  								<form class="search-form">
  									<input type="text" placeholder="Search here..." name="search">
  									<button value="search" type="submit"><i class="ti-search"></i></button>
  								</form>
  							</div>
  						</div>

  						<div class="mobile-nav"></div>
  					</div>
            <!--A continuación vamos a crear un sistema de búsqueda en el que el usuario podrá seleccionar la categoría en la que buscar-->
            <div class="col-lg-8 col-md-7 col-12">
  						<div class="search-bar-top">
  							<div class="search-bar">
                  <!--Form de búsqueda -->

                  <!--Vamos a crear un form para que al pulsar en el boton realizaremos una búsqueda en la base de datos, en la tabla productos. -->
  								<form action="buscar.php" method="POST">
                    <input type="text" name="search">
  									<button class="btnn"><i class="ti-search"></i>
  								</form>
                  <!--Fin form de búsqueda -->



  							</div>
  						</div>
  					</div>
  					<div class="col-lg-2 col-md-3 col-12">
  						<div class="right-bar">
  							<!-- Search Form -->
  							<div class="sinlge-bar">
  								<a href="#" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
  							</div>
  							<div class="sinlge-bar shopping">
  								<a href="#" class="single-icon"><i class="ti-bag"></i> <span class="total-count"></span></a>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  		<!-- Menú de navegación -->
  		<div class="header-inner">
  			<div class="container">
  				<div class="cat-nav-head">
  					<div class="row">
  						<div class="col-12">
  							<div class="menu-area">
  								<!-- Menú principal de navegación. -->
  								<nav class="navbar navbar-expand-lg">
  									<div class="navbar-collapse">
  										<div class="nav-inner">
  											<ul class="nav main-menu menu navbar-nav">
                          <!-- Empleo la class = "active" para que cuando cargue la página , aparezca como seleccionada por defecto. -->
  												<li class="active"><a href="index.php">Inicio.</a></li>
  												<li ><a href="#">Productos.<i class="ti-angle-down"></i></a>
                          <ul class="dropdown">
                            <!--Opciones que están dentro de la categoría de productos. -->
                            <li><a href="cachimbas.php">Cachimbas.</a></li>
                            <li><a href="carbon.php">Carbones.</a></li>
                            <li><a href="mangueras.php">Mangueras.</a></li>
                            <li><a href="cazoletas.php">Cazoletas.</a></li>
                          </ul>
                          </li>
  												<li><a href="#">Ofertas.</a></li>
  												<li><a href="#">Packs.</a></li>
  												<li><a href="index.php">Contacto</a></li>
  											</ul>
  										</div>
  									</div>
  								</nav>
  							</div>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</header>
		<!-- Guía de navegación , denominado "breadcrumbs" , sirve para orientar al usuario sobre qué parte de la web se encuentra. -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<ul class="bread-list">
								<li><a href="index.php">Inicio<i class="ti-arrow-right"></i></a></li>
								<li class="active"><a href="login.html">Login</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Shop Login -->
		<section class="shop login section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3 col-12">
						<div class="login-form">
							<h2>Borrar Usuario</h2>
							<?php
							// eliminamos el usuario de nuestra base de datos
								require('conexion.php');
								$query="DELETE FROM usuarios WHERE correo='$correo'";
								$resultado=$mysqli->query($query);
								//cerramos la sesión.
							  session_destroy();
							?>
							<?php
								if($resultado>0){
								?>
								<h1>Usuario Eliminado</h1>
								<?php 	}else{ ?>
								<h1>Error al Eliminar Usuario</h1>
								<?php	} ?>
								<a href="index.php">Regresar</a>
						</div>
					</div>
				</div>
			</div>
		</section>
    <!-- Footer -->
    <footer class="footer">

      <!-- Footer -->
      <footer class="footer">
        <div class="footer-top section">
          <div class="container">
            <div class="row">
              <div class="col-lg-5 col-md-6 col-12">
                <div class="single-footer about">
                  <p class="text">Tu tienda de cachimbas y accesorios por excelencia.</p>
                  <p class="call">¿Tienes dudas? Llámanos.<span><a href="tel:+34 651093926">+34 651093926</a></span></p>
                </div>
              </div>
              <div class="col-lg-2 col-md-6 col-12">
                <div class="single-footer links">
                  <h4>Información</h4>
                  <ul>
                    <li><a href="#">Sobre nosotros</a></li>
                    <li><a href="#">Faq</a></li>
                    <li><a href="#">Términos y Condiciones</a></li>
                    <li><a href="#">Contacto</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-2 col-md-6 col-12">
                <div class="single-footer links">
                  <h4>Servicio al cliente</h4>
                  <ul>
                    <li><a href="#">Métodos de pago.</a></li>
                    <li><a href="#">Devoluciones.</a></li>
                    <li><a href="#">Envíos.</a></li>
                    <li><a href="#">Política de privacidad.</a></li>
                  </ul>
                </div>
              </div>

            </div>
          </div>
        </div>
        <!--Añadimos un div que irá al final de la página donde incluiremos los métodos de pago -->
        <div class="copyright">
          <div class="container">
            <div class="inner">
              <div class="row">
                <div class="col-lg-6 col-12">
                  <div class="left">
                    <p>Copyright © 2020 Christian Galeano 2º DAW  -  All Rights Reserved.</p>
                  </div>
                </div>
                <div class="col-lg-6 col-12">
                  <div class="right">
                    <img src="images/payments.png" alt="#">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <script src="js/jquery.min.js"></script>
      <script src="js/jquery-migrate-3.0.0.js"></script>
      <script src="js/jquery-ui.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/slicknav.min.js"></script>
      <script src="js/easing.js"></script>
      <script src="js/active.js"></script>
    </body>
    </html>
