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
                            لیست رزومه های ارسالی
                            
                        </header>
                        <table class="table table-striped table-advance table-hover">
                            <thead>
                                <tr>
                                    <th><i class="icon-bullhorn"></i>کد</th>
                                    <th class="hidden-phone"><i class="icon-question-sign"></i>نام</th>
                                    <th class="hidden-phone"><i class="icon-question-sign"></i>فرصتهای شغلی مورد نظر</th>
                                    <th>فایل رزومه</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($resumes as $resume)
                                    
                                
                                <tr>
                                    <td>{{ $resume->id }}</td>
                                    <td>{{ $resume->full_name }}</td>
                                    <td>
                                        @foreach ($resume->jobs as $item)
                                            <label class="btn btn-warning">{{ $item->title."(شرکت ".$item->company->company_name.")" }}</label>
                                        @endforeach
                                    </td>
                                    <td>
                                        
                                        <a class="btn btn-primary btn-xs" href="{{ URL::to('/'.$resume->cv_url) }}">دانلود فایل روزمه</a>
                                        
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