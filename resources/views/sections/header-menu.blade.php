<!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container" style="max-width:1250px;">
      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        
        <a href="http://facecup.ir" class="scrollto"><img id="logoFile" src="img/logo-menu2.png" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          @if(!session('user_id'))
          <li class="buy-tickets"><a href="/login">ورود</a></li>
          <li class="buy-tickets"><a href="/signupTeam">ثبت نام تیم ها</a></li>
          @else
          <li class="bg-orange text-white rounded dropdown rtl desktop-nav-item">
            <a class="desktop-nav-item" href="#">سلام {{ session('fa_name') }}</a>
            <ul class="dropdown-menu dropdown-menu-right rtl">
              <li><a href="/dashboard">پنل کاربری</a></li>
              <li><a href="/logout">خروج</a></li>
            </ul>
          </li>
          <li class="mobile-nav-item"><a href="/logout">خروج</a></li>
          <li class="mobile-nav-item"><a href="/dashboard">پنل کاربری</a></li>
          @endif
          <li><a href="/howToCompete">راهنمای شرکت در مسابقه</a></li>
          <li><a href="/aboutUs">تماس با ما</a></li>
          <li><a href="/blog">وبلاگ</a></li>
          <li><a href="/referee">کمیته علمی</a></li>
          <li><a href="/jobs">فرصت های شغلی</a></li>

          <li><a href="awards">جوایز</a></li>
          <li><a href="/#supporters">حامیان</a></li>
          <li class="mobile-nav-item"><a href="/faq">سوالات متداول</a></li>
          <li class="mobile-nav-item"><a href="/generalRules">قوانین عمومی</a></li>
          <li class="mobile-nav-item"><a href="/techRules">قوانین فنی</a></li>
          
          <li class="dropdown rtl desktop-nav-item">
            <a class="desktop-nav-item" href="#">درباره مسابقه</a>
            <ul class="dropdown-menu dropdown-menu-right">
              <li><a href="/generalRules">قوانین عمومی</a></li>
              <li><a href="/techRules">قوانین فنی</a></li>
              <li><a href="/faq">سوالات متداول</a></li>
            </ul>
          </li>
          <li class="menu-active"><a href="/">خانه</a></li>
          
          
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
    <div class="whatsapp"><a class="text-white mx-auto" target="_blank" id="whatsapp-btn" href="https://wa.me/989362804206" >ارتباط با پشتیبانی از طریق واتس اپ <i class="fa fa-whatsapp"></i></a></div>
  </header>
  <!-- #header -->
