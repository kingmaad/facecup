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
                            <div class="pull-left m-4"><a href="/company_add" class="btn btn-info">اضافه کردن شرکت جدید</a></div>
                        </header>
                        <table class="table table-striped table-advance table-hover">
                            <thead>
                                <tr>
                                    <th><i class="icon-bullhorn"></i>کد</th>
                                    <th class="hidden-phone"><i class="icon-question-sign"></i>عنوان</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($companies as $company)
                                    
                                
                                <tr>
                                    <td>{{ $company->id }}</td>
                                    <td>{{ $company->company_name }}</td>
                                    
                                    <td>
                                        
                                        <a class="btn btn-primary btn-xs" href="/company_edit/{{ $company->id }}"><i class="icon-pencil"></i></a>
                                        <a class="btn btn-danger btn-xs"><i class="icon-trash "></i></a>
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