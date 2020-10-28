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
                    <div class="col-sm-12">
                        <section class="panel">
                            <header class="panel-heading no-border">
                                اطلاعات تیم {{ $team->fa_name }}
                         
                            </header>
                            <table class="table table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>نام فارسی</th>
                                        <th>نام لاتین</th>
                                        <th>شماره موبایل</th>
                                        <th>نوع تیم</th>
                                        <th>وابستگی سازمانی/دانشگاه</th>
                                        <th>نام سرگروه</th>
                                        <th>نام خانوادگی سرگروه</th>
                                        <th>مدرک تحصیلی</th>
                                        <th>نام دانشگاه</th>
                                        <th>رشته تحصیلی</th>
                                        <th>فایل رزومه</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <tr>
                                        <td>#</td>
                                        <td>{{ $team->fa_name }}</td>
                                        <td>{{ $team->en_name }}</td>
                                        <td>{{ $team->mobile }}</td>
                                        <td>
                                            @switch($team->team_type)
                                            @case('1')
                                                آزاد
                                                @break
                                        
                                            @case('2')
                                                دانشجویی
                                                @break
                                            @case('3')
                                                شرکتی
                                          @endswitch

                                        </td>
                                        <td>{{ $team->organ_dependence }}</td>
                                        <td>{{ $team->team_leader_name }}</td>
                                        <td>{{ $team->team_leader_family }}</td>
                                        <td>
                                            @switch($team->degree)
                                            @case('1')
                                            دانشجوی کارشناسی
                                                @break
                                        
                                            @case('2')
                                                کارشناسی
                                                @break
                                            @case('3')
                                                دانشجوی ارشد
                                            
                                            @case('4')
                                                ارشد
                                                @break
                                        
                                            @case('5')
                                                دانشجوی دکترا
                                                @break
                                            @case('6')
                                                دکترا
                                          @endswitch
                                          
                                        
                                        </td>
                                        <td>{{ $team->university }}</td>
                                        <td>{{ $team->major }}</td>
                                        <td>@if($team->cv_url)<a href="{{ asset($team->cv_url) }}" class="btn btn-warning">دانلود</a>@endif</td>
                                    </tr>
                                </tbody>
                            </table>
                        </section>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <section class="panel">
                            <header class="panel-heading">
                                لیست اعضای تیم
                                
                            </header>
                            <table class="table table-striped table-advance table-hover">
                                <thead>
                                    <tr>
                                        <th><i class="icon-bullhorn"></i>کد</th>
                                        <th class="hidden-phone"><i class="icon-question-sign"></i>نام</th>
                                        <th class="hidden-phone"><i class="icon-question-sign"></i>نام خانوادگی</th>
                                        <th class="hidden-phone"><i class="icon-question-sign"></i>دانشگاه</th>
                                        <th class="hidden-phone"><i class="icon-question-sign"></i>رشته</th>
                                        <th class="hidden-phone"><i class="icon-question-sign"></i>مدرک</th>
                                        <th class="hidden-phone"><i class="icon-question-sign"></i>فایل رزومه</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($team->members as $member)
                                        
                                    
                                    <tr>
                                        <td>{{ $member->id }}</td>
                                        <td>{{ $member->first_name }}</td>
                                        <td>{{ $member->last_name }}</td>
                                        <td>{{ $member->university }}</td>
                                        <td>{{ $member->field }}</td>
                                        <td>{{ $member->major }}</td>
                                        <td>@if($member->cv_url)<a href="{{ asset($member->cv_url) }}" class="btn btn-warning">دانلود</a>@endif</td>
                                        
                                            
                                            
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </section>
                    </div>
                </div>
        </section>
    </section>
    <!--main content end-->
</section>
@endsection