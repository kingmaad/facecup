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
                            <div class="pull-left m-4"><a href="/administrator/company/add" class="btn btn-info">اضافه کردن شرکت جدید</a></div>
                        </header>
                        <table class="table table-striped table-advance table-hover">
                            <thead>
                                <tr>
                                    <th><i class="icon-bullhorn"></i>کد</th>
                                    <th class="hidden-phone"><i class="icon-question-sign"></i>نام لاتین تیم</th>
                                    <th class="hidden-phone"><i class="icon-question-sign"></i>نام فارسی</th>
                                    <th class="hidden-phone"><i class="icon-question-sign"></i>شماره موبایل</th>
                                    <th class="hidden-phone"><i class="icon-question-sign"></i>فایل رزومه</th>
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
                                    <td>@if($team->cv_url)<a href="{{ asset($team->cv_url) }}" class="btn btn-warning">دانلود</a>@endif</td>
                                    <td>
                                        @if($team->isVerified)
                                            <a href="#" class="btn btn-xs btn-success"><i class="icon-ok"></i></a></td>
                                        @else
                                        <a href="#" class="btn btn-xs btn-danger"><i class="icon-remove"></i></a></td>
                                        @endif
                                    <td>
                                        
                                        <a class="btn btn-primary btn-xs" href="/administrator/team/detail/{{ $team->id }}"><i class="icon-pencil"></i></a>
                                        <a class="btn btn-danger btn-xs" href="/administrator/team/remove/{{ $team->id }}"><i class="icon-trash "></i></a>
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