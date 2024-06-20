<!doctype html>
<html lang="en">

  <head>
    <title>Trips &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="/https://fonts.googleapis.com/css?family=Work+Sans:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/user/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('assets/user/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/user/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('assets/user/css/jquery.fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/user/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/user/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/user/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/user/css/aos.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('assets/user/css/style.css')}}">

    <!-- Fancybox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <style>
        .icon-play {
            width: 24px;
            height: 24px;
            background: url('path-to-your-play-icon.png') no-repeat center center;
            display: inline-block;
        }
    </style>

  </head>

   <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    
    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
          <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
              <span class="icon-close2 js-menu-toggle"></span>
            </div>
          </div>
          <div class="site-mobile-menu-body"></div>
        </div>
  
  
  
        <header class="site-navbar site-navbar-target" role="banner">
  
          <div class="container">
            <div class="row align-items-center position-relative">
  
              <div class="col-3">
                <div class="site-logo">
                  <a href="{{url('/')}}" class="font-weight-bold">
                    <img src="{{asset('assets/user/images/logo.jpg')}}" alt="Image" class="img-fluid">
                  </a>
                </div>
              </div>
  
              <div class="col-9  text-right">
                
  
                <span class="d-inline-block d-lg-none"><a href="'#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>
  
                
  
                <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                  <ul class="site-menu main-menu js-clone-nav ml-auto ">
                    <li class="active"><a href="{{url('/')}}" class="nav-link')}}">Home</a></li>
                    <li><a href="{{url('about')}}" class="nav-link">About</a></li>
                    <li><a href="{{url('trips')}}" class="nav-link">Trips</a></li>
                    <li><a href="{{url('blog')}}" class="nav-link">Blog</a></li>
                    <li><a href="{{url('contact')}}" class="nav-link">Contact</a></li>
                  </ul>
                </nav>
              </div>
  
              
            </div>
          </div>
  
        </header>

        <!--content area -->

        @yield('index_content')
        @yield('about_content')

        <!--content end -->

        <!--footer-->
        <footer class="site-footer bg-light">
            <div class="container">
              <div class="row">
                <div class="col-lg-3">
                  <h2 class="footer-heading mb-3">Let's Meet wonders</h2>
                  <div class="row">
                    <div class="col-4 gal_col">
                      <a href="{{asset('#')}}"><img src="{{asset('assets/user/images/logo.jpg')}}" alt="Image" class="img-fluid"></a>
                    </div>

                  </div>
                </div>
                <div class="col-lg-8 ml-auto">
                  <div class="row">
                    <div class="col-lg-6 ml-auto">
                      <h2 class="footer-heading mb-4">Quick Links</h2>
                      <ul class="list-unstyled">
                        <li><a href="{{asset('#')}}">About Us</a></li>
                        <li><a href="{{asset('#')}}">Testimonials</a></li>
                        <li><a href="{{asset('#')}}">Terms of Service</a></li>
                        <li><a href="{{asset('#')}}">Privacy</a></li>
                        <li><a href="{{asset('#')}}">Contact Us</a></li>
                      </ul>
                    </div>
                    <div class="col-lg-6">
                      <h2 class="footer-heading mb-4">Newsletter</h2>
                      <p>Explore New Horizons: Discover Exciting Adventures Await in Our Latest Newsletter!</p>
                      <form action="#" class="d-flex" class="subscribe">
                        <input type="text" class="form-control mr-3" placeholder="Email">
                        <input type="submit" value="Send" class="btn btn-primary">
                      </form>
                    </div>
                    
                  </div>
                </div>
              </div>
              <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                  <div class="border-top pt-5">
                    <p>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Usambara tourism festival
                  </p>
                  </div>
                </div>
      
              </div>
            </div>
          </footer>
          <!--footer end-->

    </div>

    <script src="{{asset('assets/user/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/user/js/jquery-migrate-3.0.0.js')}}"></script>
    <script src="{{asset('assets/user/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/user/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/user/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/user/js/jquery.sticky.js')}}"></script>
    <script src="{{asset('assets/user/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('assets/user/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('assets/user/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('assets/user/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('assets/user/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('assets/user/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('assets/user/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/user/js/aos.js')}}"></script>

    <script src="{{asset('assets/user/js/main.js')}}"></script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Fancybox JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script>
    $(document).ready(function() {
        $('[data-fancybox]').fancybox({
            // Customize Fancybox options if needed
        });
    });
</script>


   </body>
      