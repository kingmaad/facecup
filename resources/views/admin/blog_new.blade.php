@extends('admin.master')
@section('custom_head')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link href="{{ asset('lib/WYSIWYG/editor.css') }}" type="text/css" rel="stylesheet"/>
@endsection
@section('content')
<section id="container" class="">
    @include('admin._nav')
    @include('admin._sidebar')

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            اضافه کردن پست جدید
                     
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal tasi-form" id="new_post_form" method="post" action="/administrator/post/add" enctype="multipart/form-data">
                                    @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                      <div class="alert alert-danger">{{$error}}</div>
                                    @endforeach
                                  @endif  
                                    {{ csrf_field() }}
                                    
                                    <div class="form-group ">
                                        <label for="title" class="control-label col-lg-2">عنوان پست</label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="title" name="title" type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="permalink" class="control-label col-lg-2">permalink</label>
                                        <div class="col-lg-10">
                                            <input class=" form-control text-left" id="permalink" name="permalink" type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="img" class="control-label col-lg-2">تصویر پست</label>
                                        <div class="col-lg-10">
                                            <input type="file" class=" form-control" id="img" name="img" required />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="abstract" class="control-label col-lg-2">خلاصه متن</label>
                                        <div class="col-lg-10">
                                            <textarea class="form-control" name="abstract" required></textarea>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="body" class="control-label col-lg-2">متن پست</label>
                                        <div class="col-lg-10">
                                            <textarea name="body" id="body_editor" required></textarea>
                                            
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button class="btn btn-success" id="savepost" type="button">ذخیره</button>
                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
         
            <!-- page end-->
        </section>
    </section>
    <!--main content end-->
</section>
@endsection

@section('script')
    <!--script for this page-->
    <script src="{{ asset('js/form-validation-script.js') }}"></script>
@endsection