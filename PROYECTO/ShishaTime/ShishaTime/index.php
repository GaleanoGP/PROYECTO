<?php
session_start();
// compruebo si el valor de la superglobal SESSION está vacío

if (empty($_SESSION['correo'])) {
  // si no existe ningun valor asignado a la variable correo, dejamos la variable vacía, para más tarde comprobar en caso de que sea así mostrar Login.

  $correo="";
}
else {
  //En caso contrario , si hay una sesión activa, asignamos el valor de la superglobal SESSION a la variable $correo. Para mostrar Logout

  $correo=$_SESSION['correo'];
}
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
  <!--En la siguiente línea de código establecemos la imagen  que aparecerá en el navegador. -->

	<link rel="icon" type="image/png" href="images/favicon.png">
  <!--Aquí hacemos referencia a todo lo relacionado con el código css y efectos. -->

	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <link rel="stylesheet" href="css/niceselect.css">
  <link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="style.css">
</head>
<!--Comienza el body -->

<body class="js">
	<!-- Comienza el header -->

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
                  <li><i class="ti-user"></i><a href="panel-control.php">Mi cuenta.</a></li>
                    <?php
                    //Comprobamos si la variable correo que hemos definido en la parte inicial del archivo está vacía.

                    if (empty($correo)) {
                      //si está vacía mostramos el login para que el usuario pueda iniciar sesión

                      echo( '<li><i class="ti-power-off"></i><a href="login.html#">Login</a></li>');
                      }
                      else {
                        echo ('<li><i class="ti-power-off"></i><a href="logout.php">Logout</a></li>');
                      }
                      ?>
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
                  <!-- Al pulsar en el logo , crearemos una referencia que nos lleve a index.html -->

                  <a href="index.php"><img src="images/shishatime.png" alt="logo"></a>
                </div>
                <div class="mobile-nav"></div>
              </div>
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
              </div>
            </div>
          </div>
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

                              <li class="active"><a href="#">Inicio.</a></li>
                              <li ><a href="#">Productos.<i class="ti-angle-down"></i></a>
                                <ul class="dropdown">
                                  <!--Opciones que están dentro de la categoría de productos. -->

                                  <li><a href="cachimbas.php">Cachimbas.</a></li>
                                  <li><a href="carbon.php">Carbones.</a></li>
                                  <li><a href="mangueras.php">Mangueras.</a></li>
                                  <li><a href="cazoletas.php">Cazoletas.</a></li>
                                </ul>
                              </li>
                              <li><a href="ofertas.php">Ofertas.</a></li>
                              <li><a href="pack.php">Packs.</a></li>
                              <li><a href="contacto.php">Contacto</a></li>
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
        <!--Fin header -->
        <section class="hero-area4">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="home-slider-4">
                  <div class="big-content" style="background-image: url('images/Pack01.jpg');">
                    <div class="inner">
                      <h4 class="title">Packs</h4>
                      <p class="des">Aprovecha los packs.</p>
                      <div class="button">
                        <a href="pack.php" class="btn">Comprar.</a>
                      </div>
                    </div>
                  </div>
                  <div class="big-content" style="background-image: url('images/Ofertas01.jpg');">
                    <div class="inner">
                      <h4 class="title">Ofertas</h4>
                      <p class="des">Nuevas ofertas cada día</p>
                      <div class="button">
                        <a href="ofertas.php" class="btn">Comprar.</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Voy a crear un banner con tres productos que interesa que se vendan más rápidamente  -->
        <section class="small-banner section">
          <div class="container">
            <div class="row">
              <!-- Primer producto. -->

              <div class="col-lg-4 col-md-6 col-12">
                <div class="single-banner">
                  <img src="images/Alpha01.jpg" alt="#">
                  <div class="content">
                    <p>Alpha</p>
                    <a href="cachimbas.php">Ir.</a>
                  </div>
                </div>
              </div>
              <!--Segundo producto -->
              <div class="col-lg-4 col-md-6 col-12">
                <div class="single-banner">
                  <img src="images/Wookah01.jpg" alt="#">
                  <div class="content">
                    <p>Wookah</p>
                    <a href="cachimbas.php">Ir.</a>
                  </div>
                </div>
              </div>
              <!--Tercer producto -->
              <div class="col-lg-4 col-12">
                <div class="single-banner tab-height">
                  <img src="images/Geometry01.jpg" alt="#">
                  <div class="content">
                    <p>Geometry</p>
                    <a href="cachimbas.php">Ir</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Servicios  -->
        <section class="shop-services section home">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-12">
                <div class="single-service">
                  <i class="ti-rocket"></i>
                  <h4>Envío gratis.</h4>
                  <p>Pedidos superiores a 70€</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12">
                <div class="single-service">
                  <i class="ti-reload"></i>
                  <h4>Devolución gratis.</h4>
                  <p>14 días para devolución</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12">
                <div class="single-service">
                  <i class="ti-lock"></i>
                  <h4>Pagos seguros.</h4>
                  <p>100% seguros</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-12">
                <div class="single-service">
                  <i class="ti-tag"></i>
                  <h4>El mejor precio</h4>
                  <p>Los precios más bajos.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Sección de suscripción al boletín de noticias.  -->
        <section class="shop-newsletter section">
          <div class="container">
            <div class="inner-top">
              <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                  <div class="inner">
                    <h4>Boletín de noticias.</h4>
                    <!--OJO REVISAR ESTO -->
                    <form action="" method="get" target="_blank" class="newsletter-inner">
                      <input name="EMAIL" placeholder="E-mail" required="" type="email">
                      <button class="btn">Suscribirse.</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
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
