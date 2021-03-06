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
                            لیست پستها
                            <div class="pull-left m-4"><a href="/administrator/post/add" class="btn btn-info">اضافه کردن پست جدید</a></div>
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
                                @foreach ($posts as $post)
                                    
                                
                                <tr>
                                    <td>{{ $post->id }}</td>
                                    <td>{{ $post->title }}</td>
                                    
                                    <td>
                                        
                                        <a class="btn btn-primary btn-xs" href="/administrator/post/edit/{{ $post->id }}"><i class="icon-pencil"></i></a>
                                        <a class="btn btn-danger btn-xs" onclick="return confirm('آیای از حذف پست اطمینان دارید؟');" href="/administrator/post/remove/{{ $post->id }}"><i class="icon-trash "></i></a>
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