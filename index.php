<?php
      require_once 'config/conexion.php';
      $username = $password = "";
      $username_err = $password_err = "";
      if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty(trim($_POST["username"]))){
        $username_err = 'Por favor, intruduzca su usuario.';
        } else{
        $username = trim($_POST["username"]);
        }
      if(empty(trim($_POST['password']))){
        $password_err = 'Por favor, introduzca su contraseña.';
      } else{
        $password = trim($_POST['password']);
      }
      if(empty($username_err) && empty($password_err)){
        $sql = "SELECT nom_user, password FROM usuario WHERE nom_user = ?";
        if($stmt = mysqli_prepare($bd, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = $username;
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1){
                    mysqli_stmt_bind_result($stmt, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            session_start();
                            $_SESSION['username'] = $username;
                            header("location: koriwasi.php");
                        } else{
                            $password_err = 'La contraseña que has introducido no es válida.';
                        }
                    }
                } else{
                    $username_err = 'No se encontró la cuenta.';
                }
            } else{
                echo "Oops! Algo salió mal. Por favor, inténtelo de nuevo más tarde.";
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($bd);
}
   ?>
<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Koriwasi</title>
  <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS Implementing Plugins -->
   <link rel="stylesheet" href="css/fontawesome-all.min.css">
   <link rel="stylesheet" href="css/animate.min.css">
   <link rel="stylesheet" href="css/slick.css">
   <!-- CSS Front Template -->
   <link rel="stylesheet" href="css/front.css">
  </head>
  <body>
    <!-- ========== MAIN ========== -->
 <main id="content" role="main">
   <!-- Form -->
   <div class="d-flex align-items-center position-relative min-height-100vh--lg">
     <!-- Navbar -->
     <header class="position-absolute-top-0 z-index-2">
       <nav class="d-flex justify-content-between align-items-center">
         <!-- Logo -->
         <div class="col-lg-5 col-xl-8 text-lg-center px-0">

         </div>
         <div class="col-lg-5 col-xl-4 text-lg-center px-0">
           <a class="d-inline-block p-3 p-sm-5" href="#" aria-label="Front">
             <img class="d-none d-lg-inline-block" src="svg/bd-io.svg" alt="Logo" style="width: 120px;">
             <!-- <img class="d-inline-block d-lg-none" src="svg/bd-io.svg" alt="Logo" style="width: 120px;"> -->
           </a>
         </div>
         <!-- End Logo -->

         <!-- Button -->
         <div class="p-3 p-sm-5">
           <a class="btn btn-sm btn-primary u-btn-primary transition-3d-hover" href="#" target="_blank">BD-IO</a>
         </div>
         <!-- End Button -->
       </nav>
     </header>
     <!-- End Navbar -->
     <div class="container">
       <div class="row no-gutters">
         <div class="col-md-8 col-lg-7 col-xl-6 offset-md-2 offset-lg-2 offset-xl-3 u-space-3 u-space-0--lg">
           <!-- Form -->
           <form class="js-validate mt-5" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
             <!-- Title -->
             <div class="mb-7">
               <h2 class="h3 text-primary font-weight-normal mb-0">Bienvenido a <span class="font-weight-bold">Koriwasi</span></h2>
               <p>Inicia sesión para empezar.</p>
             </div>
             <!-- End Title -->

             <!-- Input -->
             <div class="js-form-message mb-4">
               <label class="h6 small d-block text-uppercase">USUARIO</label>

               <div class="js-focus-state input-group u-form">
                 <input type="text" class="form-control u-form__input" name="username" required="required"
                        placeholder="Usuario"
                        aria-label="Usuario"
                        data-msg="ingrese un usuario válido."
                        data-error-class="u-has-error"
                        data-success-class="u-has-success">
               </div>
               <span class="log_error" style="color: red;"><?php echo $username_err; ?></span>
             </div>
             <!-- End Input -->
             <!-- Input -->
             <div class="js-form-message mb-4">
               <div class="d-flex justify-content-between align-items-center">
                 <label class="h6 small d-block text-uppercase">CONTRASEÑA</label>

                 <div class="mb-2">
                   <a class="small u-link-muted" href="recuva.php">¿Se te olvidó tu contraseña?</a>
                 </div>
               </div>
               <div class="js-focus-state input-group u-form">
                 <input type="password" class="form-control u-form__input" name="password" required=required
                        placeholder="********"
                        aria-label="********"
                        data-msg="Your password is invalid. Please try again."
                        data-error-class="u-has-error"
                        data-success-class="u-has-success">
               </div>
               <span class="log_error" style="color: red;"><?php echo $password_err; ?></span>
             </div>
             <!-- End Input -->
             <!-- Button -->
             <div class="row align-items-center mb-5">
               <div class="col-6">
                 <span class="small text-muted">¿No tienes una cuenta?</span>
                 <a class="small" href="registro.php">Regístrate</a>
               </div>
               <div class="col-6 text-right">
                 <button type="submit" class="btn btn-primary u-btn-primary transition-3d-hover">Iniciar Sesión</button>
               </div>
             </div>
             <!-- End Button -->
           </form>
           <!-- End Form -->
         </div>
       </div>
     </div>

          <div class="col-lg-5 col-xl-4 d-none d-lg-flex align-items-center u-gradient-half-primary-v1 min-height-100vh--lg px-0">
            <div class="w-100 p-5">
              <!-- SVG Quote -->
              <figure class="mb-5 mx-auto" style="width: 45px;">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                   viewBox="0 0 8 8" style="enable-background:new 0 0 8 8;" xml:space="preserve">

                </svg>
              </figure>
              <!-- End SVG Quote -->

              <!-- Testimonials Carousel Main -->
              <div id="testimonialsNavMain" class="js-slick-carousel u-slick mb-4"
                   data-infinite="true"
                   data-autoplay="true"
                   data-speed="5000"
                   data-fade="true"
                   data-nav-for="#testimonialsNavPagination">
                <div class="js-slide">
                  <!-- Testimonials -->
                  <div class="w-md-80 w-lg-60 text-center mx-auto">
                    <blockquote class="h5 text-white font-weight-normal mb-4">Soluciones para mantener el control de su negocio.</blockquote>
                    <!-- <h2 class="h6 u-text-light">Ver</h2> -->
                  </div>
                  <!-- End Testimonials -->
                </div>

                <div class="js-slide">
                  <!-- Testimonials -->
                  <div class="w-md-80 w-lg-60 text-center mx-auto">
                    <blockquote class="h5 text-white font-weight-normal mb-4">Utilizamos metodologías ágiles que responden a la necesidad de tu negocio.</blockquote>

                  </div>
                  <!-- End Testimonials -->
                </div>

                <div class="js-slide">
                  <!-- Testimonials -->
                  <div class="w-md-80 w-lg-60 text-center mx-auto">
                    <blockquote class="h5 text-white font-weight-normal mb-4">Desarrollo de aplicaciones móviles para el manejo de su negocio.</blockquote>

                  </div>
                  <!-- End Testimonials -->
                </div>
              </div>
              <!-- End Testimonials Carousel Main -->

              <!-- Testimonials Carousel Pagination -->
              <div id="testimonialsNavPagination" class="js-slick-carousel u-slick u-slick--transform-off u-slick--pagination-modern mx-auto"
                   data-infinite="true"
                   data-autoplay="true"
                   data-speed="5000"
                   data-center-mode="true"
                   data-slides-show="3"
                   data-is-thumbs="true"
                   data-focus-on-select="true"
                   data-nav-for="#testimonialsNavMain">

              </div>
              <!-- End Testimonials Carousel Pagination -->

              <!-- Clients -->
              <div class="position-absolute-bottom-0 text-center p-5">
                <h4 class="h6 u-text-light mb-3">Hemos colaborado con</h4>
                <div class="d-flex justify-content-center">
                  <div class="mx-4">
                    <img class="u-clients" src="svg/slack-white.svg" alt="Image Description">
                  </div>
                  <div class="mx-4">
                    <img class="u-clients" src="svg/google-white.svg" alt="Image Description">
                  </div>
                  <div class="mx-4">
                    <img class="u-clients" src="svg/spotify-white.svg" alt="Image Description">
                  </div>
                </div>
              </div>
              <!-- End Clients -->
            </div>
          </div>
   </div>
   <!-- End Form -->
 </main>
 <!-- ========== END MAIN ========== -->



    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- JS Implementing Plugins -->
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/slick.js"></script>
   <!-- JS Front -->
   <script src="js/hs.core.js"></script>
   <script src="js/hs.validation.js"></script>
   <script src="js/hs.focus-state.js"></script>
   <script src="js/hs.slick-carousel.js"></script>
   <!-- JS Plugins Init. -->
 <script>
   $(document).on('ready', function () {
     // initialization of slick carousel
     $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

     // initialization of forms
     $.HSCore.helpers.HSFocusState.init();
   });
 </script>
  </body>
</html>
