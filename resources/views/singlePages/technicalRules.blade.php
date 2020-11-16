
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
                <p>&nbsp;</p>
<h1><strong>قوانین فنی مسابقه</strong></h1>
<p>&nbsp;</p>
<p><span style="font-weight: 400;">هدف اصلی در این مسابقه شناسایی مجموعه بسته</span><span style="font-weight: 400;"> چهره است. مجموعه گالری</span><span style="font-weight: 400;"> به تعداد </span><em><span style="font-weight: 400;">N</span></em><span style="font-weight: 400;">&nbsp; </span><span style="font-weight: 400;">و مجموعه پروب</span><span style="font-weight: 400;"> به تعداد </span><em><span style="font-weight: 400;">M</span></em> <span style="font-weight: 400;">که </span><em><span style="font-weight: 400;">M&gt;&gt;N</span></em><span style="font-weight: 400;"> توسط تیم ارزیاب در نظر گرفته شده است. ابتدا باید مجموعه گالری به صورت دستهای توسط محصول هر شرکت‌کننده ثبت نام</span><span style="font-weight: 400;"> شود. سپس هر یک از تصاویر پروب به صورت جداگانه برای شناسایی با تصاویر گالری مطابقت داده شوند. انتظار میرود همانند شکل 1، خروجی یک لیست کاندید </span><em><span style="font-weight: 400;">K</span></em> <span style="font-weight: 400;">تایی به همراه امتیاز شباهت مربوطه باشد. مقدار </span><em><span style="font-weight: 400;">K</span></em><span style="font-weight: 400;"> باید به صورت پارامتریک قابل تعریف باشد که حداکثر میتواند به اندازه </span><em><span style="font-weight: 400;">N</span></em><span style="font-weight: 400;"> باشد. در مرحله اول مسابقه، تمام تیم‌ها مقدار </span><em><span style="font-weight: 400;">K</span></em><span style="font-weight: 400;"> را برابر </span><em><span style="font-weight: 400;">N</span></em><span style="font-weight: 400;"> در نظر بگیرند. در صورت رقابت نزدیک تیم‌های برتر برای مرحله دوم مسابقه که سایز گالری بسیار بزرگ‌تر خواهد بود، مقدار متفاوتی برای پارامتر </span><em><span style="font-weight: 400;">K </span></em><span style="font-weight: 400;">در نظر گرفته خواهد شد.</span> <span style="font-weight: 400;">اگر الگوریتم به هر دلیلی قادر به استخراج و ساخت الگو</span><span style="font-weight: 400;"> از یک تصویر گالری نبود، برای آن تصویر گالری نباید امتیاز شباهت وجود داشته باشد و به عنوان خطای عدم ثبت نام</span><span style="font-weight: 400;"> منظور خواهد شد. علاوه بر این، اگر الگوریتم از یک تصویر پروب نیز نتواند الگو استخراج نماید، نباید لیست متناظر با این تصویر تولید شود و به عنوان خطای عدم اکتساب</span><span style="font-weight: 400;"> منظور میشود. در این حالت نیازی به تولید لیست کاندید با امتیاز تماماً صفر وجود ندارد.&nbsp;</span></p>
<p><span style="font-weight: 400;">بر اساس لیستهای خروجی، برای همه تیمهای شرکت کننده، منحنی </span><span style="font-weight: 400;">CMC</span><span style="font-weight: 400;"> ترسیم شده و با احتساب نرخ </span><em><span style="font-weight: 400;">FTE</span></em><span style="font-weight: 400;"> و </span><em><span style="font-weight: 400;">FTA</span></em><span style="font-weight: 400;"> تیمها مورد ارزیابی قرار میگیرند. لازم به ذکر است علاوه بر دقت شناسایی، عوامل دیگری نظیر میزان حافظه مصرفی، اندازه قالب استخراج شده، زمان استخراج قالب و زمان تطبیق در رتبه بندی شرکت کنندگان تاثیر گذار خواهد بود. در ادامه توضیحات در مورد تصاویر، نحوه‌ی اجرا و خروجی مطلوب ارایه شده است.</span></p>
<p class="text-center">
  <img src="/img/compare-list.jpeg" class="img-fluid"><br>
  شکل1- لیست کاندید حاصل از مقایسات</p>
<p>&nbsp;</p>

<h2><strong>مشخصات تصاویر</strong></h2>

<p>&nbsp;</p>
<p><span style="font-weight: 400;">مجموعه تصاویر گالری و پروب، شامل تصاویر رنگی و سطح خاکستری با عمق 8 یا 24 بیتی خواهند بود. تمام این تصاویر به فرمت </span><span style="font-weight: 400;">jpg </span><span style="font-weight: 400;">استاندارد فشرده شدهاند. ابعاد تصاویر مختلف بوده و در بازه‌ی30 پیکسل تا 2048 پیکسل متغیر است. در هر تصویر حداکثر یک چهره وجود دارد. چالشهای متداول تصاویر چهره نظیر نورپردازی نامناسب</span><span style="font-weight: 400;">، زاویه سر سوژه</span><span style="font-weight: 400;">، پوشیدگی چهره</span><span style="font-weight: 400;"> با عینک، کلاه و حجاب و سایر موارد در هر دو مجموعه گالری و پروب وجود دارد. محدوده سنی افراد در تصاویر از کودکی تا پیری را شامل می‌شود. در شکل 2 برخی از این تصاویر نشان داده شده است.</span></p>

<p class="text-center"><img src="img/fourface.png" class="img-fluid" alt=""></p>
<p><span style="font-weight: 400;">یک مجموعه داده نمونه جهت آشنایی تیم‌ها با تنوع و فرمت تصاویر در سایت قرار داده شده است که تیم‌ها میتوانند آن را از داشبورد تیم خود دریافت نمایند.&nbsp;</span></p>
<p>&nbsp;</p>

<h1><strong>قوانین اجرایی مسابقه&nbsp;</strong></h1>

<p>&nbsp;</p>
<p><span style="font-weight: 400;">هر تیم برای شرکت در مسابقه، کد خود را با توجه به فایل راهنما آماده کرده و برنامه‌ی اجرایی خود را در قالب یک داکر ایمیج</span><span style="font-weight: 400;"> در زمان مقرر در وب سایت بارگذاری خواهد نمود. این ایمیج، توسط تیم ارزیاب بر روی سیستم حاوی تصاویر گالری و پروب اجرا شده و پس از اجرای کامل برنامه، نتایج ذخیره شده در پایگاه داده (MongoDB) به منظور رسم نمودار CMC لحاظ میشود. لازم به ذکر است هیچ تیمی مجاز به استفاده از کتابخانه هایی که نیاز به اخذ مجوز یا لیسانس تجاری دارند، نبوده و در صورت محرز شدن این موضوع از مسابقه کنار گذاشته خواهند شد. لازم به توضیح است که به منظور آموزش چگونگی ساخت و اجرای داکر ایمیج، علاوه بر فایل راهنما، ویدئو‌ی آموزشی جداگانه ای نیز در سایت قرار گرفته است.&nbsp;</span></p>
<p>&nbsp;</p>

<h2><strong>راه‌اندازی محیط داکر</strong></h2>

<p>&nbsp;</p>
<p><span style="font-weight: 400;">طبق راهنمای بخش 3 نیاز است یک محیط داکر در سیستم خود ایجاد نمایید. در این محیط دو داکر ایمیج وجود دارد. اولی یک http server برای دریافت تصاویر و دیگری یک MongoDB برای ذخیره نتایج می‌باشد.&nbsp;</span></p>
<p>&nbsp;</p>

<h2><strong>نحوه ارتباط با مجموعه تصاویر گالری و پروب</strong></h2>

<p>&nbsp;</p>
<p><span style="font-weight: 400;">پس از اجرای فایل docker.sh یک داکر nginx با همین نام در موتور داکر شما به وجود می‌آید که حاوی تصاویر گالری و پروب نمونه می‌باشد. برای دسترسی به تصاویر گالری ابتدا از آدرس </span><span style="font-weight: 400;">http://nginx/images/gallery/images.txt</span><span style="font-weight: 400;"> لیست نام تصاویر مجموعه گالری را دریافت کنید. فرمت این فایل به این شکل است که در هر سطر آن نام یک فایل تصویر گالری نوشته شده است. برای دسترسی به هر یک از این تصاویر کافی است نام فایل نوشته شده را به انتهای </span><span style="font-weight: 400;">http://nginx/images/gallery/</span><span style="font-weight: 400;"> اضافه نمایید.&nbsp;</span></p>
<p><span style="font-weight: 400;">برای دسترسی به تصاویر پروب ابتدا از آدرس </span><span style="font-weight: 400;">http://nginx/images/probe/images.txt</span><span style="font-weight: 400;"> لیست نام تصاویر مجموعه پروب را دریافت کنید. فرمت این فایل به این شکل است که در هر سطر آن نام یک فایل تصویر پروب نوشته شده است. برای دسترسی به هر یک از این تصاویر کافی است نام فایل نوشته شده را به انتهای </span><span style="font-weight: 400;">http://nginx/images/probe/</span><span style="font-weight: 400;"> اضافه نمایید. مثال مربوطه در بخش 3-1 قابل رویت است.&nbsp;</span></p>
<p>&nbsp;</p>

<h2><strong>نحوه ذخیره نتایج</strong></h2>

<p>&nbsp;</p>
<p><span style="font-weight: 400;">همانطور که پیشتر اشاره شد، ابتدا مجموعه تصاویر گالری در محصول هر شرکت کننده ثبت نام میشود. سپس تصاویر پروب دریافت و به صورت تک به تک با تمام تصاویر گالری مطابقت داده می‌شود و فرمت خروجی بر اساس مشخصاتی که در ادامه ارایه میشود، تولید شده و ذخیره می‌گردد.&nbsp;</span></p>
<p><span style="font-weight: 400;">یک داکر از نوع MongoDB با همین نام در موتور داکر شما ایجاد شده است. در این MongoDB یک پایگاه داده با نام لاتین تیم شرکت کننده ایجاد شده و پسورد آن نیز شماره موبایل سرگروه معرفی شده در سایت است. شرکت‌کننده باید خروجی خود را در این MongoDB با ویژگی‌های زیر ذخیره نماید:&nbsp;</span></p>
<ul>
<li style="font-weight: 400;"><span style="font-weight: 400;">برای هر تصویر پروب یک </span><span style="font-weight: 400;">رکورد </span><span style="font-weight: 400;">به نام آن تصویر ایجاد شود.</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">در هر </span><span style="font-weight: 400;">رکورد</span><span style="font-weight: 400;"> باید یک مجموعه </span><em><span style="font-weight: 400;">K</span></em><span style="font-weight: 400;">تایی حاوی یک زوج مرتب نوشته شود که مولفه اول آن نام تصویر گالری و مولفه دوم، امتیاز شباهت این تصویر گالری با تصویر پروب این رکورد است.</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">همانطور که گفته شد، مقدار </span><em><span style="font-weight: 400;">K</span></em> <span style="font-weight: 400;">برابر با مقدار </span><em><span style="font-weight: 400;">N</span></em><span style="font-weight: 400;"> در نظر گرفته شود.</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">زوج‌ها میتوانند بر حسب امتیاز شباهت به &zwnj;صورت نزولی مرتب شده&zwnj; باشند ولی الزامی به انجام این کار وجود ندارد.</span></li>
</ul>
<p><span style="font-weight: 400;">به &zwnj;عنوان مثال فرض کنید پوشه گالری شامل سه تصویر با نام&zwnj;های زیر باشد.</span></p>
<p class="text-info" dir="ltr"><span style="font-weight: 400;">Gallery1.jpg</span></p>
<p class="text-info" dir="ltr"><span style="font-weight: 400;">Gallery2.jpg</span></p>
<p class="text-info" dir="ltr"><span style="font-weight: 400;">Gallery3.jpg</span></p>
<p><span style="font-weight: 400;">و پوشه&zwnj;ی پروب شامل دو تصویر با نام&zwnj;های زیر باشد.</span></p>
<p class="text-info" dir="ltr"><span style="font-weight: 400;">Probe1.jpg</span></p>
<p class="text-info" dir="ltr"><span style="font-weight: 400;">Probe2.jpg</span></p>
<p><span style="font-weight: 400;">با این شرایط دو رکورد با نام&zwnj;های P1 و P2 به صورت زیر ذخیره خواهد شد.</span></p>
<p class="text-info" dir="ltr"><span style="font-weight: 400;">P1: {(Gallery1, 0.9983), (Gallery3, 0.5343), (Gallery2, 0.0013)}</span></p>
<p class="text-info" dir="ltr"><span style="font-weight: 400;">P2: {(Gallery2, 0.8505), (Gallery3, 0.5130), (Gallery1, 0.0134)}</span></p>
<p><span style="font-weight: 400;">دقت داشته باشید که در رکوردها حتما باید امتیاز شباهت درج شود و هرگونه عبارت دیگر نظیر NaN یا inf قابل قبول نیست و به عنوان خطا محسوب خواهد شد. مجدد یادآوری میگردد، اگر الگوریتم به هر دلیلی قادر به استخراج و ساخت الگو</span><span style="font-weight: 400;"> از یک تصویر گالری نبود، برای آن تصویر گالری نباید امتیاز شباهت وجود داشته باشد و به عنوان خطای عدم ثبت نام</span><span style="font-weight: 400;"> منظور خواهد شد. علاوه بر این، اگر الگوریتم از یک تصویر پروب نیز نتواند الگو استخراج نماید، نباید لیست متناظر با این تصویر تولید شود و به عنوان خطای عدم اکتساب</span><span style="font-weight: 400;"> منظور میشود. در این حالت نیازی به تولید لیست کاندید با امتیاز تماماً صفر وجود ندارد. به عنوان مثال اگر الگوریتم شما نتواند الگوی تصویر Gallery4.jpg را استخراج کند، نباید هیچ زوج مرتبی برای این تصویر در هیچ رکوردها وجود داشته باشد. اگر هم الگوریتم قادر به استخراج الگو از یک تصویر پروب نباشد، نباید رکورد متناظر با آن تصویر تولید شود. بدیهی است در صورت عدم رعایت هر یک از موارد فوق، شرکت کننده از مسابقه حذف خواهد شد.</span></p>
<p>&nbsp;</p>

<h1><strong>راهنمای گام به گام انجام مراحل شرکت در مسابقه</strong></h1>

<p>&nbsp;</p>
<p><span style="font-weight: 400;">برای راه‌اندازی محیط داکر خود ابتدا فایل docker.zip را از داشبورد تیم خود دریافت و پس از unzip کردن آن، مراحل زیر را دنبال کنید.&nbsp;</span></p>
<p>&nbsp;</p>

<h2><strong>نصب و اجرای داکرهای تست</strong></h2>

<p>&nbsp;</p>
<p><span style="font-weight: 400;">برای نصب docker مراحل لینک زیر دنبال شود.</span></p>
<p class="text-info" dir="ltr"><span style="font-weight: 400;">&nbsp;</span><a href="https://docs.docker.com/engine/install/"><span style="font-weight: 400;">https://docs.docker.com/engine/install/</span></a></p>
<p><span style="font-weight: 400;">در صورتی که از سیستم عامل غیر از ویندوز استفاده می‌شود، باید docker compose نیز از لینک زیر نصب شود. در نسخه ویندوزی به صورت پیش فرض docker compose نصب شده است.</span></p>
<p class="text-info" dir="ltr"><a href="https://docs.docker.com/compose/install/"><span style="font-weight: 400;">https://docs.docker.com/compose/install/</span></a></p>
<p><span style="font-weight: 400;">همچنین برای اجرای اسکریپت‌های مورد نیاز در سیستم عامل ویندوز، باید از مسیر زیر git نصب شود.</span></p>
<p class="text-info" dir="ltr"><a href="https://git-scm.com/downloads"><span style="font-weight: 400;">https://git-scm.com/downloads</span></a></p>
<p><span style="font-weight: 400;">پس از نصب موارد بالا، در داخل پوشه docker راست کلیک نموده، سپس بر روی git bash here کلیک کرده و درون صفحه باز شده اسکریپت docker.sh را همانند شکل زیر اجرا نمایید.</span></p>
<p class="text-center">
  <img src="/img/docker-commandline.png" class="img-fluid"><br>
  شکل 3 - اجرای اسکریپت docker.sh
</p>
<p><span style="font-weight: 400;">توجه نمایید که به جای team_name باید اسم لاتین تیم (که در سایت ثبت&lrm;&zwnj;نام کرده‌اید) و به جای team_pass باید شماره موبایل سرگروه تیم را وارد کنید. با این کار در MongoDB پایگاه داده‌ای با نام کاربری اسم تیم و رمز عبور شماره موبایل سرگروه ساخته می&lrm;شود. این امر جهت ارزیابی نتایج الگوریتم شما بسیار حائز اهمیت است چرا که تیم داوری به داده‌های شما با همین نام کاربری و رمز عبور دسترسی خواهد یافت.</span></p>
<p><span style="font-weight: 400;">در صورت بروز هر گونه مشکل در وارد کردن این موارد می&lrm;توانید دستور زیر را اجرا کرده و سپس دستور start را دوباره اجرا نمایید.</span></p>
<p class="text-info" dir="ltr"><span style="font-weight: 400;">./docker.sh stop</span></p>
<p><span style="font-weight: 400;">برای اطمینان از اجرای درست ایمیج&zwnj;ها، می توانید با استفاده از مرورگر سیستم خود آدرس&lrm;های زیر را باز کنید.</span></p>
<p class="text-info" dir="ltr"><a href="http://localhost/images/gallery/images.txt"><span style="font-weight: 400;">http://localhost/images/gallery/images.txt</span></a></p>
<p class="text-info" dir="ltr"><a href="http://localhost/images/probe/images.txt"><span style="font-weight: 400;">http://localhost/images/probe/images.txt</span></a></p>
<p><span style="font-weight: 400;">در این دو آدرس نام تمام فایل‌های تصاویر probe و gallery آمده است. برای مشاهده هر تصویر با داشتن اسم آن می توانید از آدرس‌های زیر استفاده کنید.</span></p>
<p class="text-info" dir="ltr"><a href="http://localhost/images/gallery/S000001.jpg"><span style="font-weight: 400;">http://localhost/images/gallery/S000001.jpg</span></a></p>
<p class="text-info" dir="ltr"><a href="http://localhost/images/probe/S000029.jpg"><span style="font-weight: 400;">http://localhost/images/probe/S000029.jpg</span></a></p>
<p>&nbsp;</p>

<h2><strong>یک نمونه کد تست جهت کار با داکرها</strong></h2>

<p>&nbsp;</p>
<p><span style="font-weight: 400;">در صورت موفقیت در تست مرحله قبل، می توانید کد خود را برای کار با ایمیج&zwnj;&zwj;&zwnj;ها بنویسید. جهت راحتی شما، در پوشه nextera_test یک نمونه کد پایتون برای برقراری ارتباط با پایگاه داده و دریافت تصاویر نوشته شده است.&nbsp;</span></p>
<div class="d-flex justify-content-center border border-light p-5"><img src="/img/python-file.png" class="img img-fluid"></div>
<p><span style="font-weight: 400;">برای اجرای این کد باید نکات زیر لحاظ شود:&nbsp;</span></p>
<ul>
<li style="font-weight: 400;"><span style="font-weight: 400;">در خط 9 به جای team_name باید اسم لاتین تیم و به جای team_pass باید شماره موبایل سرگروه تیم وارد شود.</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">کد فوق بر روی ماشین شما اجرا می&zwnj;شود. برای نسخه نهایی کد باید localhost را در خط 8 به MongoDB و در خطوط 14 و 17 به nginx تغییر دهید. برای ساخت ایمیج نهایی از کد خود و ارسال به مسابقه نیز </span><span style="font-weight: 400;">نباید</span><span style="font-weight: 400;"> از localhost استفاده شود. بنابراین برای حالت تست و اجرا روی سیستم خود از localhost استفاده کنید و برای ساخت ایمیج نهایی و ارسال به مسابقه، localhost را در خط 8 به MongoDB و در خطوط 14 و 17 به nginx تغییر دهید.</span></li>
</ul>
<p><span style="font-weight: 400;">قبل از اجرای کد تست، دستور زیر را اجرا نمایید تا پیش&lrm;نیاز&lrm;های مربوطه نصب شوند. فرض شده است که پایتون نسخه 2 یا 3 بر روی سیستم شما نصب است.</span></p>
<p class="text-info" dir="ltr"><span style="font-weight: 400;">pip install -r requirements.txt</span></p>
<p>&nbsp;</p>

<h2><strong>تهیه داکر از موتور خودتان جهت ارسال برای مسابقه</strong></h2>

<p>&nbsp;</p>
<p><span style="font-weight: 400;">بعد از این که کد خود را نوشتید باید آن را در قالب داکر ایمیج برای مسابقه ارسال کنید. برای ساخت داکر ایمیج باید یک Dockerfile فایل نوشته شود. در پوشه nextera_test یک نمونه Dockerfile برای ساخت داکر ایمیج وجود دارد.</span></p>
<p class="text-center">
  <img src="/img/docker.png" class="img-fluid"><br>
  شکل 5 – داکر فایل برای ساخت ایمیج
</p>
<ul>
<li style="font-weight: 400;"><span style="font-weight: 400;">دستور FROM مشخص می‌کند ایمیج از چه ایمیج پایه‌ای (base image) ساخته خواهد شد. از آن جا که در این مثال کد نمونه به زبان پایتون نوشته شده است، از ایمیج پایه python:3 استفاده شده است. از طریق آدرس </span><a href="https://hub.docker.com"><span style="font-weight: 400;">https://hub.docker.com</span></a><span style="font-weight: 400;"> می توانید ایمیج پایه مورد نیاز خود را پیدا نمایید.</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">دستور WORKDIR یک دایرکتوری در /usr کانتینر به وجود می‌آورد. همچنین داخل کانتینر دایرکتوری را به همین دایرکتوری ساخته شده تغییر می&lrm;دهد و از آن به بعد تمام کار&zwnj;ها در این دایرکتوری انجام می&lrm;شود.</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">دستور COPY فایل requirements.txt را در آدرس /. کپی می&lrm;نماید. این فایل برای نصب پیش&lrm;نیاز&zwnj;های اجرای کد لازم است.</span></li>
<li style="font-weight: 400;"><span style="font-weight: 400;">دستور RUN برای اجرای دستورات به کار می‌رود. به عنوان مثال، پیش&lrm;نیاز&lrm;ها با اجرای دستور زیر بر روی داکر ایمیج نصب می‌شوند.</span></li>
</ul>
<p class="text-info" dir="ltr"><span style="font-weight: 400;">pip install --no-cache-dir -r requirements.txt</span></p>
<ul>
<li style="font-weight: 400;"><span style="font-weight: 400;">دستور CMD برای اجرای فرمان&zwnj;های داکر در زمان آغاز به کار آن است. در مثال فوق، می&zwnj;خواهیم وقتی داکر ایمیج اجرا شد، اسکریپت ما با استفاده از پایتون اجرا شود.</span></li>
</ul>
<p><span style="font-weight: 400;">بعد از تکمیل فایل داکر، برای ساخت داکر ایمیج لازم است دستور زیر را در پوشه شامل فایل داکر اجرا نماییم.</span></p>
<p class="text-info" dir="ltr"><span style="font-weight: 400;">docker build --tag nextera_test /path/to/dockerfile</span></p>
<p><span style="font-weight: 400;">شما به هنگام ساخت داکر ایمیج باید به جای nextera_test از اسم لاتین تیم خود استفاده نمایید تا اسم داکر ایمیج اسم تیم خودتان باشد.&nbsp;</span></p>
<p><span style="font-weight: 400;">سپس برای اجرای داکر ایمیج خود و ساخته شدن یک کانتینر می توانید از دستورات زیر استفاده نمایید.</span></p>
<ul>
<li style="font-weight: 400;"><span style="font-weight: 400;">تست و آزمایش (در سیستم خودتان)</span></li>
</ul>
<p><span style="font-weight: 400;">توجه کنید که در این حالت باید از localhost در کد پایتون خود جهت اتصال به سرور و پایگاه داده استفاده کنید. سپس با دستور زیر فایل داکر را اجرا نمایید.</span></p>
<p class="text-info" dir="ltr"><span style="font-weight: 400;">docker run --name nextera_test1 </span><span style="font-weight: 400;">--network host</span><span style="font-weight: 400;"> -d nextera_test</span></p>
<ul>
<li style="font-weight: 400;"><span style="font-weight: 400;">ساخت ایمیج نهایی برای ارسال به مسابقه</span></li>
</ul>
<p><span style="font-weight: 400;">زمانی که نتایج خود را در حالت تست نهایی کردید، جهت ساخت ایمیج نهایی لازم است ابتدا در کد خود برای اتصال به مجموعه تصاویر localhost را به nginx و برای اتصال به پایگاه داده بهMongoDB&nbsp; تغییر دهید و سپس با دستور زیر فایل داکر را اجرا نمایید.</span></p>
<p class="text-info" dir="ltr"><span style="font-weight: 400;">docker run --name nextera_test1 </span><span style="font-weight: 400;">--network docker_default </span><span style="font-weight: 400;">-d nextera_test</span></p>
<p><span style="font-weight: 400;">در دستورات فوق باید به جای nextera_test از اسم تیم خود و همچنین به جایnextera_test1&nbsp; از یک اسم دلخواه دیگر استفاده نمایید.&nbsp;</span></p>
<p><span style="font-weight: 400;">انتظار این است که پس از اجرای این دستور برنامه شما درون کانتینر اجرا شده تصاویر را از nginx گرفته و هر یک از تصاویر probe را با تمام تصاویر gallery مقایسه نماید و نتیجه مقایسه را درون پایگاه داده‌ای به نام اسم تیم شما در MongoDB وارد نماید.</span></p>
<p><span style="font-weight: 400;">فراموش نکنید که برای دسترسی به nginx بر روی سیستم خود از آدرس localhost و پورت 80 استفاده نمایید و برای دسترسی به MongoDB از آدرس localhost و پورت 27017 استفاده نمایید.</span></p>
<p><span style="font-weight: 400;">نهایتا برای ذخیره کردن ایمیج نهایی خود به صورت یک فایل از دستور زیر استفاده کنید.</span></p>
<p class="text-info" dir="ltr"><span style="font-weight: 400;">docker save -o team_name.tar team_name</span></p>
<p><span style="font-weight: 400;">team_name را با نام تیم خود جایگزین کنید. اجرای دستور فوق یک فایل با نام team_name.tar در محل فعلی ایجاد می&zwnj;کند که در آن، ایمیج team_name ذخیره شده است. بعد از آرگومان &ndash;o می توانید آدرس دلخواهی برای ذخیره ایمیج تعیین کنید.&nbsp;</span></p>
<p><span style="font-weight: 400;">از طریق داشبورد تیم خود و قسمت ارسال کد می توانید فایل team_name.tar را برای ارسال به مسابقه آپلود نمایید.</span></p>
<p>&nbsp;</p>
                
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
