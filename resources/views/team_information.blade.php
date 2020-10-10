
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
.register 
{
  font-family: "Samim" !important;
}
</style>
  </head>

  <body class="body-bg">
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
            <li><a href="#contact">تماس با ما</a></li>
            <li><a href="#supporters">وبلاگ</a></li>
            <li><a href="#gallery">هیات داوری</a></li>
            <li><a href="#hotels">فرصت های شغلی</a></li>

            <li><a href="#venue">جوایز</a></li>
            <li><a href="#speakers">حامیان</a></li>
            <li class="dropdown rtl">
              <a href="#about">درباره مسابقه</a>
              <ul class="dropdown-menu dropdown-menu-right">
                  <li><a href="#">قوانین اجرایی</a></li>
                  <li><a href="#">قوانین فنی</a></li>
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

 

    <main id="main" class="main-page">
        <section id="speakers-details" class="wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
            <div class="container">
              <div class="row">
                <div class="page-content">
                    <div class="form-v2-content form-v3-content">
                        <div class="container">
                            <div class="row">
                                <form class="form-detail" action="TeamInfo" method="post" id="myform" enctype="multipart/form-data">
                                    <h2 class="text-right">فرم ثبت نام تیم</h2>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-row">
                                                <label style="font-size:40px">{{ $en_name }} :نام لاتین </label>
                                                
                                            </div>
                                            <div class="form-row text-right">
                                                <label for="organ_dependence">وابستگی سازمانی</label>
                                                <input type="text" name="organ_dependence" value="{{ $organ_dependence }}" id="organ_dependence" class="input-text text-right" required>
                                            </div>
                                            <div class="form-row text-right">
                                                <label for="team_leader_family">نام خانوادگی سرگروه</label>
                                                <input type="text" name="team_leader_family" value="{{ $team_leader_family }}" id="team_leader_family" class="input-text text-right" required>
                                            </div>
                                            <div class="form-row text-right">
                                                <label for="university">دانشگاه</label>
                                                <input type="text" name="university" value="{{ $university }}" id="university" class="input-text text-right" required >
                                            </div>
                                            <div class="form-row text-right">
                                                <label for="cv_url">فایل رزومه</label>
                                                <form class="md-form">
                                                    <div class="file-field">
                                                      <div class="btn btn-sm float-left">
                                                        <span>Choose file</span>
                                                        <input type="file" name="cv_url">
                                                      </div>
                                                      
                                                    </div>
                                                  </form>
                                            </div>
                                            {{ csrf_field() }}
                                            <div class="form-row-last text-center">
                                                <input type="submit" name="register" class="register" value="تایید">
                                            </div>
                                        </div>  
                                        <div class="col-lg-6">
                                            <div class="form-row">
                                                <label style="font-size:40px">نام تیم: {{ $fa_name }}</label>
                                            </div>
                                            <div class="form-row text-right">
                                                <label for="team_type">نوع تیم</label>
                                                <select class="input-text text-right rtl" style="height: 55px;width:91%" name="team_type">
                                                    <option value="1">آزاد</option>
                                                    <option value="2">دانشجویی</option>
                                                    <option value="3">شرکتی</option>
                                                </select>
                                            </div>
                                            <div class="form-row text-right">
                                                <label for="team_leader_name">نام سرگروه</label>
                                                <input type="text" value="{{ $team_leader_name }}" name="team_leader_name" id="team_leader_name" class="input-text text-right" required>
                                            </div>
                                            <div class="form-row text-right">
                                                <label for="degree">مدرک تحصیلی</label>
                                                <input type="text" value="{{ $degree }}" name="degree" id="degree" class="input-text text-right" required >
                                            </div>
                                            <div class="form-row text-right">
                                                <label for="major">رشته تحصیلی</label>
                                                <input type="text" value="{{ $major }}" name="major" id="major" class="input-text text-right" required >
                                            </div>
                                        </div>  
                                    </div>
        
                                    
                                </form>
                            </div>
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-8">
                                    <!-- Table  -->
<table class="table table-bordered">
    <!-- Table head -->
    <thead>
      <tr>
        <th>
حذف
        </th>
        
        <th>رزومه</th>
        <th>رشته</th>
        <th>دانشگاه</th>
        <th>مدرک</th>
        <th>نام ونام خانوادگی</th>
        <th>شماره</th>

      </tr>
    </thead>
    <!-- Table head -->
  
    <!-- Table body -->
    <tbody>
        @foreach ($members as $key=>$item)
        <tr>
        <th>
            <a href="#" title="Delete" id="removeMember" data-id="{{ $item->id }}"><i class="fa fa-remove" ></i></a>
        </th>
        <td>{{ $item->cv_url? 'دارد':'ندارد' }}</td>
        <td>{{ $item->field }}</td>
        <td>{{ $item->university }}</td>
        <td>{{ $item->major }}</td>
        <td>{{ $item->first_name.' '.$item->last_name }}</td>
        <td> {{ ++$key }} </td>
        
      </tr>
      @endforeach
    </tbody>
    <!-- Table body -->
  </table>
  <!-- Table  -->
                                </div>
                                <div class="col-lg-2"></div>
                            </div>
                            <div class="row p-4">
                                <div class="col-lg-5"></div>
                            <div class="col-lg-2"><input type="button" class="btn p-2 text-white bg-success" id='addnewmember' value="اضافه کردن عضو جدید" data-toggle="modal" data-target="#centralModalSm"></div>
                            <div class="col-lg-5"></div>
                            </div>
                            
                        </div>


                        
                    </div>
                    
                </div>
                <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
                <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
                <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
                <script>

                    var result;
                    $( "#myform2" ).validate({
                        rules: {
                          en_name: {
                              required: true,
                              remote: {
                                  url: "/check_en_name",
                                  type: "get"
                              }
                          },
                          fa_name: {
                              required: true,
                              remote: {
                                  url: "/check_fa_name",
                                  type: "get"
                              }
                          },
                          mobile: {
                              required: true,
                              remote: {
                                  url: "/check_mobile",
                                  type: "get"
                              }
                          },
                      },
                          messages: {
                              organ_dependence: {
                                  required: "لطفا نام لاتین تیم خود را وارد کنید",
                                  remote : "این نام قبلا در سیستم ثبت شده است"
                              },
                              major: {
                                  required: "لطفا نام فارسی تیم خود را وارد کنید",
                                  remote:"این نام قبلا در سیستم ثبت شده است"
                              },
                              university: {
                                  required: "لطفا شماره موبایل را وارد کنید",
                                  remote:"این شماره موبایل قبلا ثبت شده است",
                                  pattern : "شماره موبایل معتبری را وارد نمایید"
                              },
                              university: {
                                  required: "لطفا شماره موبایل را وارد کنید",
                                  remote:"این شماره موبایل قبلا ثبت شده است",
                                  pattern : "شماره موبایل معتبری را وارد نمایید"
                              },
                              university: {
                                  required: "لطفا شماره موبایل را وارد کنید",
                                  remote:"این شماره موبایل قبلا ثبت شده است",
                                  pattern : "شماره موبایل معتبری را وارد نمایید"
                              },
                              university: {
                                  required: "لطفا شماره موبایل را وارد کنید",
                                  remote:"این شماره موبایل قبلا ثبت شده است",
                                  pattern : "شماره موبایل معتبری را وارد نمایید"
                              },
                      
                          },
                          submitHandler: function(form) {
                            let english_name = $("input[name=en_name]").val();
                                let farsi_name = $("input[name=fa_name]").val();
                                let mobile_number = $("input[name=mobile]").val();
                                let _token   =  $("input[name=_token]").val();

                                $.ajax({
                                    url: "/reg",
                                    type:"POST",
                                    data:{
                                    en_name:english_name,
                                    fa_name:farsi_name,
                                    mobile:mobile_number,
                                    _token: _token
                                    },
                                    success:function(response){
                                    console.log(response);
                                    if(response) {
                                        result = response;
                                        if(response.hasError == false)
                                        {
                                          alert('saved...');
                                          document.getElementById('myform').style.display = 'none';
                                          document.getElementById('mobile-number').innerHTML = mobile_number;
                                          document.getElementById('otp-validation').style.display = 'inline';
                                        }
                                        else
                                        {
                                          alert('error');
                                          console.log(response);
                                          $('.success').text(response.success);
                                          
                                        }
                                        
                                    }
                                    },
                                });
                            }
                    });
                    $( "#otp-validation" ).validate({
                      
                          messages: {
                              otp: {
                                  required: "لطفا نام لاتین تیم خود را وارد کنید"
                              },
                              
                          },
                          // submitHandler: function(form) {
                          //       let otp = $("input[name=otp]").val();
                          //       let _token   =  $("input[name=_token]").val();
                          //       $.ajax({
                          //           url: "/otp",
                          //           type:"POST",
                          //           data:{
                          //           otp:otp,
                          //           _token: _token
                          //           },
                          //           success:function(response){
                          //           console.log(response);
                          //           if(response) {
                          //               result = response;
                          //               if(response.hasError == false)
                          //               {
                          //                 alert('saved...');
                          //               }
                          //               else
                          //               {
                          //                 alert('error');
                          //                 console.log(response);
                          //                 $('.success').text(response.success);
                                          
                          //               }                                    
                          //           }
                          //           },
                          //       });
                          //   }
                    });
                   
                </script>
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
<!-- Central Modal Small -->
<div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <!-- Change class .modal-sm to change the size of the modal -->
  <div class="modal-dialog modal-lg text-right" role="document">

    <form class="form-detail" action="/AddMember" method="post" id="addMemberFrom" enctype="multipart/form-data">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">اضافه کردن عضو جدید به تیم</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          <div class="row">
            <div class="col-md-6 form-group">
                <label for="textbox1">نام خانوادگی</label>
                <input class="form-control" id="textbox1" type="text" name="last_name" id="last_name" required/>
            </div>
            <div class="col-md-6 form-group">
                <label for="textbox2">نام</label>
                <input class="form-control" id="textbox2" type="text" name="first_name" id="first_name" required/>
            </div>
            <span class="clearfix">
          </div>
          <div class="row">
            <div class="col-md-6 form-group">
                <label for="textbox1">رشته</label>
                <input class="form-control" id="textbox1" type="text" name="field" id="field" required/>
            </div>
            <div class="col-md-6 form-group">
                <label for="textbox2">مدرک</label>
                <input class="form-control" id="textbox2" type="text" name="major"  id="major" required/>
            </div>
            <span class="clearfix">
          </div>
          <div class="row">
            <div class="col-md-6 form-group">
                <label for="textbox1">رزومه</label>
                <input class="form-control" id="textbox1" type="file" name="resume" id="cv_url"/>
            </div>
            <div class="col-md-6 form-group">
                <label for="textbox2">دانشگاه</label>
                <input class="form-control" id="textbox2" type="text" name="university" id="university" required/>
            </div>
            <span class="clearfix">
          </div>
      </div>
      <div class="modal-footer">
          {{ csrf_field() }}
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">انصراف</button>
        <button type="submit" class="btn btn-primary btn-sm">اضافه کردن</button>
      </div>
      </div>
    </form>
  </div>
</div>

<!-- Central Modal Small -->
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
