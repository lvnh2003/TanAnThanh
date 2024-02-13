<div class="back_top">
    <div class="icon">
        <i class="fa fa-angle-double-up" aria-hidden="true"></i>
    </div>
</div>

<div class="slide-show" style="background-image:url(@yield('image'))">
    <!-- header -->
    <header>
        <div class="header-contact" style="margin-top: 3px">
            <div class="information">
                <i class="fa fa-phone"></i>
                0235.3820341
            </div>
            <div class="information">
                <i class="fa fa-envelope"></i>
                tananthanh.tat@gmail.com
            </div>
        </div>
        <div class="header-contact" style="margin-top: 3px">
            <div class="information">
                <i class="fa fa-clock-o"></i>
                Thứ 2 - Thứ 7
            </div>
            <div class="information">
                <i class="fa fa-power-off"></i>
                Nghỉ Chủ Nhật
            </div>
        </div>
        <div class="search" style="width :200px">
            <form id="searchForm" action="{{ route('news') }}" method="get">
                <div class="information">
                    <input type="text" id="searchInput" placeholder="Tìm kiếm…" value="" name="query"
                        autocomplete="off" />
                    <button>
                        <i class="fa fa-search"></i>
                    </button>
                </div>
                <div style="height: auto;
                max-height: 400px;
                background-color: white;
                padding: 10px;
                overflow-y: auto;
                position: relative;
                border-radius:10px;
                display:none" class="search-results">
                <div class="text-suggestion" style="color: black;font-size:13px">Có phải bạn muốn tìm</div>
                    @foreach ($data as $new)
                        <li class="search-result-item" style="color:black;width:100%;list-style: none;margin: 5px 0">
                            <a href="{{route('detail',$new->slug)}}"  class="search-result-link" style="text-decoration: none;">
                            <div style="display: flex;" class="search-result-content">
                                <div class="search-result-image">
                                    <img class="search-result-image-inner" src="{{$new->getImage()}}" alt="" style="width: 80px;height: 40px;object-fit: cover;">
                                </div>
                                <div class="search-result-title" class="search-result-text" style="word-wrap: break-word;max-width: 50%;font-size: 13px;color:black ">
                                        <p > {{strlen($new->post_title)<30? $new->post_title : substr($new->post_title,0,30).'...'}} </p>
                                </div>
                                
                            </div>
                        </a>
                        </li>
                    @endforeach
                    <div class="no-results-message" style="display: none;color: black;font-size:13px">Không tìm thấy kết quả</div>

                </div>

            </form>
        </div>
    </header>
    <!-- menu bar -->
    <div class="menu-bar">
        <nav>
            <img src="{{ asset('/image/TAT-logo-chuanar-e1644918338966.png') }}" alt="" />
            <input type="checkbox" id="check" />
            <label for="check" class="hidden" style="position: relative">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </label>
            <ul id="bars">
                <li><a href="{{ route('index') }}">TRANG CHỦ</a></li>
                <li><a href="{{ route('preview') }}">GIỚI THIỆU</a></li>
                <li><a href="{{ route('news') }}">TIN TỨC & SỰ KIỆN</a></li>
                <li><a href="{{ route('recruit') }}">TUYỂN DỤNG</a></li>
                <li><a href="{{ route('contact') }}">LIÊN HỆ </a></li>
            </ul>
        </nav>
    </div>

    <div class="square">

        <img src="https://lss.vn/wp-content/uploads/2021/03/Vien-banner-lss-1280x1280.png" alt=""
            class="image-border" />
        <h3>
            @yield('content-header')
        </h3>

    </div>
    <!-- 4 reactangle below theo big image -->

    @yield('item-behind')
</div>
