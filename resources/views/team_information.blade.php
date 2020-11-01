
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
@include('sections.head')
  </head>

  <body class="body-bg">
    @include('sections.header-menu')

 

    <main id="main" class="main-page">
        <section id="speakers-details" class="wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
            <div class="container">
              <div class="row">
                <div class="page-content">
                    <div class="form-v2-content form-v3-content">
                        <div class="container">
                            <div class="row" dir="rtl">
                              
                                <form class="form-detail" action="TeamInfo" method="post" id="myform" enctype="multipart/form-data">
                                  @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                      <div class="alert alert-danger">{{$error}}</div>
                                    @endforeach
                                  @endif  
                                  @if (Session::has('message'))
                                    <div class="alert alert-{{ Session::get('type') }}">{{ Session::get('message') }}</div>
                                  @endif
                                  <h2 class="text-right">فرم ثبت نام تیم</h2>
                                  <div class="row">
                                    <div class="col-lg-6">
                                      <div class="form-row text-right">
                                        <label for="team_leader_name">نام تیم </label>
                                        <input type="text" value=" {{ $fa_name }}" disabled class="input-text text-right" tabindex="1" required>
                                    </div>
                                    </div>
                                    <div class="col-lg-6">
                                      <div class="form-row text-right">
                                        <label for="en_name"> :نام لاتین </label>
                                        <input type="text" disabled value="{{ $en_name }}" id="en_name" class="input-text text-right" tabindex="2" required>
                                    </div>
                                    </div>
                                    
                                    
                                  </div>  
                                  <div class="row">
                                   
                                    <div class="col-lg-6">
                                      <div class="form-row text-right">
                                        <label for="team_type">نوع تیم</label>
                                        <select class="input-text text-right rtl" style="height: 55px;width:91%" id="team_type" name="team_type" tabindex="3" onchange="changeType(this)">
                                            <option value="1" @if ($team_type=="1") selected @endif>آزاد</option>
                                            <option value="2" @if ($team_type=="2") selected @endif>دانشجویی</option>
                                            <option value="3" @if ($team_type=="3") selected @endif>شرکتی</option>
                                        </select>
                                    </div>
                                    </div>
                                    <div class="col-lg-6">
                                      <div class="form-row text-right" id="dependece_section" style="visibility: hidden">
                                        <label for="organ_dependence" id="dependence_title">وابستگی سازمانی</label>
                                        <input type="text" name="organ_dependence" value="{{ $team_type=="1" ? '-' : $organ_dependence }}" id="organ_dependence" class="input-text text-right" tabindex="4">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                   
                                    <div class="col-lg-6">
                                      <div class="form-row text-right">
                                        <label for="team_leader_name">نام سرگروه</label>
                                        <input type="text" value="{{ $team_leader_name }}" name="team_leader_name" id="team_leader_name" class="input-text text-right" tabindex="5" required>
                                    </div>
                                      
                                    </div>
                                    <div class="col-lg-6">
                                      <div class="form-row text-right">
                                        <label for="team_leader_family">نام خانوادگی سرگروه</label>
                                        <input type="text" name="team_leader_family" value="{{ $team_leader_family }}" id="team_leader_family" class="input-text text-right" tabindex="6" required>
                                    </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    
                                    <div class="col-lg-6">
                                      <div class="form-row text-right">
                                        <label for="degree">مدرک تحصیلی</label>
                                        <select class="input-text text-right rtl" style="height: 55px;width:91%" name="degree" tabindex="7">
                                          <option value="1" @if ($degree=="1") selected @endif>دانشجوی کارشناسی</option>
                                          <option value="2" @if ($degree=="2") selected @endif>کارشناسی</option>
                                          <option value="3" @if ($degree=="3") selected @endif>دانشجوی ارشد</option>
                                          <option value="4" @if ($degree=="4") selected @endif>ارشد</option>
                                          <option value="5" @if ($degree=="5") selected @endif>دانشجوی دکترا</option>
                                          <option value="6" @if ($degree=="6") selected @endif>دکترا</option>
                                      </select>
                                    </div>
                                      
                                    </div>
                                    <div class="col-lg-6">
                                      <div class="form-row text-right">
                                        <label for="university">دانشگاه</label>
                                        <input type="text" name="university" value="{{ $university }}" id="university" class="input-text text-right" tabindex="8" required >
                                    </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-lg-6">
                                      <div class="form-row text-right">
                                        <label for="major">رشته تحصیلی</label>
                                        <input type="text" value="{{ $major }}" name="major" id="major" class="input-text text-right" tabindex="9" required >
                                    </div>
                                    </div>
                                    <div class="col-lg-6">
                                      <div class="form-row text-right">
                                        <label for="cv_url">فایل رزومه</label>
                                        
                                            <div class="file-field">
                                              <div class="btn btn-sm float-left">
                                                <span>Choose file</span>
                                                <input type="file" name="cv_url" tabindex="10">
                                              </div>
                                              
                                            </div>
                                         
                                    </div>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-lg-5">

                                    </div>
                                    <div class="col-lg-2">
                                      <div class="text-center">
                                        <input type="submit" name="register" class="register" value="تایید" tabindex="11" >
                                      </div>
                                    </div>
                                    <div class="col-lg-5"></div>
                                  </div>
        
                                    {{ csrf_field() }}
                                </form>
                            </div>
                            <div class="row">
                                
                                <div class="col-lg-12">
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
        <tr id="row-{{ $item->id }}">
        <th>
          <button class="btn btn-danger" data-id="{{ $item->id }}" id ="linkdelete"><i class="fa fa-trash"></i></button>

           
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
                                
                            </div>
                            <div class="row p-4">
                            <div class="col-lg-5"></div>
                            <div class="col-lg-2"><input type="button" class="btn p-2 text-white bg-success" id='addnewmember' value="اضافه کردن عضو جدید" data-toggle="modal" data-target="#centralModalSm"></div>
                            <div class="col-lg-5"></div>
                            </div>
                            
                        </div>


                        
                    </div>
                    
                </div>
                
                <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="mi-modal">
                  <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close p-0" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h6 class="modal-title" id="myModalLabel">آیا از حذف عضو اطمینان دارید؟</h6>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" id="modal-btn-no">خیر</button>
                        <button type="button" class="btn btn-success" id="modal-btn-si">بله</button>
                        
                      </div>
                    </div>
                  </div>
                </div>
                <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
                <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
                <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
                <script>
                  var remove_id=0;
                  var obj;
var modalConfirm = function(callback){
  
  $("#linkdelete").on("click", function(){
    obj = $(this); // first store $(this) in obj
    id = $(this).data('id'); // get id of data using this 
    $("#mi-modal").modal('show');
  });

  $("#modal-btn-si").on("click", function(){
    callback(true);
    $("#mi-modal").modal('hide');
  });
  
  $("#modal-btn-no").on("click", function(){
    callback(false);
    $("#mi-modal").modal('hide');
  });
};

modalConfirm(function(confirm){
  if(confirm){
    //Acciones si el usuario confirma
    $.ajax({
        url: "removeMember/"+ id,
        
        //cache: false,
        //contentType: false,
        //processData: false,
        //mimeType: "multipart/form-data",
        type: "get",
        
        success: function(result) {
            if (!result.hasError) {
              
                //document.getElementById('row-'+id).remove();
                $(obj).closest("tr").remove(); // You can remove row like this
            }
            eval(result.Script);
        },
        error: function() {
            alert("خطا!");
        }
    });
  }else{
    //Acciones si el usuario no confirma
    $("#result").html("NO CONFIRMADO");
  }
});

$("#linkdelete").click(function (e) {
    var obj = $(this); // first store $(this) in obj
    var id = $(this).data('id'); // get id of data using this 
    
});



var default_value="{{ $organ_dependence }}";
function changeType(selectedObject)
{
 
  if(selectedObject.value==1)
  {
    document.getElementById('dependece_section').style.visibility= "hidden" ;
    if (document.getElementById('organ_dependence').value.length != 0)
    {
      default_value = document.getElementById('organ_dependence').value;
    }
    document.getElementById('organ_dependence').value = "-";
  }
  if(selectedObject.value==2)
  {
    document.getElementById('dependece_section').style.visibility= "visible" ;
    document.getElementById('dependence_title').innerHTML = 'نام دانشگاه';
    document.getElementById('organ_dependence').value = default_value;
  }
  if(selectedObject.value==3)
  {
    document.getElementById('dependece_section').style.visibility= "visible" ;
    document.getElementById('dependence_title').innerHTML = 'نام شرکت';
    document.getElementById('organ_dependence').value = default_value;
  }
}
                    var result;
                    $( "#myform" ).validate({
                        rules: {
                          mobile: {
                              required: true,
                              remote: {
                                  url: "/check_mobile",
                                  type: "get"
                              }
                          },
                          organ_dependence: {
                                  required: function (el) {
                                    let selected_val = $(el).closest('form').find('#team_type').val(); 
                                    if( selected_val != '' && selected_val != '1')
                                      return 'لطفا نام لاتین تیم خود را وارد نمایید'
                                    else 
                                      return 'asdasdsadasdsa'
                                  }
                                  
                                  
                              },
                      },
                          messages: {
                              
                              team_leader_name: {
                                  required: "لطفا نام خود را وارد نمایید",
                                  
                              },
                              team_leader_family: {
                                  required: "لطفا نام خانوادگی خود را وارد نمایید",
                                  
                              },
                              university: {
                                  required: "لطفا نام دانشگاه را وارد نمایید",
                                  
                              },
                              major: {
                                  required: "لطفا رشته تحصیلی را وارد نمایید",
                                  
                              },
                     
                          },
                          
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
    <div class="modal-content rtl">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">اضافه کردن عضو جدید به تیم</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          <div class="row">
            
            <div class="col-md-6 form-group">
                <label for="textbox2">نام</label>
                <input class="form-control" type="text" name="first_name" id="first_name" required />
            </div>
            <div class="col-md-6 form-group">
              <label for="textbox1">نام خانوادگی</label>
              <input class="form-control" type="text" name="last_name" id="last_name" required/>
          </div>
            <span class="clearfix">
          </div>
          <div class="row">
            <div class="col-md-6 form-group">
                <label for="textbox2">مدرک</label>
                <input class="form-control"  type="text" name="major"  id="major" required/>
            </div>
            <div class="col-md-6 form-group">
              <label for="textbox1">رشته</label>
              <input class="form-control"  type="text" name="field" id="field" required />
            </div>
            <span class="clearfix">
          </div>
          <div class="row">
            <div class="col-md-6 form-group">
                <label for="textbox2">دانشگاه</label>
                <input class="form-control" type="text" name="university" id="university" required/>
            </div>
            <div class="col-md-6 form-group">
              <label for="textbox1">رزومه</label>
              <input class="form-control" type="file" name="resume" id="resume" />
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
<script>
  
  $( "#addMemberFrom" ).validate({
                        rules: {
                          resume: {
                              
                              extension: "doc|docx|pdf|xlx|csv"
                          },
                      },
                          messages: {
                              resume: {
                                  extension: "(doc|docx|pdf|xlx|csv) لطفا فایل با فرمت مناسب وارد نمایید",
                                  
                              },
                              first_name: {
                                  required: "لطفا نام را وارد نمایید",
                                  
                              },
                              last_name: {
                                  required: "لطفا نام خانوادگی را وارد نمایید",
                                  
                              },
                              university: {
                                  required: "لطفا نام دانشگاه را وارد نمایید",
                                  
                              },
                              major: {
                                  required: "لطفا مدرک تحصیلی را وارد نمایید",
                                  
                              },
                              field: {
                                  required: "لطفا رشته تحصیلی را وارد نمایید",
                                  
                              },
                     
                          },
                          
                    });
</script>
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
