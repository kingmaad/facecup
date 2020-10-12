@component('header')
<header id="header">
  <div class="container">
    <div id="logo" class="pull-left">
      <!-- Uncomment below if you prefer to use a text logo -->
      
      <a href="#intro" class="scrollto"><img id="logoFile" src="img/logo.png" alt="" title=""></a>
    </div>

    <nav id="nav-menu-container">
      <ul class="nav-menu">
        @if (!session('user_id'))
          <li class="btn btn-success"><a href="/login">ورود</a></li>
        @else
          
          <li class="btn btn-danger"><a href="/logout">خروج</a></li> 
          <li class="btn btn-success"><a href="/dashboard">پنل کاربری</a></li> 
        @endif
        <li><a href="/aboutUs">تماس با ما</a></li>
        <li><a href="/blog">وبلاگ</a></li>
        <li><a href="#gallery">هیات داوری</a></li>
        <li><a href="/jobs">فرصت های شغلی</a></li>

        <li><a href="awards">جوایز</a></li>
        <li><a href="#venue">حامیان</a></li>
        <li class="dropdown rtl">
          <a href="#">درباره مسابقه</a>
          <ul class="dropdown-menu dropdown-menu-right">
            <li><a href="/generalRules">قوانین عمومی</a></li>
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
@endcomponent