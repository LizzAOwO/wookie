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
  />
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
              <a href="./index.php" class="nav__link ">Home</a>
            </li>
            <a href="./entrar.php" class="button button--ghost">Entrar</a>
          </ul>
          <div class="nav__close" id="nav-close">
            <i class="bx bx-x"></i>
          </div>
          <img src="./img/nav-img.png" alt="" class="nav__img"/>
        </div>
        <div class="nav__toggle" id="nav-toggle">
          <i class="bx bx-grid-alt"></i>
        </div>
      </nav>
    </header>
    <!-- #endregion -->
    <!-- #region Principal-->
    <main class="main">
      <!--Suscribirse-->
      <section class="section newsletter">
        <div class="newsletter__container container">
          <h2 class="section__title">Registro</h2>
          <p class="newsletter__description">
            ¿Tienes una cuenta? Si no es así registrate para comenzar tu aprendizaje!!
          </p>
          <div>
                <form action="agregar_usuario.php" class="form-inline" method="POST">
                    <p>
                        <input type="text" class="newsletter__form" name="usuario" placeholder="Correo">
                    </p>
                    <p> 
                        <input type="password" class="newsletter__form" name="contrasena" placeholder="Contraseña">
                    </p>
                    <p>
                        <input type="password" class="newsletter__form" name="contrasena2" placeholder="Confirmar contraseña">
                    </p>
                    <p>
                        <button type="submit" class="button" onclick="alerta()">Registrarme</button>
                    </p>
                </form>
            </div>
        </div>
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
    <script src="./js/pinerror2.js"></script>
  </body>
</html>