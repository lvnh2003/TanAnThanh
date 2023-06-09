@extends('layout.main')

@section('title')
    Tuyển dụng
@endsection
@section('content-header')
    TUYỂN DỤNG 
@endsection
@section('image')
    https://lss.vn/wp-content/uploads/2021/05/Malibu-hoi-an-banner.jpg
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('/css/preview.css') }}">
    <style>
        .list-content::before {
            content: '';
            background-color: #751314;
            width: 20%;
            height: 5px;
            position: absolute;
            left: 0;
            top: 0;
        }

        .list-content .content::before {
            content: none;
        }
    </style>
@endpush
@section('content')
    <div class="container">
        <div class="list-menu">
            <div class="title">Tin tức tuyển dụng</div>
            <div class="content">
                Bạn đang tìm kiếm một cơ hội nghề nghiệp trong ngành công nghiệp sản xuất quần áo may mặc? Hãy đến với Tân
                An Thành - một công ty hàng đầu trong lĩnh vực này. Chúng tôi đang tuyển dụng những người tài năng và nhiệt
                huyết để gia nhập đội ngũ của chúng tôi.
            </div>
            <div class="list">
                <ol>
                    <li>
                        <a href="#section1">Yêu cầu </a>
                    </li>
                    <li><a href="#section2">Chính sách</a></li>
                    <li><a href="#section3">Hệ thống lương</a></li>

                    <li><a href="#section4">Đào tạo và phát triển</a></li>
                </ol>
            </div>
        </div>
        <div class="list-content" style="background-color: white">
            <div class="content" id="section1">
                <div class="main-content">
                    <h1 class="title">Tuyển dụng nhân viên</h1>
                    <div class="introduce">
                        <blockquote>
                            <p>
                                Với tầm nhìn dài hạn và cam kết đến sự phát triển bền vững, Tân An Thành (TAT) đã và đang
                                đặt mục tiêu đầu tư mạnh mẽ vào mảng thiết kế thi công và thương mại trong lĩnh vực sản xuất
                                quần áo may mặc. Chúng tôi không ngừng nỗ lực để khẳng định vị thế của mình là một Công ty
                                cảnh quan chuyên nghiệp hàng đầu.
                            </p>
                        </blockquote>
                    </div>
                    <div class="image-container" style="margin-top: 50px;">
                        <div class="image">
                            <div class="image-item">
                                <img src="https://perfectsourcing.net/wp-content/uploads/2018/11/Vietnam-Textile-Factory-760x570.jpeg"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="content-text" style="padding-top: 0">
                        <div>
                            <div><span><span class="text">Phòng ban: Dự án</span></span></div>
                            <div><span><span class="text">– Nhân viên Thu mua</span></span></div>
                            <div><span><span class="text"> – Số lượng: 1</span></span></div>
                            <div><em><strong><span><span class="text"> Mô tả công
                                                việc:</span></span></strong></em></div>
                            <div><span><span class="text"> – Lập kế hoạch, theo dõi, thu mua và
                                        cung cấp hàng đến từng dự án.</span></span></div>
                            <div><span><span class="text"> – Kiểm soát hàng tồn kho. </span></span>
                            </div>
                            <div><span><span class="text">– Lập báo cáo về nội dung, tình trạng
                                        công việc; kế hoạch công việc</span></span></div>
                            <div><span><span class="text"> – Thực hiện các nhiệm vụ khác liên quan
                                        đến hoạt động của công trường và theo phân công của Ban TGĐ. </span></span></div>
                            <div><em><strong><span><span class="text">Yêu
                                                cầu:</span></span></strong></em></div>
                            <div><span><span class="text"> – Bằng cấp: Cao đẳng/Đại học ngành Cảnh
                                        Quan, Kinh tế, Kế toán, Quản Trị Kinh Doanh</span></span></div>
                            <div><span><span class="text"> – Từ 2 năm kinh nghiệm ở vị trí tương
                                        đương</span></span></div>
                            <div><span><span class="text"> – Độ tuổi từ 25-35 </span></span></div>
                            <div><span><span class="text">– Ưu tiên nam</span></span></div>
                            <div>&nbsp;</div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="content" id="section2">
                <div class="main-content">
                    <h1 class="title">Chính sách phúc lợi hấp dẫn</h1>
                    <div class="introduce">
                        <blockquote>
                            <p>
                                Tân An Thành mang đến chính sách phúc lợi hấp dẫn, bao gồm tăng lương định kỳ, thưởng vào
                                các ngày lễ, chăm sóc đời sống nhân viên, hỗ trợ ăn trưa và chế độ bảo hiểm sức khỏe.
                            </p>
                        </blockquote>
                    </div>
                    <div class="content-text">
                        <div>

                            <div><em><strong><span><span class="text">Chính sách phúc lợi:</span></span></strong></em>
                            </div>
                            <div><span><span class="text"> –Quan điểm nguồn nhân lực: Tân An Thành cam kết đem đến chính
                                        sách phúc lợi và đối đãi hấp dẫn cho tất cả nhân viên.</span></span></div>
                            <div><span><span class="text"> – Tăng lương định kỳ hàng năm. </span></span>
                            </div>
                            <div><span><span class="text">– Thưởng vào các ngày lễ lớn trong năm và đánh giá khen thưởng
                                        cuối năm.</span></span></div>

                            <div><span><span class="text"> – Chăm sóc đời sống nhân viên: quà sinh nhật, Trung thu, hiếu
                                        hỉ, thai sản, thăm hỏi... </span></span></div>
                            <div><span><span class="text">– </span>Hỗ trợ ăn trưa, đồng phục, chế độ công tác phí, phương
                                    tiện đưa đón đối với quản lý cấp cao.</span></div>
                            <div><span><span class="text">– </span>Phép năm theo luật định và chương trình du lịch nghỉ
                                    mát hàng năm.</span></div>
                            <div><em><strong><span><span class="text">Chăm sóc sức khỏe và an
                                                ninh:</span></span></strong></em></div>
                            <div><span><span class="text"> – Khám sức khỏe định kỳ.</span></span></div>
                            <div><span><span class="text"> – Chế độ bảo hiểm sức khỏe và bảo hiểm tai nạn con người
                                        (24/24)</span></span></div>
                            <div>&nbsp;</div>
                        </div>
                    </div>
                    <div class="image-container" style="margin-top: 50px;">
                        <div class="image">
                            <div class="image-item">
                                <img src="https://perfectsourcing.net/wp-content/uploads/2018/11/Vietnam-Textile-Factory-760x570.jpeg"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content" id="section3">
                <div class="main-content">
                    <h1 class="title">Hệ thống lương thưởng cạnh tranh</h1>
                    <div class="introduce">
                        <blockquote>
                            <p>
                                Tân An Thành mang đến chính sách phúc lợi hấp dẫn, bao gồm tăng lương định kỳ, thưởng vào
                                các ngày lễ, chăm sóc đời sống nhân viên, hỗ trợ ăn trưa và chế độ bảo hiểm sức khỏe.
                            </p>
                        </blockquote>
                    </div>
                    <div class="content-text">
                        <div>

                            <div><em><strong><span><span class="text">Tiền lương và bậc lương công
                                                việc:</span></span></strong></em></div>
                            <div><span><span class="text"> –Tiền lương: Tân An Thành cam kết trả lương tương xứng với vị
                                        trí công việc và năng lực của nhân viên.</span></span></div>
                            <div><span><span class="text"> – Bậc lương: Bậc lương được xác định dựa trên mức độ phức tạp
                                        và tầm quan trọng của từng vị trí trong mối tương quan với các vị trí khác trong Tập
                                        đoàn. </span></span>
                            </div>
                            <div><em><strong><span><span class="text">Tăng lương và chi
                                                thưởng:</span></span></strong></em></div>
                            <div><span><span class="text"> – Tăng lương: Tân An Thành thực hiện tăng lương định kỳ hàng
                                        năm dựa trên nhu cầu, tính chất công việc, tình hình hoạt động, và mức độ hoàn thành
                                        công việc của nhân viên.</span></span></div>
                            <div><span><span class="text"> – Chi thưởng: Tân An Thành thưởng quý và thưởng năm cho nhân
                                        viên dựa trên kết quả hoạt động quản lý, kinh doanh của Tập đoàn, phòng ban/đơn vị,
                                        và mức độ hoàn thành công việc của từng nhân viên.</span></span></div>
                            <div>&nbsp;</div>
                        </div>
                    </div>
                    <div class="image-container" style="margin-top: 50px;">
                        <div class="image">
                            <div class="image-item">
                                <img src="https://perfectsourcing.net/wp-content/uploads/2018/11/Vietnam-Textile-Factory-760x570.jpeg"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content" id="section4">
                <div class="main-content">
                    <h1 class="title">Đào tạo và phát triển nghề nghiệp</h1>
                    <div class="introduce">
                        <blockquote>
                            <p>
                                Tân An Thành đầu tư vào đào tạo và phát triển nguồn nhân lực bằng cách xây dựng lộ trình
                                nghề nghiệp, tổ chức đào tạo thường xuyên và tạo cơ hội tự học tập và rèn luyện cho nhân
                                viên.
                            </p>
                        </blockquote>
                    </div>
                    <div class="content-text">
                        <div>

                            <div><em><strong><span><span class="text">Đào tạo và phát triển nguồn nhân
                                                lực:</span></span></strong></em></div>
                            <div><span><span class="text"> –Đầu tư cho đào tạo: Tân An Thành tin rằng đào tạo là đầu tư
                                        cho sự thành công trong tương lai của công ty.</span></span></div>
                            <div><span><span class="text"> – Lộ trình nghề nghiệp: Nhân viên được định hình lộ trình nghề
                                        nghiệp từ những chương trình đào tạo phù hợp với mục tiêu bản thân. </span></span>
                            </div>
                            <div><span><span class="text">– Đào tạo thường xuyên: Xây dựng và phát triển nguồn nhân lực
                                        chất lượng chuyên môn cao, đáp ứng yêu cầu công việc..</span></span></div>

                            <div><span><span class="text"> – Tự học tập và rèn luyện: Tạo cơ hội phấn đấu và thăng tiến
                                        cho nhân viên. </span></span></div>
                            <div><em><strong><span><span class="text">Các chương trình đào
                                                tạo:</span></span></strong></em></div>
                            <div><span><span class="text"> – Đào tạo văn hoá hội nhập cho tất cả nhân viên.</span></span>
                            </div>
                            <div><span><span class="text"> – Đào tạo chuyên môn, nghiệp vụ để nâng cao tay
                                        nghề.</span></span></div>
                            <div><span><span class="text"> – Đào tạo kỹ năng mềm ngắn hạn và dài hạn.</span></span></div>
                            <div><span><span class="text"> – Đào tạo kế thừa.</span></span></div>
                        </div>
                    </div>
                    <div class="image-container" style="margin-top: 50px;">
                        <div class="image">
                            <div class="image-item">
                                <img src="https://perfectsourcing.net/wp-content/uploads/2018/11/Vietnam-Textile-Factory-760x570.jpeg"
                                    alt="" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        var sidebarLinks = document.querySelectorAll("li a");
        var contentHeadings = document.querySelectorAll(".content .main-content");

        window.addEventListener("scroll", function() {
            contentHeadings.forEach(function(heading) {
                var rect = heading.getBoundingClientRect();
                if (
                    (rect.top >= 0 && rect.bottom <= window.innerHeight) ||
                    (rect.top <= 0 && rect.bottom > 100)
                ) {
                    var id = heading.parentElement.id;
                    var sidebarLink = document.querySelector('a[href="#' + id + '"]');
                    sidebarLink.style.fontSize = "20px";
                } else {
                    var id = heading.parentElement.id;
                    var sidebarLink = document.querySelector('a[href="#' + id + '"]');
                    sidebarLink.style.fontSize = "14px";
                    sidebarLink.style.textDecoration = 'none';
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            // Add smooth scrolling to all links
            $("a").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {
                    // Prevent default anchor click behavior
                    event.preventDefault();

                    // Store hash
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function() {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        });
    </script>
@endpush
