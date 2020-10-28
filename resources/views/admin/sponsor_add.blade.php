@extends('admin.master')
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
                            اضافه کردن اسپانسر
                     
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal tasi-form" id="signupForm" method="post" action="/administrator/sponsor/add" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    
                                    <div class="form-group ">
                                        <label for="title" class="control-label col-lg-2">عنوان</label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="title" name="title" type="text"  />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="type" class="control-label col-lg-2">نوع حامی</label>
                                        <div class="col-lg-10">
                                            <select name="type" id="type">
                                                <option value="Spiritual">معنوی</option>
                                                <option value="Diamond">الماسی</option>
                                                <option value="Golden">طلایی</option>
                                                <option value="Silver">نقره ای</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group ">
                                        <label for="website_url" class="control-label col-lg-2 col-sm-3">آدرس وب سایت حامی</label>
                                        <div class="col-lg-10 col-sm-9">
                                            <input class=" form-control" id="website_url" name="website_url" type="text"  />
                                            
                                            
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="expired" class="control-label col-lg-2 col-sm-3">لوگوی حامی</label>
                                        <div class="col-lg-10 col-sm-9">
                                            <input type="file" name="img_url">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button class="btn btn-success" type="submit">ذخیره</button>
                                            
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