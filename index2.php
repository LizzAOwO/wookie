<?php
    Include 'conexion.php';
    $conn = conectar();
    $sql = 'SELECT * FROM cursos';
    $query = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Proyecto final</title>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="shortcut icon" href="./img2/LOGO3.png" type="image/x-icon" />
  </head>
  <body>
    <!-- #region ENCABEZADO -->
    <header class="header" id="header">
      <nav class="nav container">
        <a href="./index.php" class="nav__logo">
          <img src="./img2/LOGO3.png" alt="" class="nav__logo-img" />
          Wookie
        </a>
        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="#home" class="nav__link ">Home</a>
            </li>
            <li class="nav__item">
              <a href="#cursos" class="nav__link">Cursos</a>
            </li>
            <a href="./entrar.php" class="button button--ghost">Entrar</a>
            <a href="./registro.php" class="button button--ghost">Registrarme</a>
            <a href="./index2.php" class="button button--ghost">Touch Me!!</a>
          </ul>
          <div class="nav__close" id="nav-close">
            <i class="bx bx-x"></i>
          </div>
          <img src="./img/nav-img.png" alt="" class="nav__img" />
        </div>
        <div class="nav__toggle" id="nav-toggle">
          <i class="bx bx-grid-alt"></i>
        </div>
      </nav>
    </header>
    <!-- #endregion -->
    <!-- #region Principal-->
    <main class="main">
      <!--Menu inicial-->
      <section class="home container" id="home">
        <div class="swiper home-swiper">
          <div class="swiper-wrapper">
            <!--1 2 3-->
            <section class="swiper-slide">
              <div class="home__content grid">
                <div class="home__group">
                  <img src="./img2/LOGO3.png" alt="" class="home__img" />
                  <div class="home__indicator"></div>
                  <div class="home__details-img">
                    <h4 class="home__details-title">“El conocimiento de idiomas es la puerta a la sabiduría.”</h4>
                    <span class="home__details-subtitle">
                    -Roger Bacon</span
                    >
                  </div>
                </div>
                <div class="home__data">
                  <h3 class="home__subtitle"></h3>
                  <h1 class="home__title">
                    WOOKIE <br />
                    APRENDE <br />
                    IDIOMAS!!
                  </h1>
                  <p class="home__description">
                    Aprende idiomas en WOOKIE!!!<br />
                    Únete a nuestro equipo!, Aprende con nosotros nuevos idiomas y logra tus metas.
                    Contamos con profesores de alto nivel ¡¡nativos en el idioma!!.
                  </p>
                  <div class="home__buttons">
                    <a href="./registro.php" class="button">¡Registrate!</a>
                  </div>
                </div>
              </div>
            </section>
            <section class="swiper-slide" id="about">
              <div class="home__content grid">
                <div class="home__group">
                  <img src="./img2/MONS2.png" alt="" class="home__img" />
                  <div class="home__indicator"></div>
                  <div class="home__details-img">
                    <h4 class="home__details-title">“El conocimiento de idiomas es la puerta a la sabiduría.”</h4>
                    <span class="home__details-subtitle">
                    -Roger Bacon</span
                    >
                  </div>
                </div>
                <div class="home__data">
                  <h1 class="home__title">
                    WOOKIE
                  </h1>
                  <p class="home__description">
                    ¿Quienes somos? <br>
                    Somos un grupo dedicado a la educación en idiomas.
                    Contamos con cursos online con profesores en linea las 24 hrs.
                  </p>
                  <div class="home__buttons">
                    <a href="./registro.php" class="button">¡Registrate!</a>
                  </div>
                </div>
              </div>
            </section>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </section>
      <!--Nuestros cursos-->
      <section class="section newsletter" id="cursos">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php
              while($resultado = mysqli_fetch_array($query)){?>
                  <div class="col">
                  <div class="card text-secondary">
                    <img src="./img2/tarjeta.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $resultado['nombre'] ?></h5>
                      <p class="card-text"><?php echo $resultado['descripcion'] ?></p>
                  </div>
                </div>
              </div>
            <?php
            }
            ?></div>   
      </section>
    </main>
     <!--Pie de pagina-->
     <footer class="footer section">
      <div class="footer__container container grid">
        <div class="footer__content">
          <a href="#" class="footer__logo">
            <img src="./img2/LOGO3.png" alt="" class="footer__logo-img" />
            WOOKIE
          </a>
          <p class="footer__description">
            ¡¡Siguenos!!
          </p>
        
          <div class="footer__social">
            <a
              href="https://www.facebook.com/LizzAuwu3"
              target="_blank"
              class="footer__social-link"
            >
              <i class="bx bxl-facebook"></i>
            </a>
            <a
              href="https://www.instagram.com/lizzawate"
              target="_blank"
              class="footer__social-link"
            >
              <i class="bx bxl-instagram-alt"></i>
            </a>
            <a
              href="https://twitter.com/LizzA65751591"
              target="_blank"
              class="footer__social-link"
            >
              <i class="bx bxl-twitter"></i>
            </a>
          </div> 
          <span class="footer__copy" >&#169; WOOKIE</span>
        </div>
      <img src="./img2/MONS4.png" alt="" class="footer__img-one" />
      <img src="./img2/MONS3.png" alt="" class="footer__img-two" />
    </footer>
    <!-- #endregion -->
    <a href="#" class="scrollup" id="scroll-up">
      <i class="bx bx-up-arrow-alt scrollup__icon"></i>
    </a>
    <!--Scroll para que se revelen los elementos de forma suave-->
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <!--Deslizar elementos en una lista-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="./js/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./js/tocame.js"></script>
  </body>
</html>