
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

  <body class="body-bg">
    @include('sections.header-menu')    <main id="main" class="main-page">
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
				  <a href="blog-post-left-sidebar.html"><img class="d-flex" src="{{ url('img/blog2.jpg') }}" alt="Generic placeholder image"></a>
				  <div class="circle">
				  	<h5 class="day"></h5>
				  	<span class="month"></span>
				  </div>
				  <div class="media-body text-right p-4">
            <h1>مسیر پیشرفت فناوری هوش مصنوعی</h1>
            <p>
              در دنیای امروز هوش مصنوعی  به یکی از مهم ترین چالش های پیشرفت تکنولوژی و همسان سازی رایانه و انسان تبدیل شده است، در این مبحث نیز هدف بر این تنطیم شده است که مسیر گذشته این دانش و مسیر پیش روی آن را تحلیل کنیم. 

            </p>
   <h3>تاریخچه هوش مصنوعی 
  </h3>
  <p>     شروع و پایه و اساس این دانش به دهه 1940 باز میگردد و طی دو دهه بعد از آن این دانش وارد پروژه های تحت حمایت دولت و سرمایه گذاری های متعدد شد. 
    در واقع باید گفت که یکی از دلایل شروع این جهش، نیاز تجارت به پیشرفت هوش مصنوعی بود که اولین حوزه تجارت، بازار سهام بود که از این علم دانشگاهی برای قیمت گذاری سهام استفاده کرد.
</p>
  <p>     در کنار تمامی این ها در دو دهه 80 و 90 رباتیک نیز وارد کارخانه ها شد و همگی بر این باور رسیدند که دانش هوش مصنوعی نیاز مبرم پیشرفت است. 
  </p>
  <h3>مدعیان حقیقتی که مصنوعی نیست </h3>
  <p>     همگی میدانیم که دانش تکنولوژی روز به روز در حال پیشروی است و با هر پیشرفتی قله جدیدی را فتح می کند، تحقیقات نشان می دهد که در پنج سال گذشته 9/12 % رشد در این زمینه را به صورت سالانه شاهد بوده ایم.
    <p>
      پیش بینی ها ما را به این نتایج نزدیک می کند که در آینده ای نه چندان دور کشور چین ابر قدرتی بدون رقیب در حوزه هوش مصنوعی در سراسر جهان خواهد بود و بزرگترین منبع این دانش خواهد شد.
      بعد از آن ایالات متحده آمریکا همه چیز را در اختیار دارد و اروپا نیز توانایی بالایی برای شماره یک بودن در این حوزه را دارد، و دلیل اصلی آن قابلیت همکاری و اشتراک بالای کشور های اروپایی است.

  </p>
  <h3>نقطه کنونی هوش مصنوعی 
  </h3>
  <p>     جایگاهی که اکنون هوش مصنوعی در آن قرار دارد برای ادامه مسیر بسیار تعیین کننده است چون که به طور کلی ذهن بشر مراحل اماده سازی خود را برای مواجهه با بمب های تکنولوژی را گذرانده و هر لحظه اخبار بیشتری از پیشرفت ها به گوش می رسد. 
  </p>
  <p>باید به این نکته اعتراف کرد که این فناوری قسمتی غیر قابل جدایی پذیری از زندگی انسان شده، 
    برای مثال ابر قدرت هایی مانند گوگل و تسلا با استفاده از الگوریتم هایی عمیق مدل های جدیدی را طراحی می کنند. 
        از نمونه های بارز این طراحی ها پیشرفت علم رباتیک و انجام جراحی های دقیق و سنگینی است که شاهد آن هستیم. </p>
  <p>محصول دیگر از ابداعات در حال پیشرفت هوش مصنوعی است.
    در حال حاظر تکنیک های این دانش پر چالش به نتایجی دست یافته که با هر خروجی انسان را شگفت زده می کنند و او را برای دیدن آینده تکنولوژی مشتاق تر می کند. 
  موضوع مهم و هدفی که همه چیز به آن ختم می شود را می توان در یک کلمه خلاصه کرد،
فکر کردن. در واقع همه ی این دانش و متعلقاتش و تمام این پیشرفت ها و موفقیت ها برای ساختن و ایجاد محصولاتی است که مانند انسان ها فکر کنند و خروجی مناسبی تحویل دهند.  
</p>
<h3>انواع هوش مصنوعی 
</h3>
<p>     1- ماشین آلات راکتیو : قدیمی ترین شکل سیستمی است که از محرک های پاسخ انسان استفاده می کند و آن را تقلید می کند و حافظه ای ندارد ( نمی تواند از تجربیات قبلی برای اقدامات و واکنش های فعلی استفاده کند)، که خود به معنای عدم توانایی یادگیری این ماشین است. 
</p>
  <p>     2- حافظه محدود : توانایی استفاده از داده های تاریخی برای واکنش فعلی را دارد که اکنون تمام برنامه هایی که میشناسیم تحت این دسته فعالیت می کنند. 
  </p>  
    <p>3-نظریه ذهن : در این سطح محققان درگیر نوآوری هایی هستند که سیستم هوش مصنوعی با تشخیص نیاز ها، احساسات و باور ها با موجودات تعامل و آنان را درک کند.</p>
    <p>4-خود آگاه : آخرین مرحله از توسعه هوش مصنوعی است که فقط به صورت فرضی وجود دارد ؛ در واقع سیستمی است که به قدری شبیه مغز انسان است که باعث خودآگاهی می شود.</p>
    <p>5 -هوش محدود مصنوعی : به سیستم های هوش مصنوعی اطلاق می شود که فقط با استفاده از قابلیت های مشابه انسان می توانند یک کار خاص را به صورت خودکار انجام دهند. این ماشین ها نمی توانند چیزی بیشتر از آنچه برای آن برنامه ریزی شده اند انجام دهند و بنابراین از صلاحیت های بسیار محدود یا محدودی برخوردار هستند.</p>
    <p>6- هوش فوق العاده مصنوعی: توسعه هوش فوق العاده مصنوعی احتمالاً نقطه اوج تحقیقات هوش مصنوعی خواهد بود. این علم به مرور به توانا ترین علم بر روی زمین تبدیل خواهد شد. به دلیل حافظه بیش از حد بیشتر، پردازش و تجزیه و تحلیل سریعتر داده ها و قابلیت های تصمیم گیری، در هر کاری که انجام می دهد بسیار بهتر خواهد بود. </p>
    <p>7- هوش عمومی مصنوعی : هوش عمومی مصنوعی توانایی یک عامل هوش مصنوعی در یادگیری، درک، درک و عملکرد کاملاً یک انسان است. این سیستم ها قادر خواهند بود به طور مستقل چندین صلاحیت ایجاد کرده و ارتباطات و تعمیماتی را در دامنه ها ایجاد کنند و زمان مورد نیاز برای آموزش را به طور گسترده کاهش دهند.</p>
    <h3> آینده هوش مصنوعی </h3>
    <p> مطالعات اخیر نشنان دهنده این است که در چند سال آینده نزدیک به 60% مشاغل به صورت خودکار و با استفاده از هوش مصنوعی ادامه پیدا خواهد کرد، در واقع به گفته یکی از دانشمندان، ماشین به علاوه انسان شروع یک ابر قدرت جدید است. </p>
    <p>     علاوه بر این، شرکت هایی مانند فیس بوک و گوگل از انسان برای تعدیل مطالب استفاده می کنند و این را نیز باید مطرح کرد که مفسران و دانشمندان از هم اکنون در حال پیش بینی و پیشنهاد راه حل هایی برای برطرف کردن شکاف های آینده این علم هستند.</p>
    <p>     همانطور که چنین تحقیقاتی نشان می دهد، هوش مصنوعی ممکن است خود را به عنوان یک نیروی بیگانه نشان دهد، اما واقع یک اختراع انسانی است که نقایص را برطرف کند.</p>

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
