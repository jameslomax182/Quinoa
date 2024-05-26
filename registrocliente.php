<?php
require_once ("consultas.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Inicia Sesión</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center me-auto me-lg-0">
        <h1>Quinoa<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="index.php#about">Sobre Nosotros</a></li>
          <li><a href="index.php#menu">La Carta</a></li>
          <li><a href="index.php#reservar">Reservar</a></li>
          <li><a href="index.php#contact">Contacto</a></li>

      </nav>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>

  <main id="main">

    <div class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Registro</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="container" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title">
            <h2>Registrarse - Obten descuentos y beneficios</h2>
          </div>
          <form method="post" class="form-signin">
            <div class="mb-3">
              <label for="username" class="form-label">Nombre y apellido:<span>*</span></label>
              <input type="text" class="form-control" id="username" name="name" required>
            </div>
            <div class="mb-3 php-email-form">
              <label for="password" class="form-label">Clave:<span>*</span></label>
              <input type="password" class="form-control" id="password" name="pass" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email:<span>*</span></label>
              <input type="email" class="form-control" id="email" name="mail" required>
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Telefono:</label>
              <input type="tel" class="form-control" id="phone" name="phone">
            </div>
            <button type="submit" class="btn-book-a-table btn btn-primary btn-center"
              name="registro">Registrarse</button>
          </form>
        </div>
      </div>
    </div>
  </main>

  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Dirección</h4>
            <p>
              Elche, Alicante<br>
              <br>
            </p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservas</h4>
            <p>
              <strong>Teléfono:</strong> +34 666000111<br>
              <strong>Email:</strong> quinoa@quinoa.com<br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Horario</h4>
            <p>
              <strong>Lunes a Sábado de 13:00 a 16:00</strong><br>
              Domingos: Cerrado
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; <strong><span>Quinoa</span></strong>.
      </div>
    </div>

  </footer>
  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="assets/js/main.js"></script>

  <?php if (isset($save_register)): ?>
    <div id="successAlert" class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>¡Registro exitoso!</strong> El usuario se registró correctamente.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif; ?>

  <?php if (isset($error_register)): ?>
    <div id="errorAlert" class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error:</strong> Hubo un problema al realizar el registro.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif; ?>

  <?php if (isset($error_conexion)): ?>
    <div id="connectionErrorAlert" class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error!</strong> Hubo un problema con la conexión.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif; ?>

  <?php if (isset($characters)): ?>
    <div id="characterErrorAlert" class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error!</strong> Coloque entre 5 y 15 caracteres.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif; ?>

  <script>
    function showAlertAndRedirect(alertId, redirectUrl) {
      var alertElement = document.getElementById(alertId);
      if (alertElement) {
        alert(alertElement.textContent.trim());
        window.location.href = redirectUrl;
      }
    }

    document.addEventListener("DOMContentLoaded", function () {
      if (document.getElementById("successAlert")) {
        showAlertAndRedirect("successAlert", "indexCliente.php");
      }
      if (document.getElementById("errorAlert")) {
        showAlertAndRedirect("errorAlert", "registrocliente.php");
      }
      if (document.getElementById("connectionErrorAlert")) {
        showAlertAndRedirect("connectionErrorAlert", "registrocliente.php");
      }
      if (document.getElementById("characterErrorAlert")) {
        showAlertAndRedirect("characterErrorAlert", "registrocliente.php");
      }
    });
  </script>

</body>

</html>