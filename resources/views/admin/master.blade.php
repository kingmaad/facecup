<!doctype html>
<html @lang('en')>
<head>
 @include('admin/_head')

 @include('admin/_css')
 @yield('custom_head')
</head>

<body id="page-top" >
   {{-- @include('admin/_nav') --}}

<div >
  @yield('content')
</div>

  @include('admin/_footer')
  @include('admin/_script')

@yield('script')
 </body>
</html>