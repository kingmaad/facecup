
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>FaceCup.ir</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon" />
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
      rel="stylesheet"
    />

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Libraries CSS Files -->
    <link href="{{ asset('/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/lib/animate/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/lib/venobox/venobox.css') }}" rel="stylesheet" />
    <link href="{{ asset('/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet" />

    <!-- registration form -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/lib/registrationform/css/roboto-font.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/lib/registrationform/fonts/line-awesome/css/line-awesome.min.css') }}">
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="{{ asset('/lib/registrationform/css/style.css') }}"/>




    <!-- Main Stylesheet File -->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" />
    <!-- rtl style -->
    <link rel="stylesheet" href="{{ asset('/css/rtl.css') }}" />
    <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
  <script src="{{ asset('/lib/countup/countUp.js') }}"></script>
<script>
var isShown = false;
  window.addEventListener('scroll', function() {
    if (checkVisible($('#speakers')) && !isShown) {
        countUP();
        isShown = true;
    } 
});

function checkVisible( elm, eval ) {
    eval = eval || "visible";
    var vpH = $(window).height(), // Viewport Height
        st = $(window).scrollTop(), // Scroll Top
        y = $(elm).offset().top,
        elementHeight = $(elm).height();
    
    if (eval == "visible") return ((y < (vpH + st)) && (y > (st - elementHeight)));
    if (eval == "above") return ((y < (vpH + st)));
}

function countUP()
{
  var el = function (id) {
    return document.getElementById(id);
  };
  const options = {
  duration: 5,
  useGrouping: false,
};
let c1 = new CountUp('c1Element', 20, options);
console.log(c1);
if (!c1.error) {
  console.log('ok');
  c1.start();
  } else {
    console.error(c1.error);
}

let c2 = new CountUp('c2Element', 10, options);
if (!c2.error) {
  c2.start();
  } else {
    console.error(c2.error);
}

let c3 = new CountUp('c3Element', 50, options);
if (!c3.error) {
  c3.start();
  } else {
    console.error(c3.error);
}
}

</script>
<style>
  /* make active item container fill height of viewport using flexbox */
.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
    flex: 1 0 100%;
}

/* fix transitioning item height */
.carousel-item-next:not(.carousel-item-left),
.active.carousel-item-right,
.carousel-item-prev:not(.carousel-item-right),
.active.carousel-item-left {
    flex: 0 0 0;
}

/* make images fill height and width or clip */
.carousel-item {
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}
.soft-vibrate {
  animation: shake 2s;
  animation-iteration-count: infinite;
}

@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}

.vibrate{
  animation: shake2 2s;
  animation-iteration-count: infinite;
}

@keyframes shake2 {
  0% { transform: skewX(-15deg); }
  5% { transform: skewX(15deg); }
  10% { transform: skewX(-15deg); }
  15% { transform: skewX(15deg); }
  20% { transform: skewX(0deg); }
  100% { transform: skewX(0deg); }  
}

.fadeInUpBig {
  -webkit-animation-name: fadeInUpBig;
  animation-name: fadeInUpBig;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  }
  @-webkit-keyframes fadeInUpBig {
  0% {
  opacity: 0;
  -webkit-transform: translate3d(0, 2000px, 0);
  transform: translate3d(0, 2000px, 0);
  }
  100% {
  opacity: 1;
  -webkit-transform: none;
  transform: none;
  }
  }
  @keyframes fadeInUpBig {
  0% {
  opacity: 0;
  -webkit-transform: translate3d(0, 2000px, 0);
  transform: translate3d(0, 2000px, 0);
  }
  100% {
  opacity: 1;
  -webkit-transform: none;
  transform: none;
  }
  } 
  .carousel-inner > .item {
    position: relative;
    display: none;
    -webkit-transition: 0.6s ease-in-out left;
    -moz-transition: 0.6s ease-in-out left;
    -o-transition: 0.6s ease-in-out left;
    transition: 0.6s ease-in-out left;
}

</style>
@include('sections.head')
  </head>

  <body class="body-bg">
    @include('sections.header-menu')
    <main id="main" class="main-page">
      <!--==========================
      Speaker Details Section
    ============================-->
  
<section class="home-blog bg-sand rtl">
    <div class="container">
        <!-- section title -->
        <br><br><br><br>

		<div class="row mb-5">
			<div class="col-md-12">
				<div class="media blog-media bg-white p-2 rounded">
				  <a href="blog-post-left-sidebar.html"><img class="d-flex" height="200" src="{{ url($post->img) }}" alt="Generic placeholder image"></a>
				  <div class="circle">
				  	<h5 class="day"></h5>
				  	<span class="month"></span>
				  </div>
				  <div class="media-body text-right p-4">
            <h1>{{ $post->title }}</h1>
            {!! $post->body !!}
          </div>
				</div>
      </div>
    </div>
	</div>
</section> 
    </main>

     <!--==========================
    Footer
  ============================-->
  <br><br><br>
  <footer id="footer">
     

    <div class="container">
      <div class="copyright">
        © ۱۳۹9 | تمامی حقوق این وب سایت متعلق به فیسکاپ می باشد. | Powered by facecup

      </div>
    
    </div>
  </footer>
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="{{ asset('/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('/lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('/lib/superfish/hoverIntent.js') }}"></script>
  <script src="{{ asset('/lib/superfish/superfish.min.js') }}"></script>
  <script src="{{ asset('/lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('/lib/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('/lib/owlcarousel/owl.carousel.min.js') }}"></script>



  <!-- colorlib form registration -->
      <script src="{{ asset('/lib/colorlib/js/jquery.steps.js') }}"></script>
      <script src="{{ asset('/lib/colorlib/js/main.js') }}"></script>
  

  <!-- Template Main Javascript File -->
  <script src="{{ asset('/js/main.js') }}"></script>

</body>
</html>
