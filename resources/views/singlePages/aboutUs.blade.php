
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
        <div class="container">
          <div class="section-header">
            <h2>درباره ما</h2>
           
          </div>

          <div class="row">
            <div class="col-md-6">
              <img src="img/speakers/1.jpg" alt="Speaker 1" class="img-fluid" />
            </div>

            <div class="col-md-6 content-speakers">
              <div class="details rtl text-justify">
                <h2>درباره ی ما چه می دانید؟</h2>
                <p>ما اینجاییم تا با برگزاری یک رویداد جذاب پیرامون حوزه هوش مصنوعی، علاقه مندان به این حوزه را دورهم جمع کنیم.
                  مرکز نوآوری نکسترا به عنوان فعال در عرصه اکوسیستم نوآوری وکارافرینی کشورمان با مشارکت پارک علم و فناوری دانشگاه تهران، قصد برگزاری رویداد در حوزه هوش مصنوعی، با موضوع تشخیص چهره دارد، رویدادی تحت عنوان فیس کاپ که هدف این رویداد شناسایی تیم ها و افراد مستعد و علاقه مند به فناوری تشخیص چهره است که به شناسایی فرصت ها و چالش های موجود منجر میشود.
                   </p>

                <p>
                  در جوامع امروزی، تشخیص چهره پاسخ مناسبی برای افزایش امنیت و جلوگیری از بروز حوادث است و برگزاری رویدادFaceCup  موجب خواهد شد تا ذی‌نفعان به سمت ایجاد راه حل های قدرتمند بینایی ماشین سوق داده شوند که در نهایت باعث می شود محیط های عمومی ایمن تر و هوشمندتر شوند.
                </p>

                <p>
                  این رویداد به عنوان مرجعی قابل اعتماد و پیشرو، کیفیت محصولات موجود را با معیار های مختلف خواهد سنجید و فرصتی برای علاقه‌مندان ایجاد خواهد کرد تا عملکرد الگوریتم‌های خود را بیازمایند.
                </p>
              </div>
            </div>
          </div>
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
        © ۱۳۹9 | تمامی حقوق این وب سایت متعلق به فیسکاپ می باشد. | Powered by facecup

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
{{-- <script>
  $( "#contactus" ).validate({
        
        // messages: {
        //     email: {
        //         required: "لطفا نام لاتین تیم خود را وارد کنید"
        //     },
            
        // },
        submitHandler: function(form) {
              let name = $("input[name=name]").val();
              let email = $("input[name=contact_email]").val();
              let subject = $("input[name=subject]").val();
              let message = document.getElementById("message").value;
              let _token   =  $("input[name=_token]").val();
              $.ajax({
                  url: "/sendMessage",
                  type:"POST",
                  data:{
                    name:name,
                    email:email,
                    subject:subject,
                    message:message,
                    _token: _token
                  },
                  success:function(response){
                  console.log(response);
                  if(response) {
                      result = response;
                      console.log(response.hasError==false);
                      if(response.hasError == false)
                      {
                        
                        $("#sendmessage").addClass("show");
                        $("#errormessage").removeClass("show");
                        $('.contactForm').find("input, textarea").val("");
                      }
                      else
                      {
                        $("#sendmessage").removeClass("show");
                        $("#errormessage").addClass("show");
                        $('#errormessage').html('متاسفانه مشکلی پیش آمده است');
                        
                        
                        
                      }     
               
                  }
                  },
              });
          }
  });
</script> --}}
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
