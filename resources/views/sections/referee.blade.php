
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
@include('sections.head')
  </head>

  <body>
    @include('sections.header-menu')
    <main id="main" class="main-page">
      <!--==========================
      Speaker Details Section
    ============================-->
  
<section class="home-blog bg-sand rtl" >
    <div class="container bg-white p-5" >
      <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column text-justify">
  
        
        <main role="main" class="inner cover mb-5 text-right text-justify rtl">
          <h1 class="cover-heading text-center color-orange">هیئت اجرائی</h1>
          <table class="table table-striped">
            <thead>
              <tr>
                <th></th>
                <th scope="col">نام و نام خانوادگی</th>
                <th scope="col">سمت و سازمان متبوع</th>
                
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>دبیر اجرایی</td>
                <td>
                  دکتر میلاد سجادی
                  </td>
                <td>
                  معاونت فنی مرکز نوآوری نکسترا
                  </td>
              </tr>
              <tr>
                <td>دبیر علمی</td>
                <td>
                  دکتر محمد صبری
                  </td>
                <td><a href="
                  http://teacher.qodsiau.ac.ir/sabri-introduction" class="text-info">
                  عضو هیات علمی
                  دانشگاه آزاد اسلامی
                  </a></td>
              </tr>
              
              <tr>
                <td class="vertical2" rowspan="11"><div class="vertical2">کمیته علمی (به ترتیب حروف الفبا)</div></td>
                <td>
                  دکتر سید امیر اصغری
                  </td>
                <td><a href="https://eng.khu.ac.ir/cv/330/%d8%b3%db%8c%d8%af%d8%a7%d9%85%db%8c%d8%b1-%d8%a7%d8%b5%d8%ba%d8%b1%db%8c-%d8%aa%d9%88%da%86%d8%a7%d8%a6%db%8c?&cv=330&mod=scv" class="text-info">عضو هیات علمی دانشگاه خوارزمی</a> 
                  
                  </td>
              </tr>
              <tr>
                
                <td>
                  دکتر محمد اکبری
                  </td>
                <td><a href="https://aut.ac.ir/cv/2046/%D9%85%D8%AD%D9%85%D8%AF-%D8%A7%DA%A9%D8%A8%D8%B1%DB%8C?slc_lang=fa&&cv=2046&mod=scv" class="text-info">عضو هیات علمی
                  دانشگاه امیرکبیر</a>
                  </td>
              </tr>
              <tr>
                
                <td>
                  دکتر کاوه پاشایی
                  </td>
                <td><a href="http://shdu.ac.ir/web/37855/174" class="text-info">عضو هیات علمی
                  دانشگاه شهاب دانش</a>
                  </td>
              </tr>
              <tr>
                
                <td>
                  دکتر فربد رزازی
                  </td>
                <td><a href="http://faculty.srbiau.ac.ir/f-razazi/fa" class="text-info">عضو هیات علمی
                  دانشگاه آزاد اسلامی
                  </a></td>
              </tr>
              <tr>
                
                <td>
                  دکتر سعید صدیقیان
                  </td>
                <td><a href="https://ce.kntu.ac.ir/Index.aspx?page_=professor&lang=1&sub=93&PageID=478&PageIDF=66&tempname=template261" class="text-info">عضو هیات علمی
                  دانشگاه خواجه نصیر
                  </a></td>
              </tr>
              <tr>
                
                <td>
                  دکتر عماد الدین فاطمی زاده
                  </td>
                <td><a href="http://ee.sharif.edu/~web/faculties/%D8%AF%DA%A9%D8%AA%D8%B1-%D9%81%D8%A7%D8%B7%D9%85%DB%8C-%D8%B2%D8%A7%D8%AF%D9%87%D8%8C%D8%B9%D9%85%D8%A7%D8%AF%D8%A7%D9%84%D8%AF%DB%8C%D9%86/" class="text-info">عضو هیات علمی
                  دانشگاه شریف
                  </a></td>
              </tr>
              <tr>
                
                <td>
                  دکتر کاظم فولادی قلعه
                  </td>
                <td><a href="https://rtis2.ut.ac.ir/cv/kfouladi" class="text-info">هیات علمی دانشگاه تهران
                  </a></td>
              </tr>
              <tr>
                
                <td>
                  دکتر احسان الله کبیر
                  </td>
                <td><a href="https://www.modares.ac.ir/pro/academic_staff/kabir" class="text-info">عضو هیات علمی دانشگاه تربیت مدرس
                  </a></td>
              </tr>
              <tr>
                
                <td>
                  دکتر شهره کسایی
                  </td>
                <td><a href="http://ce.sharif.edu/faculty/shohre-kasaei/" class="text-info">عضو هیات علمی
                  دانشگاه شریف
                  </a></td>
              </tr>
              <tr>
                
                <td>
                  دکتر محمد شهرام معین
                  </td>
                <td><a href="https://www.itrc.ac.ir/itrc-science-committee/56727" class="text-info">عضو هیات علمی
                  پژوهشگاه ارتباطات و فناوری اطلاعات
                  </a></td>
              </tr>
              <tr>
                
                <td>
                  دکتر هادی ویسی
                  </td>
                <td><a href="
                  https://fnst.ut.ac.ir/~h.veisi
                  " class="text-info">عضو هیات علمی
                  دانشگاه تهران
                  </a></td>
              </tr>
              <tr>
                <td rowspan="2" class="vertical"><div class="vertical">کمیته فنی</div></td>
                <td>
                دکتر حمید صادقی
                </td>
                <td>عضو تیم تخصصی هوش مصنوعی مرکز نوآوری نکسترا 
                  </td>
                
              </tr>
              <tr>
                <td>
                دکتر ندا داداشی
                  </td>
                <td>عضو تیم تخصصی هوش مصنوعی مرکز نوآوری نکسترا</td>
               
              </tr>
             
              <tr>
                <td rowspan="3" class="vertical"><div class="vertical">مدعوین</div></td>
                <td>
                  مهندس رضا باقری اصل
                  </td>
                <td>دبیر شورای اجرایی فناوری اطلاعات  
                  وزارت ارتباطات 
                  </td>
                
              </tr>
              <tr>
                <td>
                  مهندس حمید پارسایی
                  </td>
                <td>معاون فناوری اطلاعات و آمار جمعیتی
                  سازمان ثبت احوال</td>
               
              </tr>
              <tr>
                <td>دکتر جواد حسین زاده</td>
                <td>ریاست مرکز آمار ایران</td>
              </tr>

              
            </tbody>
          </table>
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
