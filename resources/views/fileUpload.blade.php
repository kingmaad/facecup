
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>FaceCup.ir</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
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
a{
  color:indianred;
}
a:hover{
  color: rgb(86, 128, 218);
}

.progress { position:relative; width:100%; }
.bar { background-color: #008000; width:0%; height:20px; }
.percent { position:absolute; display:inline-block; left:50%; color: #7F98B2;}

</style>
  </head>

  <body class="body-bg text-right">
    @include('sections.header-menu')    <main id="main" class="main-page">
      <!--==========================
      Speaker Details Section
    ============================-->
  
<section class="home-blog bg-sand mt-5 pt-5">
    <div class="container bg-white p-2 mt-2 mb-2" >
      <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column mt-3 mb-3">
  

        <main role="main" class="inner cover mb-5">
          <div id="validation-errors"></div>
          <h1 class="cover-heading text-center">فرم آپلود فایل مسابقه</h1>
          <hr>
          <div class="col-lg-6" style="margin: auto;">
            
              {{ csrf_field() }}
              
              <label for="description" class="bg-warning p-1 h6" style="border-radius: 50px;">توضیحات</label>
              <textarea id="description" name="description" class="form-control" placeholder="لطفا توضیحات خود را وارد نمایید" required></textarea><br>
              <div class="form-group">
                <label for="description" class="bg-warning p-1 h6" style="border-radius: 50px;">فایل داکر مسابقه</label>  
                <input id="fileupload" type="file" name="file" accept=".zip" data-url="{{ action('DependencyUploadController@uploadFile') }}" class="form-control"><br>
                    <div class="progress progress-bar-striped ">
                      
                        <div class="bar"></div >
                        <div class="percent">0%</div >
                    </div>
                    
                    
                    
                    <br>
                    <p class="text-center">
                    <img src="img/loading.gif" id="img" style="display:none" width="50" ><br>
                    <button id="up_btn" class="btn btn-success">آپلود</button>
                    </p>
              </div>
          
              
          </div>
          <div class="text-center">
          
          <!-- <input id="fileupload" type="file" name="file" data-url="{{ action('DependencyUploadController@uploadFile') }}" style="display: inline;"> -->
          <ul id="file-upload-list" class="list-unstyled">

          </ul>
    </div>
          
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
<script src="https://blueimp.github.io/jQuery-File-Upload/js/vendor/jquery.ui.widget.js"></script>
<script src="js/jquery.fileupload.js"></script>
<script>

      var $uploadList = $("#file-upload-list");
      var $fileUpload = $('#fileupload');
      var bar = $('.bar');
      var percent = $('.percent');
      if ($fileUpload.length > 0) {
      var idSequence = 0;
      var percentVal = '0%';
      bar.width(percentVal)
      percent.html(percentVal);
      // A quick way setup - url is taken from the html tag
      $fileUpload.fileupload({
        maxChunkSize: 10000000,
        method: "POST",
        // Not supported yet
        sequentialUploads: true,
        formData: function (form) {
            // Append token to the request - required for web routes
            return [{
              name: '_token', 
              value: $('input[name=_token]').val()},
              {
                name : 'description',
                value: $('textarea[name=description]').val(),
              }  
              ];
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            bar.width(progress+"%");
            percent.html(progress + '%');
            
            $("#" + data.theId).text('Uploading ' + progress + '%');
        },
        add: function (e, data) {
            data._progress.theId = 'id_' + idSequence;
            idSequence++;
            
            $("#up_btn").off('click').on('click', function () {
              if($('textarea[name=description]').val()==="")
              {
                $('textarea[name=description]').focus();
              }
              else{
                $('#img').show();
                data.submit();
              }
              
          });
            //$uploadList.append($('<li id="' + data.theId + '"></li>').text('Uploading'));
            //data.submit();
        },
        done: function (e, data) {
            //console.log(data, e);
            //$uploadList.append($('<li></li>').text('Uploaded: ' + data.result.path + ' ' + data.result.name));
            $("#img").hide();
            if(data.result.status == 200)
            {
              $('#validation-errors').append('<div class="alert alert-success">'+data.result.success+'</div');
              //window.location.href = "/fileupload";
            }
            else
            {
              console.log(data.result);
              $('#validation-errors').html('');
              $.each(data.result.errors, function(key,value) {
                  $('#validation-errors').append(
                    '<div class="alert alert-danger">'+value[0]+'<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
              });
            }
        }
    });
}

</script>
   <!-- <script type="text/javascript">
    $(function() {
         $(document).ready(function()
         {
            var bar = $('.bar');
            var percent = $('.percent');

      $('form').ajaxForm({
        beforeSend: function() {
            var percentVal = '0%';
            bar.width(percentVal)
            percent.html(percentVal);
        },
        uploadProgress: function(event, position, total, percentComplete) {
            var percentVal = percentComplete + '%';
            bar.width(percentVal)
            percent.html(percentVal);
        },
        complete: function(xhr) {
          if(xhr.responseJSON.status == 200)
            {
              $('#validation-errors').append('<div class="alert alert-success">'+xhr.responseJSON.success+'</div');
              //window.location.href = "/fileupload";
            }
            else
            {
              
              $('#validation-errors').html('');
              $.each(xhr.responseJSON.errors, function(key,value) {
                  $('#validation-errors').append(
                    '<div class="alert alert-danger">'+value[0]+'<button type="button" class="close pull-left" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
              });
            }
          
            
            //
        }
      });
   }); 
 });
</script> -->
</body>
</html>
