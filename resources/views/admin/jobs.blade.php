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
                            لیست فرصتهای شخلی
                            <div class="pull-left m-4"><a href="/administrator/job/add" class="btn btn-info">اضافه کردن فرصت شغلی جدید</a></div>
                        </header>
                        <table class="table table-striped table-advance table-hover">
                            <thead>
                                <tr>
                                    <th><i class="icon-bullhorn"></i>کد</th>
                                    <th class="hidden-phone"><i class="icon-question-sign"></i>عنوان</th>
                                    <th><i class="icon-bookmark"></i>توضیحات</th>
                                    <th><i class="icon-bookmark"></i>شرکت درخواست کننده شغل</th>
                                    <th><i class="icon-bookmark"></i>تعداد رزومه ارسالی</th>
                                    <th><i class=" icon-edit"></i>وضعیت</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jobs as $job)
                                    
                                
                                <tr>
                                    <td>{{ $job->id }}</td>
                                    <td>{{ $job->title }}</td>
                                    <td>{{ $job->description }}</td>
                                    <td>{{ $job->company->company_name }}</td>
                                    <td>{{ $job->job_requests->count() }}</td>
                                    <td>
                                        @if ($job->expired)
                                            <span class="label label-default label-mini">منقضی شده</span>    
                                        @else
                                            <span class="label label-info label-mini">فعال</span>
                                        @endif
                                        
                                    </td>
                                    <td>
                                        
                                        <a class="btn btn-primary btn-xs" href="/administrator/job/edit/{{ $job->id }}"><i class="icon-pencil"></i></a>
                                        <a class="btn btn-danger btn-xs" onclick="return confirm('آیای از حذف اطلاعات این فرصت شغلی اطمینان دارید؟');" href="/administrator/job/remove/{{ $job->id }}"><i class="icon-trash "></i></a>
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