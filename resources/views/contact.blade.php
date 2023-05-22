@extends('layout.main')
@section('image')
    https://lss.vn/wp-content/uploads/2021/05/Dich-vu-thiet-ke-canh-quan-lss.jpg
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('css/preview.css') }}">
@endpush
@section('title')
    Liên hệ
@endsection
@section('content-header')
    LIÊN HỆ
@endsection

@section('content')
    <div class="container" >
        <div class="list-menu" style="position: relative">
            <div class="title">Công ty TNHH Tân An Thành</div>
            <div class="content">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed quis
                iure ab dolorum? Volupta
            </div>
            <div class="list">
                <ul>
                    <li>
                        <i class="fa fa-home"></i>
                        Địa chỉ: Cụm CN-TTCN Trường Xuân, P. Trường Xuân, TP. Tam Kỳ,
                        Quảng Nam
                    </li>
                    <li>
                        <i class="fa fa-code"></i>
                        MST: <b>4000384498</b>
                    </li>
                    <li>
                        <i class="fa fa-phone"></i>Hotline:
                        <b>02353.820.341 - 02353.841.611</b>
                    </li>
                    <li>
                        <i class="fa fa-envelope"></i>Email: tananthanh.tat@gmail.com
                    </li>
                </ul>
            </div>
        </div>
        <div class="list-content">
            <div class="content" id="section1">
                <div class="main-content">
                    <h1 class="title">Kết nối với chúng tôi</h1>
                    <div class="introduce">
                        <blockquote>
                            <p>
                                Chúng tôi rất mong được nghe từ bạn và sẵn sàng giải đáp mọi thắc mắc hoặc cung cấp thông
                                tin liên quan đến việc sản xuất quần áo. Đừng ngần ngại, hãy liên hệ với chúng tôi ngay để
                                chúng tôi có thể hỗ trợ bạn tốt nhất. Xin cảm ơn!
                            </p>
                        </blockquote>
                    </div>
                    <div class="content-text">
                        <form action="" method="post">
                            <div class="item-input">
                                <div class="item"><span class="fa fa-user"></span></div>
                                <div class="item"><input type="text" placeholder="Họ và tên..."></div>

                            </div>
                            <div class="item-input">
                                <div class="item"><span class="fa fa-envelope"></span></div>
                                <div class="item"><input type="email" placeholder="Email..."></div>

                            </div>
                            <div class="item-input">
                                <div class="item"><span class="fa fa-edit"></span></div>
                                <div class="item">
                                    <textarea name="" id="" cols="30" rows="10" placeholder="Nội dung..."></textarea>
                                </div>

                            </div>
                            <div class="item-input">
                                <div class="item">
                                    <button>
                                        GỬI LIÊN HỆ
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>



        </div>

    </div>
    
    <div class="map">
        <div class="title">
            <span>
                Bản đồ vị trí
            </span>
           
        </div>
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3843.701206890613!2d108.4810314141101!3d15.55414038920089!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3169dcdd9a94c25b%3A0x4b6c92cb9abcabb4!2zQ8OUTkcgVFkgVE5ISCBUw4JOIEFOIFRIw4BOSA!5e0!3m2!1svi!2s!4v1658209633518!5m2!1svi!2s"
            width="100%" height="500px" style="border:0;" allowfullscreen="true"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection
