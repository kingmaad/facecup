
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>FaceCup.ir</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon" />
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800"
      rel="stylesheet"
    />

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/venobox/venobox.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- registration form -->
    <link rel="stylesheet" type="text/css" href="lib/registrationform/css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="lib/registrationform/fonts/line-awesome/css/line-awesome.min.css">
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="lib/registrationform/css/style.css"/>




    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- rtl style -->
    <link rel="stylesheet" href="css/rtl.css" />
    <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
  <script src="lib/countup/countUp.js"></script>
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
.register 
{
  font-family: "Samim" !important;
}
</style>
  </head>

  <body class="body-bg">
    <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        
        <a href="#intro" class="scrollto"><img id="logoFile" src="img/logo.png" alt="" title=""></a>
      </div>
  
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          @if (!session('user_id'))
            <li class="btn btn-success"><a href="/login">ورود</a></li>
          @else
            
            <li class="btn btn-danger"><a href="/logout">خروج</a></li> 
            <li class="btn btn-success"><a href="/dashboard">پنل کاربری</a></li> 
          @endif
          <li><a href="/aboutUs">تماس با ما</a></li>
          <li><a href="/blog">وبلاگ</a></li>
          <li><a href="#gallery">هیات داوری</a></li>
          <li><a href="/jobs">فرصت های شغلی</a></li>
  
          <li><a href="awards">جوایز</a></li>
          <li><a href="/#venue">حامیان</a></li>
          <li class="dropdown rtl">
            <a href="#">درباره مسابقه</a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a href="/generalRules">قوانین عمومی</a></li>
              <li><a href="/techRules">قوانین فنی</a></li>
            </ul>
          </li>
          <li class="menu-active"><a href="/">خانه</a></li>
          
          <li class="buy-tickets"><a href="/signupTeam">ثبت نام تیم ها</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
    <!-- #header -->

 

    <main id="main" class="main-page">
        <section id="speakers-details" class="wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
            <div class="container">
              <div class="row">
                <div class="page-content">
                    <div class="form-v2-content">
                        <div class="form-left">
                            <img src="lib/registrationform/images/form-v2.png" alt="form">

                        </div>
                        <form class="form-detail" action="/login" method="post" id="myform" >
                          @if (Session::has('message'))
                            <div class="alert alert-danger text-center">{{ Session::get('message') }}</div>
                          @endif
                            <h2 class="text-right">فرم ورود تیم</h2>
                            <div class="form-row text-right">
                                <label for="en_name">نام کاربری</label>
                                <input type="text" name="en_name" id="en_name" class="input-text english" placeholder="نام کاربری" required>
                            </div>
                            <div class="form-row text-right">
                              <label for="password">کلمه عبور</label>
                              <input type="password" name="password" id="password" class="input-text english" placeholder="کلمه عبور" required>
                          </div>

                            {{ csrf_field() }}
                            <div class="form-row-last text-center">

                                <input type="submit" name="register" class="register" value="ورود">
                            </div>
                        </form>
                    </div>
                </div>
                <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
                <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
                <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
                <script>
                    var result;
                    $( "#myform" ).validate({
                        rules: {
                          en_name: {
                              required: true,
                          },
                          password:{
                            required: true,
                          }
                      },
                          messages: {
                              en_name: {
                                  required: "لطفا نام کاربری خود را وارد کنید",
                                  
                              },
                              password: {
                                  required: "لطفا کلمه عبور را وارد کنید",
                                  
                              },
                      
                          },
                    });
                   
                </script>
              </div>
              
            </div>
          </section>
    </main>

    <!--==========================
    Footer
  ============================-->
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
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/superfish/hoverIntent.js"></script>
    <script src="lib/superfish/superfish.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/venobox/venobox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- colorlib form registration -->
        <script src="lib/colorlib/js/jquery.steps.js"></script>
	    <script src="lib/colorlib/js/main.js"></script>
    

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>

  </body>
</html>
