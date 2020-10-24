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
                            لیست اسپانسرها
                            <div class="pull-left m-4"><a href="/administrator/sponsor/add" class="btn btn-info">اضافه کردن اسپانسر جدید</a></div>
                        </header>
                        <table class="table table-striped table-advance table-hover">
                            <thead>
                                <tr>
                                    <th><i class="icon-bullhorn"></i>کد</th>
                                    <th class="hidden-phone"><i class="icon-question-sign"></i>عنوان</th>
                                    <th><i class="icon-bookmark"></i> آدرس وب سایت</th>
                                    <th><i class=" icon-edit"></i>نوع اسپانسری</th>
                                    <th><i class=" icon-edit"></i>لوگو</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sponsors as $sponsor)
                                    
                                
                                <tr>
                                    <td>{{ $sponsor->id }}</td>
                                    <td>{{ $sponsor->title }}</td>
                                    <td><a href="{{ $sponsor->website_url}}">کلیک کنید</td>
                                    <td>{{ ($sponsor->type=='Spiritual') ? "معنوی":"مادی" }}</td>
                                    <td><img src="{{asset($sponsor->img_url) }}" style="width: 150px; height:auto;"></td>
                                    <td>
                                        
                                        <a class="btn btn-primary btn-xs" href="/administrator/sponsor/edit/{{ $sponsor->id }}"><i class="icon-pencil"></i></a>
                                        <a class="btn btn-danger btn-xs" href="/administrator/sponsor/remove/{{ $sponsor->id }}"><i class="icon-trash "></i></a>
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