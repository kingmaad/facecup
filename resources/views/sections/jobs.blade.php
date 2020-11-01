
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

  <body class="text-center">
    @include('sections.header-menu')
    <main id="main" class="main-page">
      <!--==========================
      Speaker Details Section
    ============================-->
  
<section class="home-blog bg-sand rtl" >
    <div class="container bg-white p-5" >
      <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
  

        <main role="main" class="inner cover mb-5">
          @if(count($jobs))
          <h1 class="cover-heading text-center color-orange">فرصتهای شغلی</h1>
          
          <form action="/saveCV" method="POST" class="" id="myform" enctype="multipart/form-data">
            {{ csrf_field() }}
            

            <div class="row">
              @foreach ($jobs as $key=>$job)

                @if(!$job->expired)
                <div class="col-lg-6 mb-2">
                  <div class="card border-success  p-0">
                    <div class="card-header text-right">{{ $job->title }}</div>
                    <div class="card-body text-success">
                      <h5 class="card-title" style="white-space: pre-line">{!! $job->description !!}</h5>
                      <hr>
                      سطح تخصص مورد نیاز
                      <p>
                        @foreach ($job->level as $item)
                          @switch($item)
                            @case('intern')
                            <span class="btn btn-xs btn-primary rounded">کارآموزی</span>      
                              @break
                            @case('junior')
                            <span class="btn btn-xs btn-warning">جونیور</span>     
                                @break
                            @case('senior')
                            <span class="btn btn-xs btn-success">سنیور</span>     
                               @break
                            @case('military')
                            <span class="btn btn-xs btn-danger">دوره سربازی</span>     
                               @break
                           @endswitch
                      @endforeach
                        
                      </p>
                      <hr>
                      <p class="card-text text-right"><label for="job-{{ $job->id }}" class="btn btn-success">انتخاب<input id="job-{{ $job->id }}" type="checkbox" name="jobs[]" value="{{ $job->id }}"></label></p>
                    </div>
                  </div>
                </div>
                
                
                @else
                <div class="col-lg-6 mb-2">
                  <div class="card border-secondary p-0">
                    <div class="card-header text-right">{{ $job->title }}</div>
                    <div class="card-body text-secondary">

                      <h5 class="card-title">{{ $job->description }}</h5>
                      <hr>
                      سطح تخصص مورد نیاز
                      <p>
                        @foreach ($job->level as $item)
                          @switch($item)
                            @case('intern')
                            <span class="btn btn-xs btn-primary">کارآموزی</span>      
                              @break
                            @case('junior')
                            <span class="btn btn-xs btn-warning">جونیور</span>     
                                @break
                            @case('senior')
                            <span class="btn btn-xs btn-success">سنیور</span>     
                               @break
                            @case('military')
                            <span class="btn btn-xs btn-danger">دوره سربازی</span>     
                               @break
                           @endswitch
                      @endforeach
                        
                      </p>
                      <hr>
                      <p class="card-text"><label class="btn btn-light" disabled>منقضی شده</label></p>
                    </div>
                  </div>
                </div>
                
                @endif
                
               
              @endforeach

            </div>
          <div class="form-row text-left">
              <div class="text-danger w-100" id="errordiv" ></div>
              @if ($errors->any())
              @foreach ($errors->all() as $error)
                <div class="alert alert-danger w-100 text-center">{{$error}}</div>
              @endforeach
               @endif  
              @if (Session::has('message'))
                <div class="alert alert-{{ Session::get('type') }} text-center w-100">{{ Session::get('message') }}</div>
              @endif
          </div>

          <p class="h3 mt-5 mb-5 text-info ">جهت درخواست بررسی رزومه خود برای موقعیتهای شغلی موجود لطفا فرم زیر را پر کرده و حداقل یکی از فرصتهای شغلی بالا را انتخاب نمایید</p>
          <div class="form-row text-right">
            <div class="form-group col-md-3"></div>
            <div class="form-group col-md-6">
              <label for="name" style="width: 100%" >نام و نام خانوادگی</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="نام و نام خانوادگی خود را وارد نمایید">
            </div>
            <div class="form-group col-md-3"></div>
          </div>
          <div class="form-row text-right">
            <div class="form-group col-md-3"></div>
            <div class="form-group col-md-6">
              <label for="cv_file" style="width: 100%" >آپلود فایل رزومه</label>
              <input type="file" name="cv_file" class="form-control" id="cv_file" placeholder="فایل رزومه">
            </div>
            <div class="form-group col-md-3"></div>
          </div>
          
          <input type="submit" class="btn btn-lg btn-success" value="درخواست بررسی رزومه برای موقعیتهای شغلی">
        </form>
        @endif
        <br>
          <h1 class="cover-heading mt-5 pt-5"> معرفی فرصتهای شغلی شرکت شما</h1>
          <p class="h3 mt-2 text-info text-center">فرصتهای شغلی خود را به ما معرفی کنید تا متخصصان و تیم های دانشجویی شرکت کننده در مسابقه سریعتر شما رو پیدا کنند.</p>
          <p class="lead mt-4">
            <a href="/sponsor" class="btn btn-lg btn-info">معرفی فرصتهای شغلی</a>
          </p>

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
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
  <script>
      var result;
      $( "#myform" ).validate({
          rules: {
            'jobs[]': {
                required: true,
            },
            name:{
              required: true,
            },
            cv_file:{
                required:true,
                
            }
        },
            messages: {
              'jobs[]': {
                    required: "حداقل باید یکی از فرصتهای شغلی را انتخاب کنید",
                    
                },
                name: {
                    required: "لطفا نام و نام خانوادگی خود را وارد کنید",
                    
                },
                cv_file: {
                    required: "لطفا فایل رزومه خود را بارگذاری کنید",

                },
        
            },
            errorPlacement: function(error, element) {
            error.appendTo('#errordiv');
   }
      });
     
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

  <!-- colorlib form registration -->
      <script src="lib/colorlib/js/jquery.steps.js"></script>
      <script src="lib/colorlib/js/main.js"></script>
  

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
