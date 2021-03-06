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
                            لیست تیمهای ثبت شده
                            <a href="/administrator/team/export/mobile" class="btn btn-success pull-left">دانلود لیست شماره موبایلها</a>
                        </header>
                        <table class="table table-striped table-advance table-hover">
                            <thead>
                                <tr>
                                    <th><i class="icon-bullhorn"></i>کد</th>
                                    <th class="hidden-phone"><i class="icon-question-sign"></i>نام لاتین تیم</th>
                                    <th class="hidden-phone"><i class="icon-question-sign"></i>نام فارسی</th>
                                    <th class="hidden-phone"><i class="icon-question-sign"></i>شماره موبایل</th>
                                    <th>نوع تیم</th>
                                    <th>وابستگی سازمانی/دانشگاه</th>
                                    <th class="hidden-phone"><i class="icon-question-sign"></i>تاریخ ثبت نام</th>
                                    <th class="hidden-phone"><i class="icon-question-sign"></i>تعداد اعضای تیم</th>
                                    <th class="hidden-phone"><i class="icon-question-sign"></i>فایل رزومه</th>
                                    <th class="hidden-phone"><i class="icon-question-sign"></i>فایل داکر</th>
                                    <th class="hidden-phone"><i class="icon-question-sign"></i>احراز هویت شده؟</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teams as $team)
                                    
                                
                                <tr>
                                    <td>{{ $team->id }}</td>
                                    <td>{{ $team->en_name }}</td>
                                    <td>{{ $team->fa_name }}</td>
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
                                    <td>{{ $team->created_at }}</td>
                                    <td>{{ $team->members->count() }}</td>
                                    <td>@if($team->cv_url)<a href="{{ asset($team->cv_url) }}" class="btn btn-warning">دانلود</a>@endif</td>
                                    <td>@if($team->file)<a href="{{ asset($team->file->file_url) }}" class="btn btn-warning">دانلود</a>@endif</td>
                                    <td>
                                        @if($team->isVerified)
                                            <a href="#" class="btn btn-xs btn-success"><i class="icon-ok"></i></a></td>
                                        @else
                                        <a href="#" class="btn btn-xs btn-danger"><i class="icon-remove"></i></a></td>
                                        @endif
                                    <td>
                                        
                                        <a class="btn btn-primary btn-xs" href="/administrator/team/detail/{{ $team->id }}"><i class="icon-pencil"></i></a>
                                        <a class="btn btn-danger btn-xs" onclick="return confirm('آیای از حذف اطلاعات این تیم اطمینان دارید؟');" href="/administrator/team/remove/{{ $team->id }}"><i class="icon-trash "></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </section>
                </div>
            </div>
         
            <!-- page end-->
        </section>
    </section>
    <!--main content end-->
</section>
@endsection