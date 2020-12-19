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
                                <form class="cmxform form-horizontal tasi-form" id="signupForm" method="post" action="/administrator/sponsor/update" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $sponsor->id }}">
                                    <div class="form-group ">
                                        <label for="title" class="control-label col-lg-2">عنوان</label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="title" name="title" type="text" value="{{ $sponsor->title }}"  />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="type" class="control-label col-lg-2">نوع حامی</label>
                                        <div class="col-lg-10">
                                            <select name="type" id="type">
                                                <option value="Spiritual" @if($sponsor->type=="Spiritual") selected @endif>معنوی</option>
                                                <option value="Diamond" @if($sponsor->type=="Diamond") selected @endif>الماسی</option>
                                                <option value="Golden" @if($sponsor->type=="Golden") selected @endif>طلایی</option>
                                                <option value="Silver" @if($sponsor->type=="Silver") selected @endif>نقره ای</option>
                                                <option value="Media" @if($sponsor->type=="Media") selected @endif>رسانه ای</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group ">
                                        <label for="website_url" class="control-label col-lg-2 col-sm-3">آدرس وب سایت حامی</label>
                                        <div class="col-lg-10 col-sm-9">
                                            <input class=" form-control" id="website_url" name="website_url" type="text" value="{{ $sponsor->website_url }}"  />
                                            
                                            
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="expired" class="control-label col-lg-2 col-sm-3">لوگوی حامی</label>
                                        <div class="col-lg-10 col-sm-9">
                                            <input type="file" name="img_url">
                                            <img src="{{ asset($sponsor->img_url) }}">
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