<?php
require_once ("consultas.php");
$menuItems = listarMenuIndex();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $mail = $_POST["mail"];
  $phone = $_POST["phone"];
  $date = $_POST["date"];
  $time = $_POST["time"];
  $people = $_POST["people"];
  $msg = $_POST["msg"];

  if (reservar($name, $mail, $phone, $date, $time, $people, $msg)) {
    $sent_message = 'prueba';
  } else {
    $error_message = 'prueba 1';
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Restaurante Quinoa</title>
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

  <style>
    .menu-item {
      text-align: center;
    }
  </style>

</head>

<body>

  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <h1>Quinoa<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="#hero">Inicio</a></li>
          <li><a href="#about">Sobre Nosotros</a></li>
          <li><a href="#menu">La Carta</a></li>
          <li><a href="#reserva">Reservar</a></li>
          <li><a href="#contact">Contacto</a></li>
        </ul>
      </nav>

      <a class="btn-book-a-table" href="iniciosesion.php">Inicia Sesión</a>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header>

  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div
          class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">Disfruta de nuestra comida vegetariana y vegana, con opciones sin gluten.
            <br>100% Ecológico.
          </h2>
          <p data-aos="fade-up" data-aos-delay="100">Desde hace más de 10 años</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="#reserva" class="btn-book-a-table">Reserva una mesa</a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="assets/img/hero-img.png" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Descubre Más</h2>
        <p><span>Sobre Nosotros</span></p>
      </div>

      <div class="row gy-4">
        <div class="col-lg-7 position-relative about-img" style="background-image: url(assets/img/about.jpg) ;"
          data-aos="fade-up" data-aos-delay="150">
          <div class="call-us position-absolute">
            <h4>Reserva una mesa</h4>
            <p>+34  666 000 111</p>
          </div>
        </div>
        <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
          <div class="content ps-0 ps-lg-5">
            <p>
              En Quinoa, nos dedicamos a ofrecer una experiencia gastronómica única y memorable que celebra la diversidad y riqueza de la cocina vegana y vegetariana. Nuestro compromiso con la calidad comienza con la selección de ingredientes frescos, 100% ecológicos y orgánicos, asegurándonos de que cada plato no solo sea delicioso, sino también nutritivo y sostenible. Nos enorgullece que el 50% de nuestros productos sean de origen local, apoyando así a los agricultores y productores de nuestra comunidad.
            </p>
            <p>
                Nuestros chefs talentosos y apasionados son verdaderos artistas culinarios, que combinan técnicas innovadoras con recetas tradicionales para crear platos que deleitan todos los sentidos. Cada creación es una obra maestra que refleja nuestra filosofía de respetar el medio ambiente mientras promovemos un estilo de vida saludable.
            </p>
            <p>
                En Quinoa, hemos creado un ambiente acogedor y elegante donde cada detalle está diseñado para tu comodidad y disfrute. Desde la decoración hasta el servicio, nos esforzamos por hacer de cada visita una experiencia especial que va más allá de una simple comida.
            </p>
            <p>
                Te invitamos a descubrir el placer de una cocina vegana y vegetariana excepcional en Quinoa. Ven y únete a nosotros para una experiencia gastronómica que recordarás mucho después de haber terminado tu última comida. Aquí, cada bocado es una celebración de sabor, salud y bienestar.
            </p>
            
          </div>
        </div>
      </div>

    </div>
  </section>

  <main id="main">

    <section id="menu" class="menu">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Menu</h2>
          <p>Nuestra <span>Carta</span></p>

          <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

            <li class="nav-item">
              <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-starters">
                <h4>Entrantes</h4>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-main">
                <h4>Platos Principales</h4>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-desserts">
                <h4>Postres</h4>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-drinks">
                <h4>Bebidas</h4>
              </a>
            </li>

          </ul>
        </div>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">
            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Entrantes</h3>
            </div>
            <div class="row gy-5">
              <?php
              foreach ($menuItems as $item) {
                if ($item['category'] === 'Entrante') {
                  echo '<div class="col-lg-4 menu-item">';
                  echo '<a href="' . $item["img"] . '" class="glightbox"><img src="' . $item["img"] . '" class="menu-img img-fluid" alt=""></a>';
                  echo '<h4>' . $item["name"] . '</h4>';
                  echo '<p class="ingredients">' . $item["descrip"] . '</p>';
                  echo '<p class="price">' . $item["price"] . '€</p>';
                  echo '</div>';
                }
              }
              ?>
            </div>
          </div>

          <div class="tab-pane fade" id="menu-main">
            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Platos Principales</h3>
            </div>
            <div class="row gy-5">
              <?php
              foreach ($menuItems as $item) {
                if ($item['category'] === 'Principal') {
                  echo '<div class="col-lg-4 menu-item">';
                  echo '<a href="' . $item["img"] . '" class="glightbox"><img src="' . $item["img"] . '" class="menu-img img-fluid" alt=""></a>';
                  echo '<h4>' . $item["name"] . '</h4>';
                  echo '<p class="ingredients">' . $item["descrip"] . '</p>';
                  echo '<p class="price">' . $item["price"] . '€</p>';
                  echo '</div>';
                }
              }
              ?>
            </div>
          </div>

          <div class="tab-pane fade" id="menu-desserts">
            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Postres</h3>
            </div>
            <div class="row gy-5">
              <?php
              foreach ($menuItems as $item) {
                if ($item['category'] === 'Postre') {
                  echo '<div class="col-lg-4 menu-item">';
                  echo '<a href="' . $item["img"] . '" class="glightbox"><img src="' . $item["img"] . '" class="menu-img img-fluid" alt=""></a>';
                  echo '<h4>' . $item["name"] . '</h4>';
                  echo '<p class="ingredients">' . $item["descrip"] . '</p>';
                  echo '<p class="price">' . $item["price"] . '€</p>';
                  echo '</div>';
                }
              }
              ?>
            </div>
          </div>

          <div class="tab-pane fade" id="menu-drinks">
            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Bebidas</h3>
            </div>
            <div class="row gy-5">
              <?php
              foreach ($menuItems as $item) {
                if ($item['category'] === 'Bebida') {
                  echo '<div class="col-lg-4 menu-item">';
                  echo '<a href="' . $item["img"] . '" class="glightbox"><img src="' . $item["img"] . '" class="menu-img img-fluid" alt=""></a>';
                  echo '<h4>' . $item["name"] . '</h4>';
                  echo '<p class="ingredients">' . $item["descrip"] . '</p>';
                  echo '<p class="price">' . $item["price"] . '€</p>';
                  echo '</div>';
                }
              }
              ?>
            </div>
          </div>

        
        </div>
      </div>
    </section>
  </main>

  <section id="reserva" class="book-a-table">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>Reserva una Mesa</h2>
        <p>Haz una <span>Reserva</span></p>
      </div>
      <div class="row g-0">
        <div class="col-lg-4 reservation-img" style="background-image: url(assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>
        <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
          <form action="#reserva" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
              <div class="col-lg-6 col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Tu Nombre" required>
              </div>
              <div class="col-lg-6 col-md-6">
                <input type="email" class="form-control" name="mail" id="mail" placeholder="Tu Correo Electrónico" required>
              </div>
              <div class="col-lg-6 col-md-6">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Tu Teléfono" required>
              </div>
              <div class="col-lg-6 col-md-6">
                <input type="date" class="form-control" name="date" id="date" placeholder="Fecha" required>
              </div>
              <div class="col-lg-6 col-md-6">
                <input type="time" class="form-control" name="time" id="time" placeholder="Hora" required>
              </div>
              <div class="col-lg-6 col-md-6">
                <input type="number" class="form-control" name="people" id="people" placeholder="# de Personas" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="msg" rows="5" placeholder="Mensaje"></textarea>
            </div>
            <div class="text-center mt-3"><button type="submit">Reserva</button></div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <footer id="footer" class="footer">
    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div>
            <h4>Dirección</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022 - US<br>
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Reservas</h4>
            <p>
              <strong>Teléfono:</strong> +34 666 000 111<br>
              <strong>Email:</strong> quinoa@ejemplo.com<br>
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Horarios</h4>
            <p>
              <strong>Lunes-Sábado: 11AM</strong> - 23PM<br>
              Domingo: Cerrado
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 footer-links d-flex">
          <i class="bi bi-share icon"></i>
          <div>
            <h4>Redes Sociales</h4>
            <div class="social-links d-flex">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>
