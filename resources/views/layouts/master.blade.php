
<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('app.name') }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400" rel="stylesheet">
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="{{ asset('frontend/css/icomoon.css') }}">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">

  <!-- Owl Carousel -->
  <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">

  <!-- Theme style  -->
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

  <!-- Modernizr JS -->
  <script src="{{ asset('frontend/js/modernizr-2.6.2.min.js') }}"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="{{ asset('frontend/js/respond.min.js') }}"></script>
  <![endif]-->

  </head>
  <body>
    
  <div class="colorlib-loader"></div>

  <div id="page">
    <nav class="colorlib-nav" role="navigation">
      <div class="top-menu">
        <div class="container">
          <div class="row">
            <div class="col-md-2">
              <div id="colorlib-logo"><a href="{{ url('/') }}">{{ config('app.name') }}</a></div>
            </div>
            <div class="col-md-10 text-right menu-1">
              <ul>
                <li class="active"><a href="{{ url('/') }}">Home</a></li>
                {{-- <li class="has-dropdown">
                  <a href="work.html">Works</a>
                  <ul class="dropdown">
                    <li><a href="work-grid.html">Works grid with text</a></li>
                    <li><a href="work-grid-without-text.html">Works grid w/o text</a></li>
                  </ul>
                </li> --}}
                <li><a href="#features">Features</a></li>
                 <li><a href='{{ url("login") }}'>Login</a></li>
                {{-- <li><a href="blog.html">Blog</a></li> --}}
                {{-- <li><a href="about.html">About</a></li> --}}
                {{-- <li><a href="shop.html">Shop</a></li> --}}
                {{-- <li><a href="contact.html">Contact</a></li> --}}
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>

    @yield('content');    

    <footer id="colorlib-footer">      
      <div class="copy">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <p>
                 <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://kindlebit.com" target="_blank">Kindlebit</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
  </div>
  
  <!-- jQuery -->
  <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
  <!-- jQuery Easing -->
  <script src="{{ asset('frontend/js/jquery.easing.1.3.js') }}"></script>
  <!-- Bootstrap -->
  <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
  <!-- Waypoints -->
  <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
  <!-- Stellar Parallax -->
  <script src="{{ asset('frontend/js/jquery.stellar.min.js') }}"></script>
  <!-- YTPlayer -->
  <script src="{{ asset('frontend/js/jquery.mb.YTPlayer.min.js') }}"></script>
  <!-- Owl carousel -->
  <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
  <!-- Magnific Popup -->
  <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('frontend/js/magnific-popup-options.js') }}"></script>
  <!-- Counters -->
  <script src="{{ asset('frontend/js/jquery.countTo.js') }}"></script>
  <!-- Main -->
  <script src="{{ asset('frontend/js/main.js') }}"></script>

  </body>
</html>

