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
        <div class="search">
            <div class="information">
                <input type="text" placeholder="Tìm kiếm…" value="" name="s" autocomplete="off" />
                <button>
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </header>
    <!-- menu bar -->
    <div class="menu-bar">
        <nav>
            <img src="{{asset('/image/TAT-logo-chuanar-e1644918338966.png')}}" alt="" />
            <input type="checkbox" id="check" />
            <label for="check" class="hidden">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </label>
            <ul id="bars">
                <li><a href="{{route('index')}}">Trang chủ</a></li>
                <li><a href="{{route('preview')}}">Giới thiệu</a></li>
                <li><a href="new.html">Tin tức & Sự kiện</a></li>
                <li><a href="recruit.html">Tuyển dụng</a></li>
                <li><a href="contact.html">Liên hệ</a></li>
            </ul>
        </nav>
    </div>

    <div class="square">
       
        <img src="https://lss.vn/wp-content/uploads/2021/03/Vien-banner-lss-1280x1280.png" alt=""
            class="image-border" />
            <h2>
                @yield('content-header')
            </h2>
        
    </div>
    <!-- 4 reactangle below theo big image -->
    
    @yield('item-behind')
</div>
