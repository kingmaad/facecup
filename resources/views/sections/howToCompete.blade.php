
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
@include('sections.head')
  </head>

  <body>
    @include('sections.header-menu')
    <main id="main" class="main-page">
      <!--==========================
      Speaker Details Section
    ============================-->
      <section id="speakers-details" class="wow fadeIn">
        <div class="container bg-white p-4 rounded">
          <div class="section-header">
            <h2>
             مراحل شرکت در مسابقه فیس&zwnj;کاپ
            </h2>
           
          </div>

          <div class="row">

            <div class="col-md-12 content-speakers">
                <div class="details rtl text-justify">
                <p class="text-center"><img src="/img/howtocompete-1.jpg" class="img-fluid"></p>
                <br>
<p style="text-align: right;"><span style="font-weight: 400;">وارد سایت فیس&zwnj;کاپ شوید و از قسمت "ثبت نام تیم&zwnj;ها" ثبت نام کنید.</span></p>
<p class="text-center"><a href="https://facecup.ir/signupTeam"><span style="font-weight: 400;">https://facecup.ir/signupTeam</span></a></p>
<p class="text-center"><img src="/img/howtocompete-2.jpg" class="img-fluid"></p>
<br>
<p style="text-align: right;"><h3>مرحله 1: تکمیل ثبت نام تیم&nbsp;</h3></p>
<p style="text-align: right;"><span style="font-weight: 400;">از پایین صفحه، قسمت "تکمیل ثبت نام تیم" اطلاعات خود را تکمیل کنید.</span></p>
<p style="text-align: right;"><span style="font-weight: 400;">اعضای تیمتان را معرفی کنید. (تیم ها از 1 تا حداکثر 6 نفر میتوانند باشند)</span></p>
<p style="text-align: right;"><span style="font-weight: 400;">رزومه های خود و اعضای تیمتان را آپلود کنید.</span></p>
<p class="text-center"><img src="/img/howtocompete-3.jpg" class="img-fluid"></p>
<br>
<p style="text-align: right;"><h3>مرحله 2:&nbsp; آشنایی با قوانین فنی و روال انجام مسابقه</h3></p>
<p style="text-align: right;"><span style="font-weight: 400;">قوانین فنی مسابقه را از طریق لینک قرار داده شده در داشبورد خود با دقت مطالعه کنید. یک ویدئوی آموزش گام به گام شرکت در مسابقه نیز جهت راحتی کار شما تهیه شده که میتوانید آنرا مشاهده کنید.</span></p>
<p class="text-center"><img src="/img/howtocompete-4.jpg" class="img-fluid"></p>
<br>
<p style="text-align: right;"><h4>&nbsp;مرحله 3: از قسمت "دریافت محتوای مورد نیاز مسابقه" می توانید به محتوی مورد نیاز برای تولید کد خود دسترسی پیدا کنید.&nbsp;</h4></p>
<p style="text-align: right;"><span style="font-weight: 400;">ابتدا با "دریافت دیتاست نمونه" می&zwnj;توانید تعدادی 600 نمونه عکس مشابه عکس&zwnj;های مورد استفاده در ارزیابی نهایی، را دریافت نمایید و الگوریتم خود را با آنها تطبیق دهید.</span></p>
<p class="text-center"><img src="/img/howtocompete-5.jpg" class="img-fluid"></p>
<br>
<p style="text-align: right;"><h4>مرحله 4: از قسمت "دریافت داکرهای تست" میتوانید داکرهای مورد نیاز و همچنین یک نمونه کد به زبان پایتون را دریافت نمایید. </h4></p>

<br>
<p class="text-center"><img src="/img/howtocompete-6.jpg" class="img-fluid"></p>
<br>
<p>
<h4>مرحله 5: این داکرها به شکل زیر کار می‏کنند: </h4>
</p>
<p class="text-center"><img src="/img/docker.gif" class="img-fluid"></p>
<p style="text-align: right;"><h4>مرحله 6: پس از تکمیل الگوریتم و کد خودتان، از قسمت "ارسال کد" ، داکر کدهای خود را داخل داشبورد</h4> <span style="font-weight: 400;">بارگزاری کنید.</span></p>
<p style="text-align: right;"><span style="font-weight: 400;">شایان ذکر است که فایل ارسالی را تا تاریخ 15 بهمن می&zwnj;توانید ویرایش کنید.</span></p>
<p class="text-center"><img src="/img/howtocompete-7.jpg" class="img-fluid"></p>
<br>
<p style="text-align: right;"><h4>مرحله 7: 15 بهمن ماه دسترسی برای ارسال کد بسته خواهد شد و الگوریتم&zwnj;ها برای ارزیابی، تحویل اساتید هیئت داوری داده میشوند.&nbsp;</h4></p>
<p style="text-align: right;"><span style="font-weight: 400;">اعلام نتایج</span></p>
<p style="text-align: right;"><span style="font-weight: 400;">یک هفته الی 10 روز بعد، نتایج مسابقه اعلام خواهد شد. که از طریق دکمه "دریافت نتایج ارزیابی" قابل دسترس است.</span></p>
<p class="text-center"><img src="/img/howtocompete-8.jpg" class="img-fluid"></p>
                <br>
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
