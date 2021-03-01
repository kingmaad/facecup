
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
    <link href="css/style.css?expired=1525452552" rel="stylesheet" />
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

let c3 = new CountUp('c3Element', 75, options);
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


.carousel-container{
  position: relative;
  height: 100%;
  width: 100%;
}
/*<!-- Carousel -->*/

.carousel-inner {
  height: fit-content;
}
/*<!-- Carousel Text -->*/
.carousel-header{
  position:absolute;
  top:40%;
  left: 60%;
  transform: translate(-50%,-50%);
  z-index: 100;
  width: 60%;
  
}

.carousel-header-2{
  position:absolute;
  top:30%;
  left: 60%;
  transform: translate(-50%,-50%);
  z-index: 100;
  width: 60%;
  
}
.carousel-header-slide1-text-one{
  position:absolute;
  top:60%;
  left: 60%;
  transform: translate(-50%,-50%);
  z-index: 100;
}
.carousel-header-slide1-text-two{
  position:absolute;
  top:50%;
  left: 60%;
  transform: translate(-50%,-50%);
  z-index: 100;
}
.carousel-header-slide2-text-one{
  position:absolute;
  top:40%;
  left: 72%;
  transform: translate(-50%,-50%);
  z-index: 100;
  width: 100%;
}

.carousel-header-slide2-text-two{
  position:absolute;
  top:31%;
  left: 66%;
  transform: translate(-50%,-50%);
  z-index: 100;
}
.carousel-header-slide2-text-three{
  position:absolute;
  top:40%;
  left: 67%;
  transform: translate(-50%,-50%);
  z-index: 100;
}
.carousel-header-slide2-text-four{
  position:absolute;
  top:47%;
  left: 67%;
  transform: translate(-50%,-50%);
  z-index: 100;
}
.carousel-header-slide2-text-five{
  position:absolute;
  top:25%;
  left: 20%;
  transform: translate(-50%,-50%);
  z-index: 100;
}
.carousel-header h1 {
  text-align: center;
}

.carousel-header p {
  text-align: center;
}

@media (max-width: 768px) {

/* this is a responsive slider setting */
.carousel-header-slide2-text-one{
  position:absolute;
  top:50%;
  left: 50%;
  transform: translate(-50%,-50%);
  z-index: 100;
  width: 100%;
}
.carousel-header-slide2-text-five{
  position:absolute;
  top:75%;
  left: 20%;
  transform: translate(-50%,-50%);
  z-index: 100;
}
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
  padding: 5px;
  border-radius: 50px;
  border: 3px; 
  border-style: solid;
  border-color: rgb(251, 104, 52);
}

.supporter-logo:hover .image {
  opacity: 0.3;
}

.supporter-logo:hover .middle {
  opacity: 1;
}

.Diamond
{
  background-color: #6DCEFC;
  
}
.Golden
{
  background-color: #CFAB38;
  
}
.Silver
{
  background-color: #C8CACA;
}
.Spiritual
{
  background-color: #0aa832;
}
.Media
{
  background-color: #CEA2D2;
}
.draw-line-through {
   -webkit-text-decoration-line: line-through; /* Safari */
   text-decoration-line: line-through; 
}

</style>
@include('sections.head')
  </head>

  <body>
    @include('sections.header-menu')


 <!--==========================
      Gallery Section
    ============================-->
    <section id="gallery">
      <div class=" px-0">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

            <div id="carouselDiv" class="carousel-inner slider-default-bg"  role="listbox">
            <div class="carousel-item active">
                  <div class="min-vh-100 slider-seven-bg">
                    <img src="../img/intro-bg8.jpg" style="width:100%;height:100% position:absolute;z-index:-1;" />
                    </div>
                </div>
                <div class="carousel-item pull">
                  <div class=" min-vh-100 slider-one-bg">

                    <div class="carousel-header">
                      <h3 class="p-2 text-center rtl">مرکز نوآوری نکسترا در مشارکت با پارک علم و فناوری دانشگاه تهران برگزار میکند:</h3>
                      <h1 class="text-center">
                        <span>اولین</span>
                       مسابقه<br>
                       بازشناسی <span class="vibrate"> چهره</span> 
                       در ایران<br>
                       
                     </h1>
                     
                     <h2 class="text-center draw-line-through rtl">
                      <span> 15 </span>
                      بهمن ماه
                      <span> 99 </span>
                     
                     
                    </h2>
                    <h2 class="text-center rtl">
                      <span> 24 </span>
                      بهمن ماه
                      <span> 99 </span>
                      <span class="h6 bg-success text-white p-1 rounded"> تمدید شد </span>
                     
                    </h2>
                    <p class="text-center">
                      <a class="custom-btn" href="/signupTeam">اکنون <span class="freespan h5 font-weight-bold">رایگان</span> ثبت نام کنید</a>
                    </p>
                    </div>
                          
                            

                    </div>
                </div>
                <div class="carousel-item pull">
                  <div class="min-vh-100 slider-two-bg">
                     <div id="carousel-header-slide2-text-one" class="carousel-header-slide2-text-one rtl" >
                      <h1 class="text-center">
                        <span class=""> 75 </span>میلیون تومان جایزه  
                      
                      </h1>
                      <h2 class="text-center">
                        <span> 20 </span>میلیون تومان جایزه تیم اول 
                    
                      </h2>
                      <h3 class="text-center">
                        <span> 15 </span>میلیون تومان جایزه تیم دوم   
                  
                      </h3>
                      <h3 class="text-center">
                        <span> 10 </span>میلیون تومان جایزه تیم سوم
                      
                      </h3>
                      <div >
                        <h1 class="text-center">
                          <span> 30</span>میلیون تومان    
                          <br>جـــــــــایزه ویـــــــــژه
                        
                      </h1>
                      <p class="text-center">
                        <a class="custom-btn" href="/signupTeam">اکنون <span class="freespan h5 font-weight-bold">رایگان</span> ثبت نام کنید</a>
                      </p>
                      </div> 
                     </div>   
              
              
                    </div>
                </div>
                <div class="carousel-item pull">
                  <div class="min-vh-100 slider-three-bg">
                     <div id="carousel-header-slide2-text-one" class="carousel-header-slide2-text-one rtl" >
                      <h2 class="text-center">
                        با شرکت در فیس‌کاپ <span>جایزه</span> بگیرید
                      </h2>
                      <h2 class="text-center">
                        با شرکت در فیس‌کاپ <span>استخدام</span> شوید
                    
                      </h2>
                      <h3 class="text-center">
                        با شرکت در فیس‌کاپ <span>دانش و دقت الگوریتم</span> خود را بسنجید

                  
                      </h3>
                      <h3 class="text-center">
                        با شرکت در فیس‌کاپ<span> گواهی رتبه بین رقبا</span> خود دریافت کنید

                      
                      </h3>
                      <p class="text-center mt-5">
                        <a class="custom-btn" href="/signupTeam">اکنون <span class="freespan h5 font-weight-bold">رایگان</span> ثبت نام کنید</a>
                      </p>
                     </div>   
                                 
              
                    </div>
                </div>
                
                <div class="carousel-item pull">
                  <div class="min-vh-100 slider-four-bg">
                     <div id="carousel-header-slide2-text-one" class="carousel-header-slide2-text-one rtl" >
                      
                     
                     </div>   
                                 
              
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
            <div class="col-lg-6 rtl text-justify">
              <h2>درباره مسابقه فیس‌کاپ</h2>
              <p>یکی از راه‌های کشف و شکوفایی استعدادها و همچنین ایجاد محیط رقابتی مناسب بین آن ها،  برگزاری مسابقات عملی با استانداردهای بین‌المللی است. در زمینه بازشناسی چهره، موسسه NIST مسابقات مختلفی را تحت عنوان FRVT برگزار می‌کند که امروزه به‌عنوان مرجعی برای رقابت شرکت‌ها و گروه‌های تحقیقاتی مختلف در این زمینه شناخته می‌شود. این رویداد به عنوان اولین رویداد مشابه FRVT در ایران و بصورت آنلاین و با پشتوانه دانشگاهی در کشور برگزار می شود و تمام تیم‏های حقیقی یا حقوقی که در حوزه شناسایی و تشخیص چهره کار میکنند می توانند الگوریتم خود را جهت ارزیابی و رتبه بندی به این مسابقه ارسال کنند.
              </p>
            </div>
            <div class="col-lg-3">
              <h3>نحوه برگزاری ؟</h3>
              <p>بصورت مجازی</p>
            </div>
            <div class="col-lg-3">
              <h3>زمان؟</h3> 
              <p>
                <h1 class="orange-color">
                15 بهمن ماه 99
                </h1>
              </p>
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
              <h3><a href="#">رتبه بندی</a></h3>
              <p class="p-2 m-0">رتبه بندی و ارائه گواهی رتبه برای <br>الگوریتم و موتور طراحی شده </p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="hotel p-3">
              <h3><a href="#">شبکه سازی</a></h3>
              <p class="p-2 m-0">شناسایی استعداد و انتخاب <br>برای شرکت در پروژه های ملی</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="hotel p-3">
              <h3><a href="#">فرصتهای شغلی</a></h3>
              <p class="p-2 m-0">ارتباط با شرکت های مطرح در این <br>حوزه و موقعیت های شغلی متعدد</p>
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
                <p>بیشتر از 75 میلیون تومان جایزه نقدی</p>
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
          <h2>حامیان فیس کاپ</h2>
        </div>

        <div class="row no-gutters supporters-wrap clearfix">
          @foreach ($sponsors as $sponsor)
          <div class="col-lg-3 col-md-4 col-xs-6">
            
            <div class="supporter-logo">
              
              <a href="{{ $sponsor->website_url }}"><img src="{{ $sponsor->img_url }}" class="img-fluid" alt="{{ $sponsor->title }}" /></a>
              <div class="middle {{ $sponsor->type }}">
                <div class="text text-white">
                  @switch($sponsor->type)
                    @case('Diamond')
                        بسته الماس
                        @break
                
                    @case('Golden')
                        بسته طلایی
                        @break
                    @case('Silver')
                        بسته نقره‌ای
                        @break
                    @case('Spiritual')
                        حامی معنوی
                        @break
                    @case('Media')
                        حامی رسانه ای
                        @break
                  @endswitch
                </div>
              </div>
            </div>
          </div>
          @endforeach
          <div class="col-lg-3 col-md-4 col-xs-6">
            <div class="supporter-logo">
              <a href="/sponsor"><img src="/img/supporters/invite.png" class="img-fluid" alt="حامی ما شوید" /></a>
            </div>
          </div>





        </div>
      </div>
    </section>

    @if($faqs->count())
    <section id="faq" class="wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
      <div class="container">
        <div class="section-header">
          <h2>سوالات متداول</h2>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <ul id="faq-list">
              @foreach ($faqs as $key=>$value)
              <li>
                <a data-toggle="collapse" class="collapsed" href="#faq{{ $key+1 }}">{{ $value->question }}
                  <i class="fa fa-minus-circle"></i></a>
                <div id="faq{{ $key+1 }}" class="collapse" data-parent="#faq-list">
                  <p class="pr-5 rtl">
                    {{ $value->answer }}
                  </p>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </div>
    </section> 
    @endif
  

    
      <!--==========================
      Subscribe Section
    ============================-->
      <section id="subscribe">
        <div class="container wow fadeInUp">
          <div class="section-header">
            <h2>خبر نامه</h2>
            <p>جهت دریافت ایمیل اطلاع رسانی اخبار و رخدادهای مهم، در خبرنامه ی ما عضو شوید</p>
          </div>

          <form id="newsletter" method="POST" action="#">
            {{ csrf_field() }}
            <div class="form-row justify-content-center">
              <div class="col-auto">
                <input
                  type="text"
                  class="form-control"
                  placeholder="ابمیل خود را وارد کنید"
                  name="email"
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
            <div class="col-md-4">
              <div class="contact-email">
                <i class="ion-ios-telephone-outline"></i>
                <h3>ما را اینجا دنبال کنید</h3>
                <p><a class="instagram" href="https://www.instagram.com/facecup.ir/"><i class="fa fa-instagram"></i></a></p>
              </div>
            </div>
          </div>

          <div class="form">
            <div id="sendmessage">پیام شما با موفقیت ارسال شد</div>
            <div id="errormessage"></div>
            <form action="/sendMessage" method="post"  class="contactForm" id="contactus">
            {{ csrf_field() }}
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
                  id="message"
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
          © ۱۳۹9 | تمامی حقوق این وب سایت متعلق به فیس‌کاپ می باشد. | Powered by facecup

        </div>
      
      </div>
    </footer>
    <!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    <div id="success-toast" class="position-fixed alert alert-success alert-dismissible fade show" role="alert"  style="top:80%; right:20px;display:none;">
      پیام شما با موفقیت ارسال شد
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/additional-methods.min.js"></script>
<script>
  $( "#newsletter" ).validate({
                      
                      messages: {
                          email: {
                              required: "لطفا نام لاتین تیم خود را وارد کنید"
                          },
                          
                      },
                      submitHandler: function(form) {
                            let mail = $("input[name=email]").val();
                            let _token   =  $("input[name=_token]").val();
                            $.ajax({
                                url: "/newsletter",
                                type:"POST",
                                data:{
                                email:mail,
                                _token: _token
                                },
                                success:function(response){
                                console.log(response);
                                if(response) {
                                    result = response;
                                    console.log(response.hasError==false);
                                    if(response.hasError == false)
                                    {
                                      alert('ثبت نام شما در خبرنامه با موفقیت انجام شد');
                                    }
                                    else
                                    {
                                      alert(response.errors.email);                                      
                                    }                                    
                                }
                                },
                            });
                        }
                });
                // $( "#contactus" ).validate({
                      
                //       // messages: {
                //       //     email: {
                //       //         required: "لطفا نام لاتین تیم خود را وارد کنید"
                //       //     },
                          
                //       // },
                //       submitHandler: function(form) {
                //             let name = $("input[name=name]").val();
                //             let email = $("input[name=contact_email]").val();
                //             let subject = $("input[name=subject]").val();
                //             let message = document.getElementById("message").value;
                //             let _token   =  $("input[name=_token]").val();
                //             $.ajax({
                //                 url: "/sendMessage",
                //                 type:"POST",
                //                 data:{
                //                   name:name,
                //                   email:email,
                //                   subject:subject,
                //                   message:message,
                //                   _token: _token
                //                 },
                //                 success:function(response){
                //                 console.log(response);
                //                 if(response) {
                //                     result = response;
                //                     console.log(response.hasError==false);
                //                     if(response.hasError == false)
                //                     {
                                      
                //                       $("#sendmessage").addClass("show");
                //                       $("#errormessage").removeClass("show");
                //                       $('.contactForm').find("input, textarea").val("");
                //                     }
                //                     else
                //                     {
                //                       $("#sendmessage").removeClass("show");
                //                       $("#errormessage").addClass("show");
                //                       $('#errormessage').html('متاسفانه مشکلی پیش آمده است');
                                      
                                      
                                      
                //                     }     
                             
                //                 }
                //                 },
                //             });
                //         }
                // });
</script>
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
