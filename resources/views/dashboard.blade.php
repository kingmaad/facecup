
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
/*
 * Globals
 */

/* Links */
a,
a:focus,
a:hover {
  color: #fff;
}

/* Custom default button */
.btn-secondary,
.btn-secondary:hover,
.btn-secondary:focus {
  color: #333;
  text-shadow: none; /* Prevent inheritance from `body` */
  background-color: #fff;
  border: .05rem solid #fff;
}







/*
 * Cover
 */
.cover {
  padding: 0 1.5rem;
}
.cover .btn-lg {
  padding: .75rem 1.25rem;
  font-weight: 700;
}



</style>
  </head>

  <body class="body-bg text-center">
    @include('sections.header-menu')    <main id="main" class="main-page">
      <!--==========================
      Speaker Details Section
    ============================-->
  
<section class="home-blog bg-sand rtl">
    <div class="container bg-white p-5" >
      <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  

        <main role="main" class="inner cover mb-5">
          <h1 class="cover-heading">داشبورد تیم</h1>
          <p class="lead">تیم {{ $team_name }} عزیز، خوش آمدید</p>
          <div id="37464254977"><script type="text/JavaScript" src="https://www.aparat.com/embed/OLHWJ?data[rnddiv]=37464254977&data[responsive]=yes"></script></div>
          <p class="text-justify h5 pt-5" style="line-height: 40px;">
            شما میتوانید پس از تکمیل ثبت نام، فایلهای راهنما و داده های نمونه را دانلود کنید. پس از نهایی سازی کدهای خود تا تاریخ 15 بهمن ماه فرصت دارید که فایل های موتور خود را در قالب داکر با فرمت مشخص شده در بخش <a href="/techRules" class="text-info">قوانین فنی</a> از طریق دکمه ارسال کد ارسال فرمایید. تا قبل از ساعت <span class="text-danger">24 تاریخ روز 14 بهمن ماه 99</span> می توانید به دفعات کد خود را حذف و ویرایش نمایید. ولی در این تاریخ دسترسی بسته خواهد. شد و آخرین کد شما جهت ارزیابی با داده های واقعی روی سیستم مشخص شده اجرا و نتایج آن مورد ارزیابی قرار می گیرد. پس از بررسی تمامی کدهای ارسال شده تمامی تیم‏ ها، نتایج تیم شما از طریق دکمه مشاهده نتایج رتبه بندی قابل دسترس خواهد بود. همچنین جهت دریافت گواهی شرکت در مسابقه و گواهی رتبه نیز در تاریخ مشخص شده می توانید به همین پنل خود مراجعه فرمایید
            <br>

          </p>
          <p class="text-success h5">مشخصات سیستم اجرایی مسابقه به شرح زیر است. جهت آشنایی با<a href="/techRules" class="text-success"> قوانین فنی و نحوه استفاده از داکر ها کلیک کنید</a></p>
          <p class="h3 text-danger mb-3">مشخصات سیستم<br>
            Geforce 1080<br>
            Core i7 3.2GHz<br>
            RAM 16G</p>
          <p class="lead">
            <a href="/TeamInfo" class="btn btn-lg btn-success dashboard-btn mt-2">تکمیل ثبت نام تیم</a>
            <a href="/get-files" class="btn btn-lg btn-warning dashboard-btn mt-2">دریافت محتوای مورد نیاز مسابقه</a>
            <a href="/changePassword" class="btn btn-lg btn-info dashboard-btn mt-2">تغییر رمز</a>
            
            @if(!$isPast)
              <a href="{{ action('FileUploadController@fileUpload') }}" class="btn btn-lg btn-primary dashboard-btn mt-2" >ارسال کد</a>
            @else
              <a href="#" class="btn btn-lg btn-primary dashboard-btn mt-2" title="مهلت ارسال کد به اتمام رسیده است" >ارسال کد</a>
            @endif

            <a href="uploads/cert/{{ session('user_id') }}/cert.pdf" class="btn btn-lg btn-dark dashboard-btn mt-2"  >دریافت نتایج ارزیابی</a>
          </p>
        </main>
      
      
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
