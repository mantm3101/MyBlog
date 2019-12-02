@extends('user.layouts.home')

@section('content')
<div class="row">
    <div class="col-lg-6">
        <div class="post-entry-2 d-flex">
            <div class="thumbnail" style="background-image: url('images/laravel-logo.png')"></div>
            <div class="contents">
                <h2><a href="blog-single.html">Hướng dẫn cài đặt Laravel</a></h2>
                <p class="mb-3">Cài đặt môi trường và chạy một project Laravel.</p>
                <div class="post-meta">
                    <span class="d-block"><a href="#">SodaHotGa</a> in <a href="#">Laravel</a></span>
                    <span class="date-read">Nov 18 <span class="mx-1">&bullet;</span></span>
                </div>
            </div>
        </div>

        <div class="post-entry-2 d-flex">
            <div class="thumbnail" style="background-image: url('images/laravel-logo.png')"></div>
            <div class="contents">
                <h2><a href="blog-single.html">Giới thiệu về cấu trúc thư mục project Laravel</a></h2>
                <p class="mb-3">Cấu trúc và chức năng từng thư mục trong project Laravel.</p>
                <div class="post-meta">
                    <span class="d-block"><a href="#">SodaHotGa</a> in <a href="#">Laravel</a></span>
                    <span class="date-read">Nov 18 <span class="mx-1">&bullet;</span> </span>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <ul class="custom-pagination list-unstyled">
            <li class="active">1</li>
            <!-- <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li> -->
        </ul>
    </div>
</div>
@endsection

