<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>LMS | Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('bower_components/bower/Client/img/hust.png') }}" type="image/x-icon">

    <!-- Font awesome -->
    <link href="{{ asset('bower_components/bower/Client/css/font-awesome.css') }}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('bower_components/bower/Client/css/bootstrap.css') }}" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/bower/Client/css/slick.css') }}">          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{ asset('bower_components/bower/Client/css/jquery.fancybox.css') }}" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="{{ asset('bower_components/bower/Client/css/theme-color/default-theme.css') }}" rel="stylesheet">          

    <!-- Main style sheet -->
    <link href="{{ asset('bower_components/bower/Client/css/style.css') }}" rel="stylesheet">    


    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>

</head>
<body> 

  <!--START SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>      
  </a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header  -->
  <header id="mu-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-header-area">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-left">
                  <div class="mu-top-email">
                    <i class="fa fa-envelope"></i>
                    <span>info@hust.com</span>
                </div>
                <div class="mu-top-phone">
                    <i class="fa fa-phone"></i>
                    <span>037 435 2428</span>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="mu-header-top-right">
              <nav>
                {{-- <ul class="mu-top-social-nav">
                  <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                  <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                  <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                  <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                  <li><a href="#"><span class="fa fa-youtube"></span></a></li>
              </ul> --}}
              @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('registercustom') }}">Register</a>
                        @endif
                    @endauth
          </nav>
      </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</header>
<!-- End header  -->
<!-- Start menu -->
<section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('client.home') }}">
            {{-- <div class="float-left" style="width: 20%; height: 45px">
              <img src="{{ asset('bower_components/bower/Client/img/hust.png') }}" alt="" class="img-fluit float-left">
            </div>
            <div class="float-right" style="width: 67%"> --}}
              <span>BK - Learning Management System</span>
            {{-- </div>
                <div style="clear:both"></div> --}}

            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li class="active"><a href="{{ route('client.home') }}">Home</a></li>        
            <li><a href="{{ route('client.course') }}">{{ trans('message.course') }}</a></li>           
            <li><a href="{{ route('client.teacher') }}">{{ trans('message.teacher') }}</a></li>
            {{-- <li><a href="#" id="mu-search-icon"><i class="fa fa-search"></i></a></li> --}}
            @if(Auth::check())
            	<li><a href="{{ route('client.mycourse') }}" id="mu-search-icon">Khóa của tôi</a></li>
            @else
            <li><a href="{{ route('registercustom') }}" id="mu-search-icon">Đăng kí</a></li>
            @endif
        </ul>                     
    </div><!--/.nav-collapse -->        
</div>     
</nav>
</section>
<!-- End menu -->
<!-- Start search box -->
<div id="mu-search">
    <div class="mu-search-area">      
      <button class="mu-search-close"><span class="fa fa-close"></span></button>
      <div class="container">
        <div class="row">
          <div class="col-md-12">            
            <form class="mu-search-form">
              <input type="search" placeholder="Type Your Keyword(s) & Hit Enter">              
          </form>
      </div>
  </div>
</div>
</div>
</div>
<!-- End search box -->
@yield('client-content')

<!-- Start footer -->
<footer id="mu-footer">
    <!-- start footer top -->
    <div class="mu-footer-top">
        <div class="container">
            <div class="mu-footer-top-area">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="mu-footer-widget">
                            <h4>Information</h4>
                            <ul>
                              <li><a href="#">About Us</a></li>
                              <li><a href="">Features</a></li>
                              <li><a href="">Course</a></li>
                              <li><a href="">Event</a></li>
                              <li><a href="">Sitemap</a></li>
                              <li><a href="">Term Of Use</a></li>
                          </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="mu-footer-widget">
                            <h4>Contact</h4>
                            <h4>915 - Elearning Center - Ta Quang Buu Building - HUST</h4>
                            <address>
                              {{-- <p>P.O. Box 320, Ross, California 9495, USA</p> --}}
                              <p>Phone:  +084 3 868 3188</p>
                              {{-- <p>Website: www.markups.io</p> --}}
                              <p>Email: techsupport.elearning@hust.edu.vn</p>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- end footer top -->
<!-- start footer bottom -->
<div class="mu-footer-bottom">
  <div class="container">
    <div class="mu-footer-bottom-area">
      <p>&copy; All Right Reserved. Designed by <a href="http://www.markups.io/" rel="nofollow">Quynh</a></p>
  </div>
</div>
</div>
<!-- end footer bottom -->
</footer>
<!-- End footer -->

<!-- jQuery library -->
<script src="{{ asset('bower_components/bower/Client/js/jquery.min.js') }}"></script>  
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('bower_components/bower/Client/js/bootstrap.js') }}"></script>   
<!-- Slick slider -->
<script type="text/javascript" src="{{ asset('bower_components/bower/Client/js/slick.js') }}"></script>
<!-- Counter -->
<script type="text/javascript" src="{{ asset('bower_components/bower/Client/js/waypoints.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components/bower/Client/js/jquery.counterup.js') }}"></script>  
<!-- Mixit slider -->
<script type="text/javascript" src="{{ asset('bower_components/bower/Client/js/jquery.mixitup.js') }}"></script>
<!-- Add fancyBox -->        
<script type="text/javascript" src="{{ asset('bower_components/bower/Client/js/jquery.fancybox.pack.js') }}"></script>


<!-- Custom js -->
<script src="{{ asset('bower_components/bower/Client/js/custom.js') }}"></script> 

</body>
</html>