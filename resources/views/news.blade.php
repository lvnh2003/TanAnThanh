@extends('layout.main')
@push('css')
    <link rel="stylesheet" href="{{ asset('css/preview.css') }}">
    <link rel="stylesheet" href="{{asset('css/new.css')}}">
@endpush
@section('title')
    Tin tức
@endsection
@section('image')
    https://lss.vn/wp-content/uploads/2021/03/Ho-ca-koi-LSS.jpg
@endsection
@section('content-header')
    TIN TỨC & <br> SỰ KIỆN
@endsection
@section('content')
    <div class="container">
        <div class="list-menu">
            <div class="title">Tin tức</div>
            <div class="content">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed quis
                iure ab dolorum? Volupta
            </div>
        </div>
        <div class="list-content">
            <div class="col">
                <div class="row large-columns-1 medium-columns-1 small-columns-1">
                    @foreach ($news as $new )
                        
                   
                    <div class="col post-item">
                        <div class="col-inner">
                            <a href="{{route('detail',$new->slug)}}" class="plain">
                                <div class="box box-vertical box-blog-post">
                                    <div class="box-image" style="width:40%;">
                                        <div class="image-cover" style="padding-top:56%;">
                                            <img width="1280" height="960"
                                                src="{{$new->getImage()}}"
                                                data-src="{{$new->getImage()}}"
                                                class="attachment-medium size-medium wp-post-image lazy-load-active"
                                                alt="" loading="lazy">
                                        </div>
                                    </div>
                                    <div class="box-text text-left">
                                        <div class="">


                                            <h5 class="">{{$new->title}}
                                            </h5>
                                            <div class="is-divider"></div>
                                            <p class=""> {{strlen($new->description)<120? $new->description : substr($new->description,0,120).'...'}} </p>



                                        </div>
                                    </div>
                                    <div class="badge absolute top post-date badge-outline">
                                        <div class="badge-inner">
                                            <span class="">{{$new->created_at->day}}</span><br>
                                            <span class="post-date-month is-xsmall">Th{{$new->created_at->month}}</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    
    
                    
                </div>
                {{$news->onEachSide(2)->links('layout.pagination')}}
            </div>
        </div>
    </div>
@endsection
