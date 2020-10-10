
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
          
          <a href="#intro" class="scrollto"><img id="logoFile" src="img/facecup.png" alt="" title=""></a>
        </div>

        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li><a href="/aboutUs">تماس با ما</a></li>
            <li><a href="/blog">وبلاگ</a></li>
            <li><a href="#gallery">هیات داوری</a></li>
            <li><a href="#hotels">فرصت های شغلی</a></li>

            <li><a href="#venue">جوایز</a></li>
            <li><a href="#speakers">حامیان</a></li>
            <li class="dropdown rtl">
              <a href="#about">درباره مسابقه</a>
              <ul class="dropdown-menu dropdown-menu-right">
                  <li><a href="/exeRules">قوانین اجرایی</a></li>
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
				  <a href="blog-post-left-sidebar.html"><img class="d-flex" src="{{ url('img/blog1.png') }}" alt="Generic placeholder image"></a>
				  <div class="circle">
				  	<h5 class="day"></h5>
				  	<span class="month"></span>
				  </div>
				  <div class="media-body text-right p-4">
            <h1>فناوری تشخیص چهره چگونه کار می کند</h1>
            <p>
              اولین راه ارتباطی با شخص برای صحبت کردن معمولا نگاه کردن به چهره و حالت صورت فرد است. حالات و ویژگی های خاص صورت، قدرت تمایز بیشتری نسبت به اثر انگشت برای تعیین هویت فرد دارد. شناسایی چهره، یک موضوع مهم در زمینه علوم بینایی ماشین، شناسایی الگو و هوش محاسباتی است که همواره محققین این علوم را به چالش کشیده است. 
بطور کلی سیستم شناسایی انسان، با استفاده از اطلاعاتی که بینایی، شنوایی، بویایی، چشایی و لامسه که در اختیارش قرار می دهند، کار می کند. این اطلاعات به صورت جداگانه و یا در کنار هم، برای به خاطر سپردن و برای بازشناسی  افراد به کار می روند، اولین تجربیات مربوط به تشخیص چهره را می توان به سال های 1960 دانست. 

            </p>
   <h3>چگونگی کارکرد سیستم های تشخیص چهره 
  </h3>
  <p>
    در ابتدا  به سیستم  باید آموزش داده شود که یک چهره چیست تا بتواند آن را از سایر موجودیت های اطرافش تشخیص دهد. هربار که تصویر جدیدی ارائه می شود، با ارزیابی آن تخمین می زند که چهره مورد نظر در کجای تصویر قرار گرفته است. ممکن است شبکه دچار اشتباه شود، اما با تکرار، این الگوریتم ارتقا یافته و می تواند عملیات تشخیص چهره را به درستی انجام دهد. 
  </p>
  <p>
    سپس به سیستم توانایی تشخیص داده شود، که معمولا از یک شبکه عصبی دومی نیز استفاده می شود. در این روش، با استفاده از تصاویر، به سیستم آموزش داده می شود که چگونه بتواند یک فرد را از دیگری متمایز کند. برخی از الگوریتم ها نیز از صورت یک فرد به نوعی نقشه برداری استفاده می‌کنند. به عنوان مثال برای انجام این کار فاصله بین چشم ها تا ابروها، فاصله بین دو چشم، فاصله بین بینی و دهان و... به طور کلی تمام فواصل بین اجزای یک صورت را اندازه گیری می نماید. 
  </p>
  <p>در تصویربرداری زنده، این قابلیت وجود دارد که  فیلم را به بخش های کوتاهی تقسیم کرده و پردازش کند. در فیلم هایی که در نقاط شلوغی مثل خروجی ایستگاه مترو گرفته می شود، سیستم، چهره هر فرد را در یک فریم از فیلم شناسایی کرده و برای هر کدام یک وکتور جدا ایجاد می کند. سپس از این وکتورهای ایجاد شده برای شناسایی فردی که از قبل به سیستم داده شده است، استفاده کرده و آن را با هر کدام از وکتور های بدست آمده تطابق می دهد، هر کدام از چهره هایی که با ویژگی های چهره ی داده شده شباهت داشت، جمع آوری شده و بر اساس میزان شباهت رتبه بندی می شوند.</p>
  <p>
    <ul>
        <li>
          ⦁	فناوری تشخیص چهره، در ابتدا با استفاده از شکل صورت یک تصویر هندسی ترسیم میکند، (faceprint) که همانند اثر انگشت منحصر به فرد است.
        </li>
        <li>
          ⦁	 از  Faceprint  برای مقایسه با چهره افرادی که از قبلا به سیستم داده شده است استفاده می شود. 
        </li>
    </ul>
  </p>
  <p>ازمایش هایی  که توسط موسسه ملی استاندارد و فناوری امریکا  (Nist) انجام شده است، دقت تشخیص طی  سال های 2014 تا 2018  تا 20 برابر افزایش داشته است، همچنین خطای سیستم های تشخیص چهره از 4% به 0.2% رسیده است، در دستگاه های تشخیص چهره دو چالش حافظه و زمان مصرفی حائز اهمیت است.</p>
  <p>یکی از مسائلی که به تازگی مورد توجه قرار گرفته است، تشخیص چهره در زوایا و حالات گوناگون چهره نسبت به دوربین است، همچنین از تشخیص چهره، در نمایش تبلیغات به مخاطبان در دوربین های مداربسته با توجه به جنس مخاطب که خانم و یا آقا باشند، استفاده می شود. </p>
  <p>Facial Recognition  فناوری ای می باشد که می‌تواند، اشخاص را از روی تصویر یا عکس دیجیتالی یا ویدیوی آن‌ها تشخیص بدهد .اغلب نرم افزار‌های تشخیص چهره روی تصاویر دو بعدی تمرکز دارند، که به خاطر راحتی کار است.</p>
  <p>با استفاده از دستگاه های تشخیص چهره در فرودگاه میامی موجود علاوه بر تطبیق چهره فرد با عکس گذرنامه او، هم زمان پیشینه فرد در بانک اطلاعاتی پلیس آمریکا بررسی می شود و تعیین هویت افراد برای ماموران در عرض چند ثانیه به راحتی صورت می پذیرد.</p>
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
