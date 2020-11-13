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
                            لیست سوالات متداول
                            <div class="pull-left m-4"><a href="/administrator/faq/add" class="btn btn-info">اضافه کردن سوال جدید</a></div>
                        </header>
                        <table class="table table-striped table-advance table-hover">
                            <thead>
                                <tr>
                                    <th><i class="icon-bullhorn"></i>کد</th>
                                    <th class="hidden-phone"><i class="icon-question-sign"></i>سوال</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($faqs as $faq)
                                    
                                
                                <tr>
                                    <td>{{ $faq->id }}</td>
                                    <td>{{ $faq->question }}</td>
                                    <td>
                                        
                                        <a class="btn btn-primary btn-xs" href="/administrator/faq/edit/{{ $faq->id }}"><i class="icon-pencil"></i></a>
                                        <a class="btn btn-danger btn-xs" onclick="return confirm('آیای از حذف سوال اطمینان دارید؟');" href="/administrator/faq/remove/{{ $faq->id }}"><i class="icon-trash "></i></a>
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