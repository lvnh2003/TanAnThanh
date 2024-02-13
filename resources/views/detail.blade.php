@extends('layout.main')
@section('title')
   TAT -  {{$news->post_title}}
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
               {!!$news->post_content!!}
            </div>
        
        </div>
    </div>
</div>
@endsection