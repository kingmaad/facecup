
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
    @include('sections.header-menu')
    <main id="main" class="main-page">
      <!--==========================
      Speaker Details Section
    ============================-->
      <section id="speakers-details" class="wow fadeIn">
        <div class="container bg-white p-4 rounded">
          <div class="section-header">
            <h2>قوانین فنی</h2>
           
          </div>

          <div class="row">

            <div class="col-md-12 content-speakers">
              <div class="details rtl text-justify">
                <h2>قوانین فنی مسابقه</h2>
                <p>هدف اصلی در این مسابقه شناسایی مجموعه بسته چهره است. مجموعه گالری به تعداد N  و مجوعه پروب به تعداد M که M>>N توسط تیم ارزیاب در نظر گرفته شده است. ابتدا باید مجموعه گالری به صورت دسته ایی توسط محصول هر شرکت‏ کننده ثبت نام شود. سپس هر یک از تصاویر پروب جداگانه برای شناسایی با تصاویر گالری مطابقت داده شوند. انتظار میرود همانند شکل 1، خروجی یک لیست کاندید K تایی بهمراه امتیاز شباهت مربوطه باشد. مقدار K به صورت پارامتریک باید قابل تعریف باشد که حداکثر میتواند به اندازه N باشد. اگر الگوریتم به هر دلیلی قادر به استخراج و ساخت الگو از یک تصویر گالری نبود، برای آن تصویر گالری نباید امتیاز شباهت وجود داشته باشد و به عنوان خطای عدم ثبت نام منظور خواهد شد. علاوه بر این، اگر الگوریتم از یک تصویر پروب نیز نتواند الگو استخراج نماید، نباید لیست متناظر با این تصویر تولید شود و به عنوان خطای عدم اکتساب منظور میشود. در این حالت نیازی به تولید لیست کاندید با امتیاز تماماً صفر وجود ندارد. </p>

                <p>
                  بر اساس لیستهای خروجی، برای همه تیمهای شرکت کنندگان منحنی CMC ترسیم شده و با احتساب نرخ FTE و FTA تیمها مورد ارزیابی قرار میگیرند. لازم به ذکر است علاوه بر دقت شناسایی، عوامل دیگری نظیر میزان حافظه مصرفی، سایز قالب استخراجی، زمان استخراج قالب و تطبیق در رتبه بندی شرکت کنندگان تاثیر گذار خواهد بود. در ادامه توضیحات در مورد تصاویر، نحوه ‏ی اجرا و خروجی مطلوب ارایه شده است.
                </p>
                <p class="text-center">
                  <img src="/img/compare-list.jpeg" class="img-fluid"><br>
                  شکل1- لیست کاندید حاصل از مقایسات</p>
                <br>
                <h2>مشخصات تصاویر</h2>
                <p>

مجموعه تصاویر گالری و پروب، شامل تصاویر رنگی و سطح خاکستری با عمق 8 یا 24 بیتی خواهند بود. تمام این تصاویر به فرمت jpg استاندارد فشرده شدهاند. ابعاد تصاویر مختلف بوده و در بازه‏ی30 پیکسل تا 2048 پیکسل متغیر است. در هر تصویر حداکثر یک چهره وجود دارد. چالشهای متداول تصاویر چهره نظیر نورپردازی نامناسب، زاویه سر سوژه، پوشیدگی چهره با عینک، کلاه و حجاب و سایر موارد در هر دو مجموعه گالری و پروب وجود دارد. محدوده سنی افراد در تصاویر از کودکی تا پیری را شامل می‏شوند. در شکل 2 برخی از این تصاویر نشان داده شده است.

                </p>
                
                <p>
                  مجموعه تصاویر گالری و پروب، شامل تصاویر رنگی و سطح خاکستری با عمق 8 یا 24 بیتی خواهند بود. تمام این تصاویر به فرمت jpg استاندارد فشرده شدهاند. ابعاد تصاویر مختلف بوده و در بازه‏ی30 پیکسل تا 2048 پیکسل متغیر است. در هر تصویر حداکثر یک چهره وجود دارد. چالشهای متداول تصاویر چهره نظیر نورپردازی نامناسب، زاویه سر سوژه، پوشیدگی چهره با عینک، کلاه و حجاب و سایر موارد در هر دو مجموعه گالری و پروب وجود دارد. محدوده سنی افراد در تصاویر از کودکی تا پیری را شامل می‏شوند. در شکل 2 برخی از این تصاویر نشان داده شده است.

                </p>
                <br>
                <div class="d-flex justify-content-center border border-light p-5">

                  <img src="img/fourface.png" class="img-fluid" alt="">
            
                </div>
                <h2>قوانین اجرایی مسابقه </h2>
                <p>
                  هر تیم برای شرکت در مسابقه، کد خود را با توجه به فایل راهنما آماده کرده و برنامه‏ی اجرایی خود را در قالب یک داکر ایمیج در زمان مقرر در وب سایت بارگذاری خواهد نمود. این ایمیج، بر روی سیستمی که داده‏های گالری و پروب بر روی آن قرار دارد اجرا شده و پس از اجرای کامل برنامه، فایل خروجی در یک پایگاه داده ذخیره میشود. لازم به ذکر است هیچ تیمی مجاز به استفاده از کتابخانه هایی که نیاز به اخذ مجوز یا لیسانس تجاری باشند، نبوده و در صورت محرز شدن این موضوع از مسابقه کنار گذاشته خواهند شد. لازم به توضیح است که به منظور آموزش چگونگی ساخت و اجرای داکر ایمیج، علاوه بر فایل راهنما، دوره‏ی آموزشی جداگانه نیز برگزار خواهد شد که جزئیات بیشتر متعاقباً اعلام خواهد شد. 

                </p>
                <br>
                <h2>
                  	نحوه ارتباط با مجموعه تصاویر گالری و پروب
                </h2>
                <p>
                  یک داکر nginx با نام Input وجود دارد که در روت آن دو فایل ذخیره شده‏اند. فایل اول با نام gallery.txt بوده و در آدرس http://input/gallery.txt در دسترس میباشد که حاوی اطلاعات مجموعه گالری است. فرمت این فایل به این شکل است که در سطر اول تعداد تصاویر گالری معرفی شده و در سطرهای بعدی آن هر سطر URL مربوط به هر تصویر نوشته شده است. فایل دوم نیز فایل probe.txt بوده و با فرمت مشابه فایل gallery.txt از طریق http://input/probe.txt در دسترس است. برای شرکت‏کنندگانی که امکان تعامل از طریق http را ندارند، نحوه map کردن درایو فیزکی که حاوی دو پوشه است متعاقباً طی یک فایل راهنما ارایه خواهد شد. 

                </p>
                <br>
                <h2>	نحوه ذخیره نتایج
                </h2>
                <p>
                  همانطور که پیشتر اشاره شد، ابتدا مجموعه تصاویر گالری در محصول هر شرکت کننده ثبت نام میشود. سپس درخواست جستجوی تک به تک تصاویر پروب به هر محصول داده میشود و انتظار میرود فرمت خروجی بر اساس مشخصاتی که در ادامه ارایه میشود، تولید شود. 

                </p>
                <br>
                <h2>
                  	نحوه ذخیره نتایج

                </h2>
                <p>
                  همانطور که پیشتر اشاره شد، ابتدا مجموعه تصاویر گالری در محصول هر شرکت کننده ثبت نام میشود. سپس درخواست جستجوی تک به تک تصاویر پروب به هر محصول داده میشود و انتظار میرود فرمت خروجی بر اساس مشخصاتی که در ادامه ارایه میشود، تولید شود. 
                </p>
                <p>
                  یک داکر با نام ResultDB که از جنس mongoDB است، در کنار داکر هر محصول ایجاد شده است. در این mongoDB یک پایگاه داده با نام لاتین با نام هر تیم شرکت کننده ایجاد شده و پسورد آن نیز شماره موبایل سرگروه معرفی شده در سایت است. شرکت‏کننده باید خروجی خود را در این mongoDB با ویژگی‏های زیر ذخیره نماید: 

                </p>
                <ul class="m-4">
                  <li>برای هر تصویر پروب یک Document به نام این تصویر ایجاد شود.
                  </li>
                  <li>در هر Document باید یک مجموعه Kتایی حاوی یک زوج مرتب نوشته شود که مولفه اول آن نام تصویر گالری و المان دوم امتیاز شباهت حاصل از این تصویر گالری با تصویر پروب  این Document است.
                  </li>
                  <li>	مقدار K به صورت پارمتریک قابل تنظیم باشد. حداکثر مقدار K برابر N یعنی تعداد مجموعه گالری خواهد بود.
                  </li>
                  <li>	زوج‏ها بر حسب امتیاز شباهت به‌صورت نزولی مرتب شده‌ باشند.
                  </li>


                </ul>
                <p>به ‌عنوان مثال فرض کنید پوشه گالری شامل سه تصویر با نام‌های زیر باشد.
                </p>
                <p class="text-left">
                  Gallery1.jpg
                </p>
                <p class="text-left">Gallery2.jpg</p>
                <p class="text-left">Gallery3.jpg</p>
              <p>و پوشه‌ی پروب شامل دو تصویر با نام‌های زیر باشد.
              </p>
              <p class="text-left">Probe1.jpg</p>
              <p class="text-left">Probe2.jpg</p>
              <p>با این شرایط دو document با نام‌های P1 و P2 ذخیره خواهد شد که به ‌عنوان مثال زوج مرتب زیر باید ذخیره شود.</p>
              <p class="text-left">P1: {(Gallery1, 0.9983), (Gallery3, 0.5343), (Gallery2, 0.0013)}</p>
              <p class="text-left">P2: {(Gallery2, 0.8505), (Gallery3, 0.5130), (Gallery1, 0.0134)}
              </p>
              <p>دقت داشته باشید که در Document ها حتماً باید امتیاز شباهت درج شود و هرگونه عبارت دیگر نظیر NaN یا inf قابل قبول نیست و به عنوان خطا محسوب خواهد شد. مجدداً یادآوری میگردد، اگر الگوریتم به هر دلیلی قادر به استخراج و ساخت الگو از یک تصویر گالری نبود، برای آن تصویر گالری نباید امتیاز شباهت وجود داشته باشد و به عنوان خطای عدم ثبت نام منظور خواهد شد. علاوه بر این، اگر الگوریتم از یک تصویر پروب نیز نتواند الگو استخراج نماید، نباید لیست متناظر با این تصویر تولید شود و به عنوان خطای عدم اکتساب منظور میشود. در این حالت نیازی به تولید لیست کاندید با امتیاز تماماً صفر وجود ندارد. به عنوان مثال اگر الگوریتم شما نتواند الگوی تصویر Gallery4.jpg را استخراج کند، در فایل‏های خروجی نباید هیچ سطری برای این تصویر  وجود داشته باشد. اگر هم الگوریتم قادر به استخراج الگو از یک تصویر پروب نباشد، اصلاً نباید document متناظر با آن تصویر تولید شود. بدیهی است در صورت عدم رعایت هر یک از موارد فوق، شرکت کننده از چرخه مسابقه حذف خواهد شد. </p>
              <h2>	نحوه استفاده از داکرها</h2>
              <p>برای استفاده راحت از داکر ها اسکریپت docker.sh در اختیار شرکت کنندگان قرار میگیرد. یک نمونه کد به زبان پایتون نیز نوشته شده است تا تا نحوه برقراری ارتباط با داکر ها نشان داده شود. لازم به یادآوری مجدد است که طریقه ساخت داکر و تست آن در آموزشی جداگانه در وب سایت قرار خواهد گرفت.</p>
              <p> با اجرای دستور زیر داکر های nginx و mongodb اجرا میشوند:
              </p>
              <p class="text-left">docker.sh <span class="text-danger">run</span></p>
              <p>با اجرای دستور زیر نیز تصاویر گالری و پروب از درون داکر nginx داخل آدرسی که هر الگوریتم نیاز دارد”path_to_copy_image”  کپی میشود:</p>
              <p class="text-left">docker.sh <span class="text-danger bold">copy_image</span> <span class="text-info bold">path_to_copy_image</span></p>

                
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
