@extends('layout.main')
@section('title')
    TAT - ĐƠN VỊ SẢN XUẤT QUẦN ÁO TÂN AN THÀNH
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />
    <style>
        @media (min-width: 550px) {
            #text-box-1483701737 {
                width: 50%;
            }
        }

        text-box.chairman {
            top: 35%;
            left: 43%;
        }

        .dark,
        .dark p,
        .dark td {
            color: #f1f1f1;
        }
    </style>
@endpush
@section('image')
    {{ asset('image/header-background.png') }}
@endsection
@section('item-behind')
    <div>
        {{-- <ul class="content-bottom-header">
            <li class="item">
                <div class="item-content">
                    <div class="header">
                        <h3></h3>
                    </div>
                    <div class="content"></div>
                </div>
            </li>
            <li class="item">
                <div class="item-content">
                    <div class="header">
                        <h3>Chất lượng</h3>
                    </div>
                    <div class="content">Được đặt lên hàng đầu</div>
                </div>
            </li>
            <li class="item">
                <div class="item-content">
                    <div class="header">
                        <h3></h3>
                    </div>
                    <div class="content"></div>
                </div>
            </li>
            <li class="item">
                <div class="item-content">
                    <div class="header">
                        <h3></h3>
                    </div>
                    <div class="content"></div>
                </div>
            </li>
        </ul> --}}
        <ul class="content-bottom-header">
            <li class="rectangle-item">
                <div class="item-content">
                    <h3>Dịch vụ</h3>
                    <div class="content onPC">May đồng phục</div>
                    <div class="content onMoblie">May <br> mặc</div>
                </div>
            </li>
            <li class="rectangle-item">
                <div class="item-content">
                    <h3>Chất lượng</h3>
                    <div class="content onPC">Được đặt lên hàng đầu</div>
                    <div class="content onMoblie">Hàng đầu</div>
                </div>
            </li>
            <li class="rectangle-item">
                <div class="item-content">
                    <h3>Tiêu chuẩn</h3>
                    <div class="content onPC">Đạt tiêu chuẩn cao</div>
                    <div class="content onMoblie">Cao cấp</div>
                </div>
            </li>
            <li class="rectangle-item">
                <div class="item-content">
                    <h3>Thiết bị</h3>
                    <div class="content onPC">Cung cấp từ nước ngoài</div>
                    <div class="content onMoblie">Chất lượng</div>
                </div>
            </li>
        </ul>

    </div>
@endsection
@section('content-header')
    CÔNG TY TNHH TÂN AN THÀNH
@endsection
@section('content')
    <!-- privew the company -->
    <div class="preview-company">
        <div class="content">
            <img src="https://th.bing.com/th/id/R.d9b27dfdff5a2a8182304ed921f7fe67?rik=iH9rCXLTvhfxYg&pid=ImgRaw&r=0"
                alt="" />
        </div>
        <div class="content">
            <h6>VỀ CHÚNG TÔI</h6>
            <div class="title">CÔNG TY TNHH TÂN AN THÀNH</div>
            <div class="title-with-color"></div>
            <div class="item-content">
                Tân An Thành là công ty sản xuất hàng may mặc với hơn 18 năm kinh
                nghiệm trong ngành.
                <br />
                Chúng tôi cam kết cung cấp cho khách hàng những sản phẩm và dịch vụ
                chất lượng tốt nhất. <br />Giá trị khách hàng luôn là ưu tiên hàng đầu
                của chúng tôi và chúng tôi rất hân hạnh được phục vụ khách hàng.
            </div>
        </div>
    </div>
    <!-- Value bring -->
    <div class="work">
        <div class="content">
            <div class="title">GIÁ TRỊ MANG LẠI</div>
        </div>
        <div class="images">
            <div>
                <div class="image">
                    <div class="image-background"
                        style="
                      background-image: url('{{ asset('/image/Thiet-ke-khong-ten-1.jpg') }}');">
                        <div class="overlay"></div>
                        <div class="image-content">
                            Công ty TNHH Tân An Thành chuyên may gia công và sản xuất các
                            mặt hàng may mặc, đồng phục thời trang, áo quần – trang thiết bị
                            bảo hộ lao động, in – thêu vi tính các loại trong và ngoài nước…
                            Ngoài ra công ty cũng sẵn sàng gia công các mặt hàng liên quan
                            đến ngành nghề của quý đối tác nếu cảm thấy phù hợp.
                        </div>
                    </div>
                </div>
                <div class="info">Lĩnh Vực Hoạt Động</div>
            </div>

            <div>
                <div class="image">
                    <div class="image-background"
                        style="
                      background-image: url('{{ asset('image/Thiet-ke-khong-ten.jpg') }}');
                    ">
                        <div class="overlay"></div>
                        <div class="image-content">
                            Với kinh nghiệm hàng chục năm trong lĩnh vực may gia công, công
                            ty TNHH Tân An Thành luôn cố gắng hoàn thiện chính bản thân mình
                            từ những mẫu thiết kế, thiết bị sản xuất, chất lượng sản phẩm và
                            duy trì tiếp tục nền truyền thống quý báu cùng với những đóng
                            góp có ý nghĩa lớn lao cho ngành dệt may Việt Nam
                        </div>
                    </div>
                </div>
                <div class="info">Sản phẩm</div>
            </div>
            <div>
                <div class="image">
                    <div class="image-background"
                        style="
                      background-image: url('{{ asset('/image/Thiet-ke-khong-ten-2.jpg') }}');
                    ">
                        <div class="overlay"></div>
                        <div class="image-content">
                            Công ty TNHH Tân An Thành chuyên may gia công và sản xuất các
                            mặt hàng may mặc, đồng phục thời trang, áo quần – trang thiết bị
                            bảo hộ lao động, in – thêu vi tính các loại trong và ngoài nước…
                            Ngoài ra công ty cũng sẵn sàng gia công các mặt hàng liên quan
                            đến ngành nghề của quý đối tác nếu cảm thấy phù hợp.
                        </div>
                    </div>
                </div>
                <div class="info">Lịch Sử Phát Triển</div>
            </div>
        </div>
    </div>
    <!-- introduce -->
    <div>
        <div class="about">
            <div class="information">\
                <div class="name">
                    <br />
                    GIỚI THIỆU
                    <br />
                    <img src="{{ asset('/image/TAT-logo-chuanar-e1644918338966.png') }}" width="150px" />
                </div>

                <div class="word">
                    <em>
                        <i class="fa fa-info color-i" aria-hidden="true"></i>
                        Được thành lập vào 01/06/2003 (đã hoạt động 19 năm). Chúng tôi tự
                        hào là công ty may mặc công nghiệp hàng đầu tại Việt Nam với đội
                        ngũ nhân sự dày dạn kinh nghiệm và chuyên môn cao.
                    </em>
                </div>
                <div class="word">
                    <em>
                        <i class="fa fa-diamond color-i" aria-hidden="true"></i>
                        Tân An Thành là đơn vị cung ứng dịch vụ sản xuất hàng may mặc,
                        đồng phục thời trang, bảo hộ uy tín được nhiều đối tác, khách hàng
                        tin tưởng. Việc chủ động từ tất cả mọi khâu như nguồn hàng cung
                        ứng, xưởng sản xuất lớn cùng hệ thống nhà xưởng, trang thiết bị
                        máy móc hiện đại từ in, thêu, may… giúp các đối tác có được những
                        sản phẩm chất lượng nhất và giá thành tốt nhất trên thị trường.
                    </em>
                </div>
                <div class="button-about">
                    <div class="item">Giới thiệu</div>
                    <div class="item">Tuyển dụng</div>
                </div>
            </div>
        </div>
    </div>
    <!-- service -->
    <div class="services">
        <div class="service">
            <div class="content">
                <div class="title">DỊCH VỤ</div>
            </div>

            <div class="item">
                <div class="content-item">
                    <img src="./asset/image/quality.png" alt="" />
                    <div>
                        <p>Chất Lượng</p>
                        <div class="image-service">
                            <img src="https://lss.vn/wp-content/uploads/2021/03/Du-an-thiet-ke-banner-800x450.jpg"
                                alt="" />
                        </div>

                        <div>
                            Tân An Thành luôn đặt tất cả tâm huyết vào mỗi sản phẩm được làm
                            ra và không ngừng nâng cao, cải tiến vươn tới sự hoàn thiện để
                            đáp ứng kỳ vọng của khách hàng
                        </div>
                    </div>
                </div>
                <div class="content-item">
                    <img src="../asset/image/supply-chain.png" alt="" />
                    <div>
                        <p>Nguồn Cung Cấp</p>
                        <div class="image-service">
                            <img src="https://lss.vn/wp-content/uploads/2021/03/Du-an-thiet-ke-banner-800x450.jpg"
                                alt="" />
                        </div>
                        <div>
                            Tân An Thành chủ động mọi nguồn cung ứng từ chất liệu vải, chỉ,
                            dây kéo, xưởng sản xuất quy mô lớn… nhằm đảm bảo chất lượng và
                            giá thành tốt nhất cho quý đối tác
                        </div>
                    </div>
                </div>
                <div class="content-item">
                    <img src="../asset/image/diversity.png" alt="" />
                    <div>
                        <p>Đa dạng mẫu mã</p>
                        <div class="image-service">
                            <img src="https://lss.vn/wp-content/uploads/2021/03/Du-an-thiet-ke-banner-800x450.jpg"
                                alt="" />
                        </div>
                        <div>
                            Ngoài sản xuất các sản phẩm may mặc như đồng phục thời trang, áo
                            quần bảo hộ lao động… Tân An Thành còn nhận gia công các ngành
                            hàng tương trợ với ngành may
                        </div>
                    </div>
                </div>
                <div class="content-item">
                    <img src="../asset/image/diversity.png" alt="" />

                    <div>
                        <p>Đa dạng mẫu mã</p>
                        <div class="image-service">
                            <img src="https://lss.vn/wp-content/uploads/2021/03/Du-an-thiet-ke-banner-800x450.jpg"
                                alt="" />
                        </div>
                        <div>
                            Ngoài sản xuất các sản phẩm may mặc như đồng phục thời trang, áo
                            quần bảo hộ lao động… Tân An Thành còn nhận gia công các ngành
                            hàng tương trợ với ngành may
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content about the company -->
    <div class="about-section"
        style="
              background-image: url('https://lss.vn/wp-content/uploads/2023/01/Merryland-Koi-Chairman.jpg');
            ">
        <div class="item" style="width: 80%;position: relative;;margin:auto">
            <div id="text-box-1483701737"
                class="text-box banner-layer chairman x50 md-x50 lg-x50 y10 md-y40 lg-y40 res-text"
                style="margin: auto;position: absolute;left:10%;top:30%;">
                <div data-animate="blurIn" data-animated="true">
                    <div class="text dark">

                        <div class="text-inner text-center">

                            <div id="text-3430157419" class="text">

                                <p style="text-align: left;"><i class="fa fa-quote-left"></i><span
                                        style="color: #f1f1f1; font-size: 18px;"><em>&nbsp; &nbsp; &nbsp;Với hơn 20 năm
                                            kinh nghiệm trong ngành công nghiệp thời trang,<strong><span style="color: #ed2226;"> Tân An Thành</span></strong> đã khẳng định vị
                                            thế của mình là một công ty sản xuất quần áo đáng tin cậy và chất lượng. Với
                                            niềm đam mê và sự tận tâm, chúng tôi đã xây dựng một thương hiệu độc đáo và được
                                            người tiêu dùng tin yêu.&nbsp; &nbsp;&nbsp;</em></span><i
                                        class="fa fa-quote-right"></i></p>


                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="image" style="width: 100%">
                <img src="{{ asset('image/LSS-Chairman.png') }}" alt="" style="width: 100%;">

            </div>


        </div>
    </div>
    <!-- contact -->
    <div class="services">
        <div class="service1">
            <div class="title">LIÊN HỆ</div>
            <div class="advise">
                <div class="item-advise">
                    Nếu quý đối tác có bất kỳ thắc mắc cũng như cần <br />được tư vấn
                    thêm, xin vui lòng liên hệ <br />trực tiếp để công ty chúng tôi có
                    thể hỗ trợ nhanh nhất có thể.
                    <div class="btn-call-now">
                        <i class="fa fa-phone"></i>
                        Gọi Cho Chúng Tôi
                    </div>
                </div>
                <div class="item-advise">
                    <img src="{{ asset('/image/bat-tay-.jpg') }}" alt="" />
                </div>
            </div>
        </div>
    </div>
    <!-- Coop company -->
    <div class="flickity-slider">
        <div class="title">Các đối tác chiến lược</div>
        <div class="slide"
            data-flickity='{
                "cellAlign": "center",
                "imagesLoaded": true,
                "lazyLoad": 1,
                "freeScroll": false,
                "wrapAround": true,
                "autoPlay": 2000,
                "pauseAutoPlayOnHover" : false,
                "prevNextButtons": false,
                "contain" : true,
                "adaptiveHeight" : true,
                "dragThreshold" : 10,
                "percentPosition": true,
                "pageDots": false,
                "rightToLeft": false,
                "draggable": false,
                "selectedAttraction": 0.1,
                "parallax" : 0,
                "friction": 0.6        }'>
            <div class="slide-item">
                <img src="{{ asset('/image/hyosung.png') }}" alt="" />
            </div>
            <div class="slide-item">
                <img src="{{ asset('/image/Thaco-Truong-Hai.png') }}" alt="" />
            </div>
            <div class="slide-item">
                <img src="{{ asset('/image/Thai-Tuan-.png') }}" alt="" />
            </div>
            <div class="slide-item">
                <img src="{{ asset('/image/draxlmaier-logo.png') }}" alt="" />
            </div>
            <div class="slide-item hkk">
                <img src="{{ asset('/image/day-keo-HKK.png') }}" alt="" />
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{ asset('js/pkgd.min.js') }}"></script>
@endpush
