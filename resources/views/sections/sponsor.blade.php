
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
    <main id="main">
      <!--==========================
      Speaker Details Section
    ============================-->
  
<section class="home-blog bg-sand rtl" style=" padding-top:100px;">
    <div class="container bg-white" >
      <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column text-justify">
  

        <main role="main" class="inner cover text-right text-justify rtl">
          <h1 class="cover-heading text-center color-orange">حامی ما شوید</h1>
          <p class="lead text-justify">

            ما در فیس کاپ در نظر داریم تا با همکاری پارک علم و فناوری دانشگاه تهران و مرکز نوآوری نکسترا، مسابقه ای در زمینه بازشناسی چهره برگزار کنیم تا با این اقدام نوآور کمکی به اعتلای اکوسیستم فعال در حوزه تشخیص چهره بنماییم. 
            در این راستا، شرکت ها و سازمان های دغدغه‌مند، می‌توانند با حمایت مادی و معنوی، سهم خود را در پیشرفت علمی کشور ایفا کنند و با استفاده از رسانه های در اختیار ما، مجموعه خود را به عنوان اسپانسر رسمی رویداد فیس‌کاپ معرفی کنند و از سایر  مزایای اسپانسرشیپ از جمله امکان دسترسی به رزومه شرکت کنندگان رویداد، بهره مند شوند.
            اگر به حمایت از مسابقه فیسکاپ علاقه مندید لطفا برای دریافت اطلاعات بیشتر،با ایمیل ما در ارتباط باشید.
          </p>
          <p class="h3 text-center p-s4">
            <a href="/files/facecup_finalsponsership.pdf" class="text-info"> دریافت پروپزال رویداد</a>
          </p>
          <div class="table-responsive">
            <table class="table table-striped ">
              <thead>
                <tr>
                  <th>نوع</th>
                  <th scope="col">نام</th>
                  <th scope="col">شرح</th>
                  <th scope="col">بسته الماس</th>
                  <th scope="col">بسته طلایی</th>
                  <th scope="col">بسته نقره‌ای</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="vertical2" rowspan="9"><div class="vertical2">تبلیغات آنلاین</div></td>
                  <td>
                    دسترسی به رزومه شرکت کنندگان
                    </td>
                  <td>
                    امکان دسترسی به رزومه ی تیم‌های شرکت کننده
                    </td>
                    <td>
                      <i class="fa fa-check"></i>
                      </td>
                      <td>
                        
                        </td>
                    
                        <td>
                          
                          </td>
                        
                </tr>
                <tr>
                  
                  <td>
                    دسترسی به رزومه کارجویان
                    </td>
                  <td>امکان دسترسی به رزومه ی علاقمندان به فرصت‌های شغلی</td>
                  <td><i class="fa fa-check"></i>
                </td>
                <td>
                  <i class="fa fa-check"></i>
                  </td>
              
                  <td>
                    
                    </td>
                </tr>
                <tr>
                  
                  <td>
                    معرفی فرصت شغلی
                    </td>
                  <td>ثبت آگهی شغلی در سایت رویداد</td>
                  <td>3</i>
                </td>
                <td>
                  1
                  </td>
              
                  <td>
                    
                    </td>
                </tr>
                <tr>
                  
                  <td>
                    ارسال ایمیل و پیامک
                    </td>
                  <td>ارسال ایمیل و پیامک معرفی انحصاری حامی به کل شرکت‌کنندگان</td>
                  <td><i class="fa fa-check"></i>
                </td>
                <td>
                  <i class="fa fa-check"></i>
                  </td>
              
                  <td>
                    
                    </td>
                </tr>
                <tr>
                  
                  <td>
                    معرفی شرکت و محصولات در صفحه اصلی سایت
                    </td>
                  <td>ایجاد صفحه اختصاصی برای شرکت و معرفی محصولات شرکت</td>
                  <td><i class="fa fa-check"></i>
                </td>
                <td>
                  <i class="fa fa-check"></i>
                  </td>
              
                  <td>
                    
                    </td>
                </tr>
                <tr>
                  
                  <td>
                    درج لوگو در سایت رویداد
                    </td>
                  <td>درج لوگو حامی در سایت رویداد که برای ثبت نام تیم‌ها استفاده می‌شود</td>
                  <td><i class="fa fa-check"></i>
                </td>
                <td>
                  <i class="fa fa-check"></i>
                  </td>
              
                  <td>
                    <i class="fa fa-check"></i>
                    </td>
                </tr>
                <tr>
                  
                  <td>
                    درج لوگو
                    </td>
                  <td>درج لوگو حامی در پوسترهای تبلیغاتی رویداد</td>
                  <td><i class="fa fa-check"></i>
                </td>
                <td>
                  
                  </td>
              
                  <td>
                    
                    </td>
                </tr>
                <tr>
                  
                  <td>
                    درج لوگو در بنرهای آنلاین شبکه‌های اجتماعی
                    </td>
                  <td>درج لوگو حامی در شبکه‌های اجتماعی رویداد</td>
                  <td><i class="fa fa-check"></i>
                </td>
                <td>
                  <i class="fa fa-check"></i>
                  </td>
              
                  <td>
                    <i class="fa fa-check"></i>
                    </td>
                </tr>
                <tr>
                  
                  <td>
                    درج لوگو در سایت خبری
                    </td>
                  <td>درج لوگو حامی در سایت‌های پوشش دهنده رویداد</td>
                  <td><i class="fa fa-check"></i>
                </td>
                <td>
                  
                  </td>
              
                  <td>
                    
                    </td>
                </tr>
  
                
                <tr>
                  <td rowspan="2" class="vertical"><div class="vertical">جوایز</div></td>
                  <td>
                    امکان افزودن جایزه ویژه
                    </td>
                  <td>تعریف هدف خاص و جایزه خاص برای تیم‌های شرکت کننده در مسابقه</td>
                    <td><i class="fa fa-check"></i>
                    </td>
                    <td>
                      <i class="fa fa-check"></i>
                      </td>
                  
                      <td>
                        <i class="fa fa-check"></i>
                        </td>
                </tr>
                <tr>
                  
                  <td>
                    بسته جایزه
                    </td>
                  <td>امکان قراردادن جوایز به همراه بسته‌های تبلیغاتی</td>
                    <td><i class="fa fa-check"></i>
                    </td>
                    <td>
                      
                      </td>
                  
                      <td>
                        
                        </td>
                </tr>
  
                <tr>
                  <td></td>
                  <td></td>
                  <td>مبلغ</td>
                  <td>30</td>
                  <td>20</td>
                  <td>10</td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td colspan="3" class="text-center">میلیون تومان</td>
  
                
                </tr>
              </tbody>
            </table>
          </div>
          
          
        </main>
      
      
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
        <p class="text-center custom-h1"><a href="mailto:facecup@nexterafactory.com" class="text-info">facecup@nexterafactory.com</a> </p>
        <p class="text-center custom-h1"><a href="tel:02191090395" class="text-info">شماره تماس دبیرخانه مسابقه: 02191090395</a></p>
        <p class="text-center custom-h1"><a href="tel:09192576086" class="text-info">دبیر اجرایی مسابقه - دکتر میلاد سجادی: 09192576086</a></p>
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
  <br><br><br>
  <footer id="footer">
     

    <div class="container">
      <div class="copyright">
        © ۱۳۹9 | تمامی حقوق این وب سایت متعلق به فیسکاپ می باشد. | Powered by facecup

      </div>
    
    </div>
  </footer>
  <!-- #footer -->
  <div id="success-toast" class="position-fixed alert alert-success alert-dismissible fade show" role="alert"  style="top:80%; right:20px;display:none;">
    پیام شما با موفقیت ارسال شد
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
{{-- <script>
  $( "#contactus" ).validate({
        
        messages: {
             contact_email: {
                 required: "لطفا نام لاتین تیم خود را وارد کنید"
             },
            
         },
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
