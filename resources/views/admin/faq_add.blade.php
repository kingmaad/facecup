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
                            اضافه کردن سوال جدید
                     
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal tasi-form" id="signupForm" method="post" action="/administrator/faq/add">
                                    {{ csrf_field() }}
                                    
                                    <div class="form-group ">
                                        <label for="question" class="control-label col-lg-2">سوال</label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="question" name="question" type="text"  />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="answer" class="control-label col-lg-2">جواب</label>
                                        <div class="col-lg-10">
                                            <textarea class=" form-control" id="answer" name="answer"></textarea>
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