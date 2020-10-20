@extends('admin.master')
@section('content')
<div class="container">

    <form class="form-signin" action="/adminlogin" method="POST">
        {{ csrf_field() }}
      <h2 class="form-signin-heading">همین حالا وارد شوید</h2>
      <div class="login-wrap">
          <input type="email" name="email" class="form-control" placeholder="نام کاربری" autofocus>
          <input type="password" name="password" class="form-control" placeholder="کلمه عبور">
          <label class="checkbox">
              <input type="checkbox" value="remember-me"> مرا به خاطر بسپار
              <span class="pull-left"> <a href="#"> کلمه عبور را فراموش کرده اید؟</a></span>
          </label>
          <button class="btn btn-lg btn-login btn-block" type="submit">ورود</button>


      </div>

    </form>

  </div>
@endsection