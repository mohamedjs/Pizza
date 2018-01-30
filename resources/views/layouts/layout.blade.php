  <!DOCTYPE html>
 <html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Primos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="../css/slide.css">
	<!-- Animate.css -->
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="../css/simple-line-icons.css">
	<!-- Datetimepicker -->
	<link rel="stylesheet" href="../css/bootstrap-datetimepicker.min.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="../css/flexslider.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/product.css">


	<!-- Modernizr JS -->
	<script src="../js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <a class="navbar-brand" href="/">Primos</a>
          <ul class="nav navbar-nav">
            <li><a href="/">HOME</a></li>
            @foreach ($cat as $ca)
            <li class="dropdown">
                <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  {{$ca->category_name}}
                </a>
                <ul class="dropdown-menu dropdown-menu-right" role="menu">
                  @foreach ($ca->subs as $sub)
                    <li>
                      <a href="type/{{$sub->id}}">{{$sub->sub_name}}</a>
                    </li>
                    @endforeach
                </ul>
            </li>
            @endforeach
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <ul class="nav navbar-nav navbar-right">
              @guest
              <li class="dropdown">
                <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  <i class="fa fa-lock"></i>Login
                </a>
                  <ul class="dropdown-menu dropdown-menu-right" role="menu">
                    <div id="abc">
                    <!-- Popup Div Starts Here -->
                    <div id="popupContact">
                    <!-- Contact Us Form -->
                    <form id="form" name="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <img id="close" src="../../images/3.png" onclick ="div_hide()">
                        <h2>Register</h2>
                        <hr>
                        <input id="name" type="text" placeholder="User Name" class="form-control" name="name" value="{{ old('name') }}" required>
                        <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required>
                        <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>
                        <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required>
                        <input id="password-confirm" type="text" placeholder="City" class="form-control" name="city" required>
                        <input id="password-confirm" type="text" placeholder="Address" class="form-control" name="address" required>
                        <br>
                        <button  id="submit" type="submit" class="btn btn-primary">
                            Register
                        </button>
                        </form>
                    </div>
                    <!-- Popup Div Ends Here -->
                    </div>
                      <li>
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <div class="col-md-10 col-md-offset-1">
                                    <input id="email" type="email" placeholder="enter email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <div class="col-md-10 col-md-offset-1">
                                    <input id="password" type="password" placeholder="enter password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-2">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-10 col-md-offset-2">
                                    <button type="submit" class="btn btn-primary" style="width:80%;">
                                        Login
                                    </button>
                                    <a id="popup" onclick="div_show()" class="btn btn-primary" style="width:80%;">
                                        rgister
                                    </a>
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="float:right;">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                        </form>
                      </li>
                  </ul>
              </li>
              @else
              <li>
                  <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                      Logout
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
              </li>
              @endguest
            <li id="normal-cart">
              <a id="normal-carts" href="" data-toggle="dropdown"> <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs" id="navbar-totals">@guest 0 @else{{count($offer)}}@endguest</span> Items</a>
              <div id="mini-cart" class="dropdown-menu">
                @guest
                <p></p>
                @else
                @foreach($offer as $off)
                <div class="col-md-8">
                  <h4>{{$off->pizza_name}}</h4>
                </div>
                <div class="col-md-4">
                  <h4>{{$off->pivot->price}}</h4>
                </div>
                @endforeach
                @endguest
              </div>
            </li>
            <li id="mobile-cart">
              <a href="//urban-essence.lemonstand.com/cart"><i class="fa fa-shopping-cart"></i></a>
            </li>
          </ul>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="slideshowe">
        @foreach ($pizza->slice(0,3) as $piz)
        <div class="mySlidese fadee">
          <a href="pizz/{{$piz->id}}"> <img src="{{$piz->pizza_image}}" style="width:100%;height:640px"></a>
        </div>
        @endforeach
        <a class="nexte" onclick="plusSlides(-1)">&#10095;</a>
        <a class="preve" onclick="plusSlides(1)">&#10094;</a>
    </div>
  	     @yield('content')
         <footer class="parallax-section">
     			<div class="container">
     				<div class="row">
     					<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
     						<h2 class="heading">Contact Info.</h2>
     						<div class="ph">
     							<p><i class="fa fa-phone"></i> Phone</p>
     							<h4>090-080-0760</h4>
     						</div>
     						<div class="address">
     							<p><i class="fa fa-map-marker"></i> Our Location</p>
     							<h4>120 Duis aute irure, California, USA</h4>
     						</div>
     					</div>
     					<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
     						<h2 class="heading">Open Hours</h2>
     							<p>Sunday <span>10:30 AM - 10:00 PM</span></p>
     							<p>Mon-Fri <span>9:00 AM - 8:00 PM</span></p>
     							<p>Saturday <span>11:30 AM - 10:00 PM</span></p>
     					</div>
     					<div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
     						<h2 class="heading">Follow Us</h2>
     						<ul class="social-icon">
     							<li><a href="#" class="fa fa-facebook wow bounceIn" data-wow-delay="0.3s"></a></li>
     							<li><a href="#" class="fa fa-twitter wow bounceIn" data-wow-delay="0.6s"></a></li>
     							<li><a href="#" class="fa fa-behance wow bounceIn" data-wow-delay="0.9s"></a></li>
     							<li><a href="#" class="fa fa-dribbble wow bounceIn" data-wow-delay="0.9s"></a></li>
     							<li><a href="#" class="fa fa-github wow bounceIn" data-wow-delay="0.9s"></a></li>
     						</ul>
     					</div>
     				</div>
     				<div class="col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.6s">
     					<h3>Primos</h3>
     					<p>Copyright © Primos Restaurant and Cafe
     									| Design: <a rel="nofollow" href="http://www.tooplate.com" target="_parent">Mohamed Mahmoud</a></p>
     				</div>
     			</div>
     		</footer>
     	</div>
     	<!-- jQuery -->
     	<script src="../js/jquery.min.js"></script>
     	<script src="../js/jquery-migrate-1.1.1.js"></script>
     	<script src="../js/superfish.js"></script>
     	<script src="../js/jquery.easing.1.3.js"></script>
     	<script src="../js/sForm.js"></script>
     	<script src="../js/jquery.carouFredSel-6.1.0-packed.js"></script>
     	<script src="../js/tms-0.4.1.js"></script>
     	<script>
     	$(window).load(function () {
     	    $('.carousel1').carouFredSel({
     	        auto: false,
     	        prev: '.prev',
     	        next: '.next',
     	        width: 960,
     	        items: {
     	            visible: {
     	                min: 1,
     	                max: 4
     	            },
     	            height: 'auto',
     	            width: 240,
     	        },
     	        responsive: false,
     	        scroll: 1,
     	        mousewheel: false,
     	        swipe: {
     	            onMouse: false,
     	            onTouch: false
     	        }
     	    });
     	});
      var slideIndexx = 0;
      showSlidess();
      function showSlidess() {
          var i;
          var slidess = document.getElementsByClassName("mySlidese");
          for (i = 0; i < slidess.length; i++) {
              slidess[i].style.display = "none";
          }
          slideIndexx++;
          if (slideIndexx> slidess.length) {slideIndexx = 1;}
          slidess[slideIndexx-1].style.display = "block";
          setTimeout(showSlidess, 8000); // Change image every 2 seconds
      }
      var slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlidese");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex-1].style.display = "block";
      }
     	</script>
     	<!-- jQuery Easing -->
     	<script src="../js/jquery.easing.1.3.js"></script>
     	<!-- Bootstrap -->
     	<script src="../js/bootstrap.min.js"></script>
     	<!-- Bootstrap DateTimePicker -->
     	<script src="../js/moment.js"></script>
     	<script src="../js/bootstrap-datetimepicker.min.js"></script>
     	<!-- Waypoints -->
     	<script src="../js/jquery.waypoints.min.js"></script>
     	<!-- Stellar Parallax -->
     	<script src="../js/jquery.stellar.min.js"></script>

     	<!-- Flexslider -->
     	<script src="../js/jquery.flexslider-min.js"></script>
     	<script>
     		$(function () {
     	       $('#date').datetimepicker();
     	   });
     	</script>
     	<!-- Main JS -->
     	<script src="../js/main.js"></script>
      <script src="../../js/js.js"></script>
  </body>
</html>
