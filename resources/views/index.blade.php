
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

  <body>
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

 <!--==========================
      Gallery Section
    ============================-->
    <section id="gallery">
      <div class=" px-0">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div id="carouselDiv" class="carousel-inner slider-default-bg min-vh-100" style="height: 670px;" role="listbox">
                <div class="carousel-item active">
                  <div class="d-flex align-items-center justify-content-center min-vh-100 slider-one-bg">
                        
                          <h1 class="mb-2 pb-0 soft-vibrate">
                            برگزاری <span>اولین</span><br>
                            مسابقه<br>
                            <span class="vibrate">بازشناسی چهره</span> <br>
                            در ایران
                          </h1>
                        
                    </div>
                </div>
                <div class="carousel-item">
                  <div class="d-flex align-items-center justify-content-center min-vh-100 slider-two-bg">
                        
                          <h1 class="mb-2 pb-0 soft-vibrate">
                            <span class="vibrate orange-color"> پنجاه میلیون تومان </span><br>
                            جایزه نفر اول <br>
                            مسابقه

                          </h1>
                        
                    </div>
                </div>
                
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    </section>

    <main id="main">
      <!--==========================
      About Section
    ============================-->
      <section id="about">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h2>درباره رویداد فیسکاپ</h2>
              <p>
                در جهان امروز با افزایش استفاده مردم از فناوری‌های نوین‌، فرصت‌های شگرفی در زمینه توسعه تکنولوژی به وجود آمده است. فناوری بازشناسی چهره به عرصه ای برای رقابت های بین المللی بدل گشته‌، و کشور های مختلف با ارائه محصولات بر پایه هوش مصنوعی برای سهم بیشتر از بازار 30 میلیارد دلاری هوش مصنوعی تلاش میکنند.
                در این بین با توجه به پتانسیل بالای کشورمان و لزوم وجود یک مرجع ارزیابی، به آن شدیم که مسابقه سالانه ای تحت عنوان Face Cup برگزار کنیم.این رویداد با برخورداری از طیف گسترده ای از مخاطبین و ذی نفعان توانسته توجه زیادی را به خود معطوف کند.
                
                
              </p>
            </div>
            <div class="col-lg-3">
              <h3>کجا ؟</h3>
              <p>ایران تهران محل همایش تهران</p>
            </div>
            <div class="col-lg-3">
              <h3>چه وقت؟</h3>
              <p>دوشنبه تا چهارشنبه<br />10 تا 12 شهریور</p>
            </div>
          </div>
        </div>
      </section>
 <!--==========================
      Hotels Section
    ============================-->
    <section id="hotels" class="section-with-bg wow fadeInUp text-center">
      <div class="container">
       
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="hotel p-3">
              <h3><a href="#">شناسایی تیم</a></h3>
              <p class="p-2 m-0">تشخیص و شناسایی چهرهشناسایی تیم های علاقه مند به فن آوری </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="hotel p-3">
              <h3><a href="#">شبکه سازی</a></h3>
              <p class="p-2 m-0">شبکه سازی بین متخصصین حوزه هوش مصنوعی</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="hotel p-3">
              <h3><a href="#">کشف استعداد</a></h3>
              <p class="p-2 m-0">کشف استعدادها حوزه هوش مصنوعی</p>
            </div>
          </div>
        </div>
      </div>
    </section>
      <!--==========================
      Speakers Section
    ============================-->
      <section id="speakers" class="wow fadeInUp">
        <div class="container">
          <div class="section-header">
            <h2>مسابقه شناسایی چهره</h2>
            <p>در مسابقه شناسایی چهره چه خبر است؟</p>
          </div>

          <div class="row text-center">
            <div class="col-md-4">
              <div class="contact-address">
                <i class="ion-ios-location-outline"></i>
                <h1><i class="fa fa-users"></i><span id="c1Element" class="m-4">20</span></h1>
                <p>متخصص ترین منتورها </p>
              </div>
            </div>

            <div class="col-md-4">
              <div class="contact-phone">
                <i class="ion-ios-telephone-outline"></i>
                <h1><i class="fa fa-handshake-o"></i><span id="c2Element" class="m-4">20</span></h1>
                <p>بیش از 10 فرصت شغلی در شرکت های معتبر ایران</p>
              </div>
            </div>

            <div class="col-md-4">
              <div class="contact-email">
                <i class="ion-ios-email-outline"></i>
                <h1><i class="fa fa-money"></i><span id="c3Element" class="m-4">20</span></h1>
                <p>بیشتر از 50 میلیون تومان جایزه نقدی</p>
              </div>
            </div>

          </div>
        </div>
      </section>

            <!--==========================
      Venue Section
    ============================-->
    <section id="venue" class="wow fadeInUp">

      <div class="container-fluid venue-gallery-container">
        <div class="row no-gutters">
          <div class="col col-xs-15">
            <div class="venue-gallery">
              <a
                href="img/venue-gallery/1.jpg"
                class="venobox"
                data-gall="venue-gallery"
              >
                <img src="img/venue-gallery/1.jpg" alt="" class="img-fluid" />
              </a>
            </div>
          </div>

          <div class="col col-xs-15">
            <div class="venue-gallery">
              <img src="img/venue-gallery/2.jpg" alt="" class="img-fluid" />
            </a>
            </div>
          </div>

          <div class="col col-xs-15">
            <div class="venue-gallery">
              <a
                href="img/venue-gallery/3.jpg"
                class="venobox"
                data-gall="venue-gallery"
              >
                <img src="img/venue-gallery/3.jpg" alt="" class="img-fluid" />
              </a>
            </div>
          </div>

          <div class="col col-xs-15">
            <div class="venue-gallery">
              <a
                href="img/venue-gallery/4.jpg"
                class="venobox"
                data-gall="venue-gallery"
              >
                <img src="img/venue-gallery/4.jpg" alt="" class="img-fluid" />
              </a>
            </div>
          </div>

          <div class="col col-xs-15">
            <div class="venue-gallery">

                <img src="img/venue-gallery/5.jpg" alt="" class="img-fluid" />

            </div>
          </div>



        </div>
      </div>
    </section>

          <!--==========================
      Sponsors Section
    ============================-->
    <section id="supporters" class="section-with-bg wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>اسپانسر ها</h2>
        </div>

        <div class="row no-gutters supporters-wrap clearfix">
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/Nextera-Enfold.png" class="img-fluid" alt="" />
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/digikala.png" class="img-fluid" alt="" />
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/yektanet.png" class="img-fluid" alt="" />
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/elmofanavari-park.png" class="img-fluid" alt="" />
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/sabtahval.png" class="img-fluid" alt="" />
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/up.png" class="img-fluid" alt="" />
            </div>
          </div>

          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <img src="img/supporters/mci.png" class="img-fluid" alt="" />
            </div>
          </div>

        </div>
      </div>
    </section>


         

    
      <!--==========================
      Subscribe Section
    ============================-->
      <section id="subscribe">
        <div class="container wow fadeInUp">
          <div class="section-header">
            <h2>خبر نامه</h2>
            <p>جهت دریافت ایمیل اطلاع رسانی اخبار و رخدادهای مهم، در خبرنامه ی ما عضو شوید</p>
          </div>

          <form method="POST" action="#">
            <div class="form-row justify-content-center">
              <div class="col-auto">
                <input
                  type="text"
                  class="form-control"
                  placeholder="ابمیل خود را وارد کنید"
                />
              </div>
              <div class="col-auto">
                <button type="submit">عضویت</button>
              </div>
            </div>
          </form>
        </div>
      </section>

    

      <!--==========================
      Contact Section
    ============================-->
      <section id="contact" class="section-bg wow fadeInUp">
        <div class="container">
          <div class="section-header">
            <h2>تماس با ما</h2>
            <p>جهت برقراری تماس با ما میتوانید از اطلاعات زیر و یا پیام خود را از طریق فرم ذیل برای ما ارسال نمایید</p>
          </div>

          <div class="row contact-info">
            <div class="col-md-4">
              <div class="contact-address">
                <i class="ion-ios-location-outline"></i>
                <h3>آدرس</h3>
                <address>تهران، بالاتراز تقاطع خیابان کارگرشمالی وخیابان جلال آل احمد، پردیس فنی دانشگاه تهران، ساختمان مکانیک قدیم، مرکز نوآوری نکسترا
                </address>
              </div>
            </div>

            <div class="col-md-4">
              <div class="contact-phone">
                <i class="ion-ios-telephone-outline"></i>
                <h3>شماره تلفن</h3>
                <p><a href="tel:+155895548855">02191090395</a></p>
              </div>
            </div>

          </div>

          <div class="form">
            <div id="sendmessage">پیام شما با موفقیت ارسال شد</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input
                    type="text"
                    name="name"
                    class="form-control"
                    id="name"
                    placeholder="نام"
                    data-rule="minlen:4"
                    data-msg="بیشتر از 4 کاراکتر وارد کنید"
                  />
                  <div class="validation"></div>
                </div>
                <div class="form-group col-md-6">
                  <input
                    type="email"
                    class="form-control"
                    name="email"
                    id="email"
                    placeholder="ایمیل"
                    data-rule="email"
                    data-msg="لطفا یک ایمیل معتبر وارد کنید"
                  />
                  <div class="validation"></div>
                </div>
              </div>
              <div class="form-group">
                <input
                  type="text"
                  class="form-control"
                  name="subject"
                  id="subject"
                  placeholder="موضوع"
                  data-rule="minlen:4"
                  data-msg="بیشتر از 8 کاراکتر وارد کنید"
                />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea
                  class="form-control"
                  name="message"
                  rows="5"
                  data-rule="required"
                  data-msg="لطفا یک پیام وارد کنید"
                  placeholder="پیام"
                ></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center">
                <button type="submit">ارسال کنید</button>
              </div>
            </form>
          </div>
        </div>
      </section>
      <!-- #contact -->
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

  
    

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>

  </body>
</html>
