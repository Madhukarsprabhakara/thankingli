<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Title -->
  <title>Thankingli - Login</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../favicon.ico">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="unify/html/assets/vendor/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="unify/html/assets/vendor/icon-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="unify/html/assets/vendor/icon-hs/style.css">
  <link rel="stylesheet" href="unify/html/assets/vendor/animate.css">
  <link rel="stylesheet" href="unify/html/assets/vendor/hs-megamenu/src/hs.megamenu.css">
  <link rel="stylesheet" href="unify/html/assets/vendor/hamburgers/hamburgers.min.css">

  <!-- CSS Unify -->
  <link rel="stylesheet" href="unify/html/assets/css/unify-core.css">
  <link rel="stylesheet" href="unify/html/assets/css/unify-components.css">
  <link rel="stylesheet" href="unify/html/assets/css/unify-globals.css">

  <!-- CSS Customization -->
  <link rel="stylesheet" href="unify/html/assets/css/custom.css">
</head>

<body>
  @include('analyticstracking')
  <main>



    <!-- Header -->
    <header id="js-header" class="u-header u-header--sticky-top">
      <div class="u-header__section u-header__section--light g-bg-white g-transition-0_3 g-py-10">
        <nav class="js-mega-menu navbar navbar-expand-lg hs-menu-initialized hs-menu-horizontal">
          <div class="container">
            <!-- Responsive Toggle Button -->
            <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-3 g-right-0" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
              <span class="hamburger hamburger--slider">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
              </span>
              </span>
            </button>
            <!-- End Responsive Toggle Button -->

            <!-- Logo -->
            <a href="/" class="navbar-brand">
              <!-- <img src="unify/html/assets/img/logo/logo-1.png" alt="Unify Logo"> -->
              <h3>thankingli</h3>
            </a>
            <!-- End Logo -->

            <!-- End Navigation -->

            
          </div>
        </nav>
      </div>
    </header>
    <!-- End Header -->

    <!-- Login -->
    <section class=" g-bg-blue-lineargradient-v3">
      <div class="container g-py-100">
        <div class="row justify-content-center">
          <div class="col-sm-8 col-lg-5">
            <div class="u-shadow-v21 g-bg-white rounded g-py-40 g-px-30">
              <header class="text-center mb-4">
                <h2 class="h2 g-color-black g-font-weight-600">Log In</h2>
              </header>

              <!-- Form -->
              <form class="g-py-15" method="POST" action="/loginv4">
                {{ csrf_field() }}
                <div class="mb-4">
                  <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Email:</label>
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15" id="email" type="email" name="email" placeholder="Email" required>
                  @if ($errors->has('email'))
                        <div class="alert alert-danger" role="alert">
                          <strong>Oh snap!</strong> {{ $errors->first('email') }}
                        </div>
                      @endif 
                </div>

                <div class="g-mb-35">
                  <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Password:</label>
                  <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15 mb-3"  id="password" type="password" name="password" placeholder="Password" required>
                  @if ($errors->has('password'))
                        <div class="alert alert-danger" role="alert">
                          <strong>Oh snap!</strong> {{ $errors->first('password') }}
                        </div>
                      @endif 
                  <div class="row justify-content-between">
                    <div class="col align-self-center">
                      <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-12 g-pl-25 mb-0">
                        <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" name="remember" type="checkbox">
                        <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                          <i class="fa" data-check-icon="&#xf00c"></i>
                        </div>
                        Keep signed in
                      </label>
                    </div>
                    <div class="col align-self-center text-right">
                      <a class="g-font-size-12" href="{{ route('password.request') }}">Forgot password?</a>
                    </div>
                  </div>
                </div>

                <div class="mb-4">
                  <button class="btn btn-md btn-block u-btn-primary rounded g-py-13" type="submit">Login</button>
                </div>
              </form>
              <!-- End Form -->

              <footer class="text-center">
                <p class="g-color-gray-dark-v5 g-font-size-13 mb-0">Don't have an account? <a class="g-font-weight-600" href="/">Sign Up</a>
                </p>
              </footer>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Login -->

      <!-- Footer -->
<footer class="g-bg-secondary g-pt-30 g-pb-10">
  <div class="container">
    

    <!-- Footer Copyright -->
    <div class="row justify-content-lg-center align-items-center text-center">
      <div class="col-sm-6 col-md-4 col-lg-3 order-md-3 g-mb-30">
        <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#">
          <i class="align-middle mr-2 icon-real-estate-027 u-line-icon-pro"></i>
          Santa Clara, CA, United States
        </a>
      </div>

      

      <div class="col-md-4 col-lg-3 order-md-1 g-mb-30">
        <p class="g-color-gray-dark-v4 mb-0">© 2018 Thankingli. All Rights Reserved.</p>
      </div>
    </div>
    <!-- End Footer Copyright -->
  </div>
</footer>
<!-- End Footer -->
    <a class="js-go-to u-go-to-v1" href="#!" data-type="fixed" data-position='{
     "bottom": 15,
     "right": 15
   }' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
      <i class="hs-icon hs-icon-arrow-top"></i>
    </a>
  </main>

  <div class="u-outer-spaces-helper"></div>


  <!-- JS Global Compulsory -->
  <script src="unify/html/assets/vendor/jquery/jquery.min.js"></script>
  <script src="unify/html/assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
  <script src="unify/html/assets/vendor/popper.min.js"></script>
  <script src="unify/html/assets/vendor/bootstrap/bootstrap.min.js"></script>


  <!-- JS Implementing Plugins -->
  <script src="unify/html/assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>

  <!-- JS Unify -->
  <script src="unify/html/assets/js/hs.core.js"></script>
  <script src="unify/html/assets/js/components/hs.header.js"></script>
  <script src="unify/html/assets/js/helpers/hs.hamburgers.js"></script>
  <script src="unify/html/assets/js/components/hs.tabs.js"></script>
  <script src="unify/html/assets/js/components/hs.go-to.js"></script>

  <!-- JS Customization -->
  <script src="unify/html/assets/js/custom.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');
      });

      $(window).on('load', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
          event: 'hover',
          pageContainer: $('.container'),
          breakpoint: 991
        });
      });

      $(window).on('resize', function () {
        setTimeout(function () {
          $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
      });
  </script>







</body>

</html>
