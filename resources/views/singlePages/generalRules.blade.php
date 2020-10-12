
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
      <section id="speakers-details" class="wow fadeIn">
        <div class="container bg-white p-4 rounded">
          <div class="section-header">
            <h2>قوانین عمومی مسابقه بازیابی چهره فیس کاپ
            </h2>
           
          </div>

          <div class="row">

            <div class="col-md-12 content-speakers">
                <div class="details rtl text-justify">

                    <p>مجموعه قوانین عمومی شرکت در مسابقات بازیابی چهره فیس کاپ به قرار زیر می باشد. علاوه بر این مجموعه
                      قوانین عمومی، هر یک از گروه های حقیقی و حقوقی دارای قوانین خاص خود هستند که در ادامه به آن پرداخته شده است.</p>
                      <h4>1 ) محدودیت سنی</h4>
<p> هیچ گونه محدودیت سنی برای شرکت کنندگان حقیقی در مسابقات وجود ندارد.</p>
<h4>2 ) وضعیت شغلی/تحصیلی</h4>
<p>● محدودیتی در مورد وضعیت تحصیلی یا شغلی شرکت کنندگان حقیقی در مسابقات وجود ندارد.
</p>
<p>● کلیه تیمهای شرکت کننده در مسابقات اعم از دانش آموزی، دانشجویی و آزاد و سازمان ها به صورت یکسان
  ارزیابی شده و در دو دسته ی اشخاص حقیقی و حقوقی رتبه بندی می شوند.</p><br>
  <p>تبصره: در سال اول برگذاری مسابقات کلیه تیم ها  به عنوان تیم حقیقی ثبت نام خواهند شد. (اشخاص حقوقی میتوانند از نام مستعار استفاده کنند)
  </p><br>
<h4>3 ) وابستگی به دانشگاه/ سازمان</h4>
<p> محدودیتی در مورد تعداد تیمهای شرکت کننده از یک نهاد خاص وجود ندارد.</p>
<h4>4 ) اعضای تیم</h4>
<p>● حداکثر تعداد اعضای یک تیم حقیقی 6 نفر است.</p>
<p>● در صورتی که تیمی حائز رتبه ای شود در گواهی مقام اعطایی به تیمها تعداد اعضای تیم قید
  خواهد شد.</p>
<p>● بعد از مرحله ثبت نام قطعی امکان تغییر اعضای تیمها وجود ندارد.</p>
<h4>5 ) حضور شرکتها و محصولات تجاری</h4>
<p>● شرکت ها و محصولات تجاری می توانند با نام تجاری خود یا نام مستعار در مسابقات شرکت کنند.</p>
<p>● در صورتی که تیم نماینده یک شرکت تجاری مایل به ارائه کد خود نباشد، در صورت کسب
  رتبه توسط آن تیم، صرفاً گواهی رتبه به تیم مذکور اعطا خواهد شد و سایر جوایز پیش بینی
  شده به آن تیم تعلق نخواهد گرفت</p>
<h4>6 ) حقوق کپی رایت برنامه ها
</h4>
<p>کمیته برگزاری مسابقات هیچ گونه حقی برای استفاده از کدهای ارائه شده شرکت کنندگان را نخواهد داشت.</p>
<p>● کمیته برگزاری مسابقات اجازه انتشار گزارش فنی تیمها و یا چکیده آن (با نام تیم مورد نظر(
  بر روی وب سایت مسابقات را دارد.</p>
  <p>
    ●روزمه ها در اختیار شرکت های حامی و کمیته فنی مسابقه است و از آن برای شبکه سازی، استفاده در پزوژه های ملی و کشف استعداد استفاده خواهد شد.
  </p>
  <h4>7 ) گواهی شرکت و مقام</h4>
  <p>● گواهی شرکت در مسابقات تنها به تیمها و سازمان هایی اعطا خواهد شد که تیم آنها حداقل امتیاز ممکن را کسب نماید.</p>
  <p>● گواهی مقام، تنها به تیمهای اول تا سوم هر دسته بندی اعطا خواهد شد.</p>
  <p>● گواهی شرکت در مسابقات به صورت انفرادی و گواهی مقام به صورت تیمی صادر میشود.</p>
  <h4>8 ) تعداد و عنوان تیمهای برگزیده</h4>
  <p>● در زمان اجرای برنامه هر تیم، تنها یک نماینده از تیم مورد نظر میتواند در محل اجرای
    برنامهها حضور داشته باشد.</p>
    <p>● گواهی شرکت در مسابقات برای کلیه اعضای تیم صادر خواهد شد.</p>
    <p>● کلیه مسائل مربوط به رفت و آمد شرکت کنندگان بر عهده خود تیمهای شرکت کننده
      خواهد بود. البته کمیته اجرایی مسابقات تا حد ممکن تمهیداتی در این زمینه برای شرکت
      کنندگان در نظر خواهد گرفت.</p>
      <h4>9 ) مسائل فنی و نحوه ارزیابی تیمها</h4>
      <p>●جهت اطلاع از نحوه استفاده از برنامهایی که بخش اصلی آن از کدهای آماده تشکیل شده باشد یا DLL های خریداری شده به قوانین فنی مراجعه شود.</p>
      <p>● بخشی از امتیاز هر مسابقه مربوط به ارزیابی علمی گزارش فنی تیمها است که کار ارزیابی آن
        توسط گروهی از اساتید مجرب دانشگاههای برتر کشور در زمینه هوش مصنوعی و پردازش تصویر انجام میشود.</p>
        <p>● هر گونه اعتراض به نتایج مسابقات میبایست به صورت کتبی و با ارائه مستندات کافی انجام
          پذیرد.</p>
          <p>● تصمیمگیری نهایی در مورد اعتراضات بر عهده کمیته داوران بوده و تیمها موظف به تمکین به
            رای کمیته داوران هستند.</p>
      <p>● مطرح کردن هر گونه بحث حاشیهای بدون مستندات در زمینه مسابقات غیرقانونی و قابل
        پیگرد توسط کمیته برگزاری مسابقات خواهد بود.</p>
        <h4>3-12 تجهیزات سخت افزاری و نرم افزاری</h4>
        <p>● تجهیزات سخت افزاری مورد استفاده کلیه تیمها مشترک خواهد بود و کلیه تیمها موظف به
          اجرای برنامههای خود بر روی سیستمهای پیش بینی شده هستند.</p>
          <p>● مشخصات سخت افزارهای موجود در زمان ثبت نام قطعی به تیمها اطلاع داده خواهد شد.</p>
          <p>● راه اندازی و اجرای نرم افزار تیمها و نرم افزارهای مورد نیاز آنها بر عهده خود تیمها خواهد بود.
            کلیه تیمها موظف هستند نیازمندیهای نرم افزاری خود را در زمان ثبت نام مشخص کنند.</p>
                </div>
            </div>
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
