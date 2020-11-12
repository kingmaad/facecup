
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
                  یک داکر nginx با نام nginx وجود دارد که در روت آن دو فایل ذخیره شده‏اند. فایل اول با نام gallery.txt بوده و در آدرس http://nginx/gallery.txt در دسترس میباشد که حاوی اطلاعات مجموعه گالری است. فرمت این فایل به این شکل است که در سطر اول تعداد تصاویر گالری معرفی شده و در سطرهای بعدی آن هر سطر URL مربوط به هر تصویر نوشته شده است. فایل دوم نیز فایل probe.txt بوده و با فرمت مشابه فایل gallery.txt از طریق http://nginx/probe.txt در دسترس است. برای شرکت‏ کنندگانی که امکان تعامل از طریق http را ندارند، نحوه map کردن درایو فیزیکی که حاوی دو پوشه است متعاقباً طی یک فایل راهنما ارایه خواهد شد. 

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
                <h4 dir="rtl" class="text-danger" role="presentation">نصب و اجرای داکرهای تست</h4>

                <p dir="rtl">برای نصب docker مراحل لینک زیر دنبال شود.</p>
                <p dir="ltr">&nbsp;<a href="https://docs.docker.com/engine/install/">https://docs.docker.com/engine/install/</a></p>
                <p dir="rtl">در صورتی که از سیستم عامل غیر از ویندوز استفاده می&rlm;شود، باید docker compose نیز از لینک زیر نصب شود. در نسخه ویندوزی به صورت پیش فرض docker compose نصب شده است.</p>
                <p dir="ltr"><a href="https://docs.docker.com/compose/install/">https://docs.docker.com/compose/install/</a></p>
                <p dir="rtl">همچنین برای اجرای اسکریپت&rlm;های مورد نیاز در سیستم عامل ویندوز، باید از مسیر زیر git نصب شود.</p>
                <p dir="ltr"><a href="https://git-scm.com/downloads">https://git-scm.com/downloads</a></p>
                <p dir="rtl">پس از نصب موارد بالا، در داخل پوشه docker راست کلیک نموده، سپس بر روی git bash here کلیک کرده و درون صفحه باز شده اسکریپت docker.sh را همانند شکل زیر اجرا نمایید.</p>
                <div class="d-flex justify-content-center border border-light p-5"><img src="/img/docker-commandline.png" class="img-fluid"  /></div>
                <p dir="rtl">توجه نمایید که به جای team_name باید اسم لاتین تیم (که در سایت ثبت&lrm;&zwnj;نام کرده&rlm;اید) و به جای team_pass باید شماره موبایل سرگروه تیم را وارد کنید. با این کار در MongoDB پایگاه داده&rlm;ای با نام کاربری اسم تیم و رمز عبور شماره موبایل سرگروه ساخته می&lrm;شود. این امر جهت ارزیابی نتایج الگوریتم شما بسیار حائز اهمیت است چرا که تیم داوری به داده&rlm;های شما با همین نام کاربری و رمز عبور دسترسی خواهد یافت.</p>
                <p dir="rtl">در صورت بروز هر گونه مشکل در وارد کردن این موارد می&lrm;توانید دستور زیر را اجرا&nbsp; کرده و سپس دستور start را دوباره اجرا نمایید.</p>
                <p dir="ltr">./docker.sh stop</p>
                <p dir="rtl">برای اطمینان از اجرای درست ایمیج&zwnj;ها، می&rlm;توانید با استفاده از مرورگر سیستم خود آدرس&lrm;های زیر را باز کنید.</p>
                <p dir="ltr"><a href="http://localhost/images/gallery/images.txt" aria-invalid="true">http://localhost/images/gallery/images.txt</a></p>
                <p dir="ltr"><a href="http://localhost/images/probe/images.txt" aria-invalid="true">http://localhost/images/probe/images.txt</a></p>
                <p dir="rtl">در این دو آدرس نام تمام فایل&rlm;های عکس probe و gallery آمده است. برای مشاهده هر عکس با داشتن اسم آن می&rlm;توانید از آدرس&rlm;های زیر استفاده کنید.</p>
                <p dir="ltr"><a href="http://localhost/images/gallery/S000001.jpg" aria-invalid="true">http://localhost/images/gallery/S000001.jpg</a></p>
                <p dir="ltr"><a href="http://localhost/images/probe/S000029.jpg" aria-invalid="true">http://localhost/images/probe/S000029.jpg</a></p>

                <h4 dir="rtl" role="presentation" class="text-danger">2- یک نمونه کد تست جهت کار با داکرها</h4>

                <p dir="rtl">در صورت موفقیت در تست مرحله قبل، می&rlm;توانید کد خود را برای کار با ایمیج&zwnj;&zwj;&zwnj;ها بنویسید. جهت راحتی شما، در پوشه nextera_test یک نمونه کد پایتون برای برقراری ارتباط با پایگاه داده و دریافت عکس&lrm;ها نوشته شده است.&nbsp;</p>
                <div class="d-flex justify-content-center border border-light p-5"><img src="/img/python-file.png" class="img img-fluid" /></div>
                <p dir="rtl">برای اجرای این کد باید نکات زیر لحاظ شود:&nbsp;</p>
                <ol>
                <li dir="rtl" style="list-style-type: decimal;">
                <p dir="rtl" role="presentation">در خط 9 به جای nextera_db باید اسم لاتین تیم و به جای 1199 باید شماره موبایل سرگروه تیم وارد شود.</p>
                </li>
                <li dir="rtl" style="list-style-type: decimal;">
                <p dir="rtl" role="presentation">کد فوق بر روی ماشین شما اجرا می&zwnj;شود. برای نسخه نهایی کد باید localhost را در خط 8 به mongodb و در خطوط 14 و 17 به nginx تغییر دهید و برای ساخت ایمیج نهایی از کد خود و ارسال به مسابقه نیز نباید از localhost استفاده شود. بنابراین برای حالت تست و بررسی از localhost استفاده کنید و برای ساخت ایمیج نهایی، localhost را در خط 8 به mongodb و در خطوط 14 و 17 به nginx تغییر دهید.</p>
                </li>
                </ol>
                <p dir="rtl">قبل از اجرای کد تست، دستور زیر را اجرا نمایید تا پیش&lrm;نیاز&lrm;های کد نصب شوند. فرض شده است که پایتون نسخه 2 یا 3 قبلا بر روی سیستم شما نصب شده است.</p>
                <p dir="ltr">pip install -r requirements.txt</p>

                <h4 dir="rtl" role="presentation" class="text-danger">3- تهیه داکر از موتور خودتان جهت ارسال برای مسابقه</h4>

                <p dir="rtl">بعد از این که کد خود را نوشتید باید آن را در قالب داکر ایمیج برای مسابقه ارسال کنید. برای ساخت داکر ایمیج باید یک Dockerfile فایل نوشته شود. در پوشه nextera_test یک نمونه Dockerfile برای ساخت داکر ایمیج وجود دارد.</p>
                <div class="d-flex justify-content-center border border-light p-5"><img src="/img/docker.png" class="img img-fluid" /></div>
                <ul>
                <li dir="rtl" style="list-style-type: disc;">
                <p dir="rtl" role="presentation">دستور FROM مشخص می&rlm;کند ایمیج از چه ایمیجی پایه&rlm;ای ساخته خواهد شد یا اصطلاحا ایمیج بیس ایمیج جدید چه چیزی باشد. در این مثال چون کد نمونه به زبان پایتون نوشته شده است، از ایمیج بیس python:3 استفاده شده است. از طریق آدرس <a href="https://hub.docker.com">https://hub.docker.com</a> می&rlm;توانید ایمیج بیس مورد نیاز خود را پیدا نمایید.</p>
                </li>
                <li dir="rtl" style="list-style-type: disc;">
                <p dir="rtl" role="presentation">دستور WORKDIR یک دایرکتوری در /usr کانتینر به وجود می&rlm;آورد. همچنین داخل کانتینر دایرکتوری را به همین دایرکتوری ساخته شده تغییر می&lrm;دهد و از آن به بعد تمام کار&zwnj;ها در این دایرکتوری انجام می&lrm;شود.</p>
                </li>
                <li dir="rtl" style="list-style-type: disc;">
                <p dir="rtl" role="presentation">دستور COPY فایل requirements.txt را در آدرس /. کپی می&lrm;نماید. این فایل برای نصب پیش&lrm;نیاز&zwnj;های اجرای کد لازم است.</p>
                </li>
                <li dir="rtl" style="list-style-type: disc;">
                <p dir="rtl" role="presentation">دستور RUN برای اجرای دستورات به کار می&rlm;رود. به عنوان مثال، پیش&lrm;نیاز&lrm;ها با اجرای دستور زیر بر روی داکر ایمیج نصب می&rlm;شوند.</p>
                </li>
                </ul>
                <p dir="ltr">pip install --no-cache-dir -r requirements.txt</p>
                <ul>
                <li dir="rtl" style="list-style-type: disc;">
                <p dir="rtl" role="presentation">دستور CMD برای اجرای فرمان&zwnj;های داکر در زمان آغاز به کار آن است. در مثال فوق، می&zwnj;خواهیم وقتی داکر ایمیج اجرا شد، اسکریپت ما با استفاده از پایتون اجرا شود.</p>
                </li>
                </ul>
                <p dir="rtl">بعد از تکمیل فایل داکر، برای ساخت داکر ایمیج لازم است دستور زیر را در پوشه شامل فایل داکر اجرا نماییم.</p>
                <p dir="ltr">docker build --tag nextera_test /path/to/dockerfile</p>
                <p dir="rtl">شما به هنگام ساخت داکر ایمیج باید به جای nextera_test از اسم لاتین تیم خود استفاده نمایید تا اسم داکر ایمیج اسم تیم خودتان باشد.&nbsp;</p>
                <p dir="rtl">سپس برای اجرای داکر ایمیج خود و ساخته شدن یک کانتینر می&zwnj;توانید از دستورات زیر استفاده نمایید.</p>
                <ul>
                <li dir="rtl" style="list-style-type: disc;">
                <p dir="rtl" role="presentation">حالت تست و آزمایشی (در سیستم خودتان). توجه کنید که در این حالت باید از localhost در کد پایتون خود جهت اتصال به سرور و دیتابیس استفاده کنید.</p>
                </li>
                </ul>
                <p dir="ltr">docker run --name nextera_test1 --network host -d nextera_test</p>
                <ul>
                <li dir="rtl" style="list-style-type: disc;">
                <p dir="rtl" role="presentation">ساخت ایمیج نهایی و بررسی و ثبت آن. این حالت زمانی است که شما نتایج خود را در حالت تست، نهایی کردید و قصد ساخت ایمیج نهایی را دارید. برای ساخت ایمیج نهایی، localhost را برای اتصال به سرور به nginx و برای اتصال به دیتابیس به mongodb&nbsp; تغییر دهید.</p>
                </li>
                </ul>
                <p dir="ltr">docker run --name nextera_test1 --network docker_default -d nextera_test</p>
                <p dir="rtl">باید بجای nextera_test از اسم تیم خود استفاده نمایید. همچنین می&rlm;توانید به جای nextera_test1&nbsp; از یک اسم دلخواه استفاده نمایید. از اجرای این دستورات برای بررسی درست بودن داکر ایمیج خود استفاده نمایید.&nbsp;</p>
                <p dir="rtl">انتظار ما این است که پس از اجرای این دستور برنامه شما درون کانتینر اجرا شده تصاویر را از nginx گرفته و هر یک از تصاویر probe را با تمام تصاویر gallery مقایسه نماید و نتیجه مقایسه را درون پایگاه داده&rlm;ای به نام اسم تیم شما در MongoDB وارد نماید. نمونه کد مربوطه در شکل بخش دوم آمده است.</p>
                <p dir="rtl">فراموش نکنید که برای دسترسی به nginx بر روی سیستم خود از آدرس localhost و پورت 80 استفاده نمایید و برای دسترسی به MongoDB از آدرس localhost و پورت 27017 استفاده نمایید.</p>
                <p dir="rtl">نهایتا برای ذخیره کردن ایمیج نهایی خود به صورت یک فایل از دستور زیر استفاده کنید.</p>
                <p dir="ltr">docker save -o team_name.tar team_name</p>
                <p dir="rtl">مقادیر team_name را با نام تیم خود جایگزین کنید. اجرای دستور فوق یک فایل با نام team_name.tar در محل فعلی ایجاد می&zwnj;کند که در آن ایمیج team_name ذخیره شده است. بعد از آرگومان &ndash;o می&zwnj;توانید آدرس دلخواهی برای ذخیره ایمیج تعیین کنید.&nbsp;</p>
                <p><br /><br /><br /></p>

                
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
