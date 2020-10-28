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
                            ویرایش فرصت شغلی
                     
                        </header>
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal tasi-form" id="signupForm" method="post" action="/administrator/job/update">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $job->id }}">
                                    <div class="form-group ">
                                        <label for="title" class="control-label col-lg-2">عنوان</label>
                                        <div class="col-lg-10">
                                            <input class=" form-control" id="title" name="title" type="text" value="{{ $job->title }}" />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="description" class="control-label col-lg-2">توضیحات</label>
                                        <div class="col-lg-10">
                                            <textarea class="form-control" name="description">{{ $job->description }}</textarea>
                                            
                                        </div>
                                    </div>
                                    
                                    <div class="form-group ">
                                        <label for="agree" class="control-label col-lg-2 col-sm-3">شرکت مربوط به فرصت شغلی</label>
                                        <div class="col-lg-10 col-sm-9">
                                            <select class="form-control" name="company_id">
                                                @foreach ($companies as $company)
                                                    <option value="{{ $company->id }}" @if($job->company_id==$company->id) selected @endif>{{ $company->company_name }}</option>
                                                @endforeach
                                                
                                            </select>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="expired" class="control-label col-lg-2 col-sm-3">سطح</label>
                                        <div class="col-lg-10 col-sm-9">
                                            <label for="level-1" class="checkbox-inline">کارآموز<input type="checkbox" style="width: 20px" class="checkbox form-control" id="level-1" name="level[]" {{ ($job->level && in_array('intern',$job->level)) ? 'checked': ''}} value="intern" /></label>
                                            <label for="level-2" class="checkbox-inline">جونیور<input type="checkbox" style="width: 20px" class="checkbox form-control" id="level-2" name="level[]" {{ ($job->level && in_array('junior',$job->level)) ? 'checked': ''}} value="junior" /></label>
                                            <label for="level-3" class="checkbox-inline">سنیور<input type="checkbox" style="width: 20px" class="checkbox form-control" id="level-3" name="level[]" {{ ($job->level && in_array('senior',$job->level)) ? 'checked': ''}} value="senior"/></label>
                                            <label for="level-4" class="checkbox-inline">طرح سربازی<input type="checkbox" style="width: 20px" class="checkbox form-control" id="level-4" name="level[]" {{ ($job->level && in_array('military',$job->level)) ? 'checked': ''}} value="military"/></label>
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="expired" class="control-label col-lg-2 col-sm-3">فرصت شغلی منقضی شود</label>
                                        <div class="col-lg-10 col-sm-9">
                                            <input type="checkbox" style="width: 20px" class="checkbox form-control" id="expired" name="expired" @if($job->expired) checked @endif />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <button class="btn btn-success" type="submit">بروزرسانی</button>
                                            
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