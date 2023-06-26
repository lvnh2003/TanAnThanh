@extends('layout.main')
@section('title')
   TAT -  {{$news->title}}
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('css/preview.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />
@endpush
@section('image')
    {{ asset('image/header-background.png') }}
@endsection
@section('content-header')
    TIN TỨC
@endsection
@section('content')
<div class="container">
    <div class="list-menu">
        <div class="title">Tin tức</div>
        <div class="content">
            Tin tức đóng vai trò quan trọng trong việc cung cấp thông tin, giáo dục và tạo nên nhận thức xã hội.
        </div>
    </div>
    <div class="list-content">
        <div class="content" id="section2">
            <div class="main-content">
                <h1 class="title" style="text-transform: capitalize">{{$news->title}}</h1>
                <div class="introduce">
                    <blockquote>
                        <p>
                            {{$news->content}}
                        </p>
                    </blockquote>
                </div>
                <div class="content-text">
                    <ul>
                        <li>
                            Năm 2003: Được thành lập như một công ty khởi nghiệp chuyên
                            sản xuất bảng viết chống chói, bàn và ghế cho học sinh ở mọi
                            cấp độ.
                        </li>
                        <li>
                            Năm 2006: Mở rộng kinh doanh để cung cấp đồng phục cho học
                            sinh.
                        </li>
                        <li>
                            Năm 2010: Bắt đầu tập trung vào sản xuất quần áo cho các công
                            ty nước ngoài.
                        </li>
                        <li>
                            Năm 2015: Mở rộng kinh doanh tiếp tục, sản xuất đồng phục thời
                            trang và trang thiết bị bảo vệ cho nhân viên.
                        </li>
                        <li>
                            Trở thành đối tác chiến lược của THACO TRƯỜNG HẢI trong gần 1
                            thập kỷ.
                        </li>
                    </ul>
                </div>
                <div class="image-container">
                    @foreach ($news->images as $item )
                        
                 
                    <div class="image">
                        <div class="image-item">
                            <img src="{{$item->getImage()}}" alt="" />
                        </div>
                        <div class="detail">{{$item->description}}</div>
                        <div class="content-text">
                            {{$item->content}}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection