
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trang chủ</title>
        <link rel="stylesheet" href="../asset/css/style.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css?family=Dancing+Script|Itim|Lobster|Montserrat:500|Noto+Serif|Nunito|Patrick+Hand|Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i|Roboto+Slab|Saira"
            rel="stylesheet">
        <link rel="stylesheet"
            href="https://unpkg.com/flickity@2/dist/flickity.min.css">
        <script src="../asset/js/pkgd.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
            <link rel="icon" href="../asset/image/cropped-TAT-logo-chuanar-1-32x32.png" sizes="32x32">
            <link rel="stylesheet" href="../asset/css/scroll-bar.css">
    </head>
    <body>
        <script src="../asset/js/aos.js"></script>
        <script>
        AOS.init();
      </script>
      <script src="../asset/js/action.js"></script>

        <div class="back_top">
            <div class="icon">
                <i class="fa fa-angle-double-up" aria-hidden="true"></i>
            </div>
        </div>
       
        <header>
            <div class="header-contact">
                <div class="information">
                    <i class="fa fa-phone"></i>
                    +8436708853
                </div>
                <div class="information">
                    <i class="fa fa-envelope"></i>
                    alo@gmail.com
                </div>
            </div>
            <div class="time-work">
                <div class="information">
                    <i class="fa fa-clock-o"></i>
                    Thứ 2 - Thứ 7
                </div>
                <div class="information">
                    <i class="fa fa-power-off"></i>
                    Nghỉ Chủ Nhật
                </div>
            </div>

        </header>
       
        <div class="menu-bar">
            <nav>
                <input type="checkbox" id="check">
                <input type="checkbox" id="search">
                <label for="check" class="hidden">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </label>
                <label for="">
                    <img src="https://tananthanh.com/wp-content/uploads/2022/02/Banner-Tan-An-Thanh-1400x289.png" alt="">
                </label>
                <ul id="bars">
                    
                    <li ><a href="" id="active">TRANG CHỦ</a></li>   
                    <li><a href="">GIỚI THIỆU</a></li>
                    <li><a href="new.php">TIN TỨC & SỰ KIỆN</a></li>
                    <li><a href="recruit.html">TUYỂN DỤNG</a></li>
                    <li><a href="contact.html">LIÊN HỆ</a></li>
                    <li id="search-icon">
                        
                        <label for="search">
                            <i class="fa fa-search"></i>
                        </label>
                        
                    </li>
                </ul>
                <div id="search-form">
                    <label for="" onclick="return uncheck()">
                        <a href="#">
                            <img class="close" src="http://cdn3.iconfinder.com/data/icons/iconic-1/32/x_alt-128.png" alt="X" />
                          </a>
                    </label>
                    
                    <form class="search-box" method="post" enctype="multipart/form-data" action="../asset/controller/controller.php"> 
                        <input type="text" placeholder="Tìm kiếm..." name="value-search" />
                        <button  class="fa fa-search" name="search"> </button>
                        <div class="geeks"></div>
                      </form>
                </div>
            </nav>
           
        </div>
        <div class="slide-show">
            <div class="rectangle">
                <div class="title-no-before">
                    Tân An Thành
                </div>
                <div class="content">
                    Lorem ipsum dolor, sit amet consectetur adipisicing <br>
                    elit. Ex dolore officiis tempora dicta quasi illo, <br> non
                    veniam distinctio quibusdam, fuga iure pariatur maiores aut
                    perferendis nostrum corporis sit optio totam?
                </div>
            </div>
        </div>
        <div class="preview-company" data-aos="slide-up"
            data-aos-duration="1000">
            <div class="content">
                <img src="../asset/image/Team_Getty_fizkes.jpg" alt="">

            </div>
            <div class="content">
                <h6>
                    VỀ CHÚNG TÔI
                </h6>
                <div class="title">
                    Death I Like The <br>Wind

                    Away By My Side.
                </div>
                <div class="title-with-color">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </div>
                <div class="item-content">
                    Trong 19 năm hoạt động, Công ty TNHH TÂN AN THÀNH luôn <br>
                    nỗ lực tạo dựng mối quan hệ hợp tác tốt đẹp với các đối tác
                    trên <br> cơ sở mang lại lợi ích song phương, không ngừng
                    phát triển hoạt <br> động kinh doanh cùng với phương châm
                    chữ TÍN đi đầu và đặt tâm <br> huyết vào từng sản phẩm được
                    hoàn thành.
                </div>
            </div>

        </div>
        <div class="work" data-aos="fade-in" data-aos-duration="2000">
            <div class="content">
                <div class="title-top">
                    WORKS
                </div>
                <div class="title">

                    Value Bring To You
                </div>


            </div>
            <div class="images">
                <div class="image" data-aos="slide-up" data-aos-duration="1100">
                    <div class="image-background" style="background-image:
                        url('../asset/image/Thiet-ke-khong-ten-1.jpg');">
                        <div class="overlay"></div>
                        <div class="image-content">
                            Công ty TNHH Tân An Thành chuyên may gia công và sản
                            xuất các mặt hàng may mặc, đồng phục thời trang, áo
                            quần – trang thiết bị bảo hộ lao động, in – thêu vi
                            tính các loại trong và ngoài nước… Ngoài ra công ty
                            cũng sẵn sàng gia công các mặt hàng liên quan đến
                            ngành nghề của quý đối tác nếu cảm thấy phù hợp.
                        </div>
                    </div>
                    <div class="info">
                        Lĩnh Vực Hoạt Động
                    </div>
                </div>
                <div class="image" data-aos="slide-up" data-aos-duration="1100">
                    <div class="image-background" style="background-image:
                        url('../asset/image/Thiet-ke-khong-ten.jpg');">
                        <div class="overlay"></div>
                        <div class="image-content">
                            Với kinh nghiệm hàng chục năm trong lĩnh vực may
                            gia công, công ty TNHH Tân An Thành luôn cố gắng
                            hoàn thiện chính bản thân mình từ những mẫu
                            thiết kế, thiết bị sản xuất, chất lượng sản phẩm
                            và duy trì tiếp tục nền truyền thống quý báu
                            cùng với những đóng góp có ý nghĩa lớn lao cho
                            ngành dệt may Việt Nam
                        </div>

                    </div>


                    <div class="info">
                        Lịch Sử Phát Triển
                    </div>
                </div>
                <div class="image" data-aos="slide-up" data-aos-duration="1100">
                    <div class="image-background" style="background-image:
                        url('../asset/image/Thiet-ke-khong-ten-2.jpg');">
                        <div class="overlay"></div>
                        <div class="image-content">
                            Công ty TNHH Tân An Thành chuyên may gia công và sản
                            xuất các mặt hàng may mặc, đồng phục thời trang, áo
                            quần – trang thiết bị bảo hộ lao động, in – thêu vi
                            tính các loại trong và ngoài nước… Ngoài ra công ty
                            cũng sẵn sàng gia công các mặt hàng liên quan đến
                            ngành nghề của quý đối tác nếu cảm thấy phù hợp.
                        </div>
                    </div>
                    <div class="info">
                        Sẩn phẩm
                    </div>
                </div>
            </div>

        </div>
        <div class="features" data-aos="slide-up" data-aos-duration="1000">

            <div class="overlay">
                <div class="content">
                    <div class="title-top">
                        CORE
                    </div>
                    <div class="title">

                        Anything To Do
                    </div>

                </div>
                <div class="content-hover">
                    <div class="item">
                        <i class="fa fa-users zoom-out" aria-hidden="true"></i>
                        <div class="element">
                            <i class="fa fa-users" aria-hidden="true"></i>
                        </div>
                        <div class="after">

                        </div>
                        <div class="topic">
                            Some thing & Anythig
                        </div>
                        <br>
                        <div class="content-topic">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Itaque, perferendis? Natus vero facere
                            excepturi velit perspiciatis, voluptatibus optio
                            iste? Labore itaque cum deleniti maiores possimus
                            optio dolore veritatis quis velit.
                        </div>
                    </div>
                    <div class="item">
                        <i class="fa fa-cube zoom-out" aria-hidden="true"></i>
                        <div class="element">
                            <i class="fa fa-cube" aria-hidden="true"></i>
                        </div>
                        <div class="after">

                        </div>
                        <div class="topic">
                            Some thing & Anythig
                        </div>
                        <br>
                        <div class="content-topic">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Itaque, perferendis? Natus vero facere
                            excepturi velit perspiciatis, voluptatibus optio
                            iste? Labore itaque cum deleniti maiores possimus
                            optio dolore veritatis quis velit.
                        </div>
                    </div>


                    <div class="item">
                        <i class="fa fa-random zoom-out" aria-hidden="true"></i>
                        <div class="element">
                            <i class="fa fa-random" aria-hidden="true"></i>
                        </div>
                        <div class="after">

                        </div>
                        <div class="topic">
                            Some thing & Anythig
                        </div>
                        <br>
                        <div class="content-topic">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Itaque, perferendis? Natus vero facere
                            excepturi velit perspiciatis, voluptatibus optio
                            iste? Labore itaque cum deleniti maiores possimus
                            optio dolore veritatis quis velit.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about" data-aos="slide-up" data-aos-duration="1200">
            <div class="image">
                <img src="../asset/image/photo-1569683236049-bc137196a02a.avif"
                    alt="">
            </div>
            <div class="information">
                <br>
                <br>
                <div class="title-about">
                    Chúng Tôi Là Ai?
                </div>
                <div class="name">
                    <br>
                    Công ty TNHH TÂN AN THÀNH
                </div>
                <div class="about-establish color-i">
                    <i class="fa fa-info" aria-hidden="true"></i>
                </div>
                <div class="word">

                    Được thành lập vào 01/06/2003 (đã hoạt động 19 năm). Chúng
                    tôi tự hào là công ty may mặc công nghiệp hàng đầu tại Việt
                    Nam với đội ngũ nhân sự dày dạn kinh nghiệm và chuyên môn
                    cao.
                </div>
                <div class="word">
                    <div class="color-i">

                        <i class="fa fa-diamond" aria-hidden="true"></i>
                    </div>
                    <br>
                    Tân An Thành là đơn vị cung ứng dịch vụ sản xuất hàng may
                    mặc, đồng phục thời trang, bảo hộ uy tín được nhiều đối tác,
                    khách hàng tin tưởng. Việc chủ động từ tất cả mọi khâu như
                    nguồn hàng cung ứng, xưởng sản xuất lớn cùng hệ thống nhà
                    xưởng, trang thiết bị máy móc hiện đại từ in, thêu, may…
                    giúp các đối tác có được những sản phẩm chất lượng nhất và
                    giá thành tốt nhất trên thị trường.
                </div>
            </div>
        </div>
        <div class="services" data-aos="slide-up">
            <div class="service">
                <div class="title-top">
                    SERVICES
                </div>
                <div class="title-1">

                    Anything
                </div>
                <div class="item">
                    <div class="content-item">
                        <img src="../asset/image/quality.png" alt="">
                        <div>
                            <p>
                                Chất Lượng
                            </p>
                            <div>
                                Tân An Thành luôn đặt tất cả tâm huyết vào mỗi
                                sản phẩm được làm ra và không ngừng nâng cao,
                                cải tiến vươn tới sự hoàn thiện để đáp ứng kỳ
                                vọng của khách hàng
                            </div>
                        </div>
                    </div>
                    <div class="content-item">
                        <img src="../asset/image/supply-chain.png" alt="">
                        <div>
                            <p>
                                Nguồn Cung Cấp
                            </p>
                            <div>
                                Tân An Thành chủ động mọi nguồn cung ứng từ chất
                                liệu vải, chỉ, dây kéo, xưởng sản xuất quy mô
                                lớn… nhằm đảm bảo chất lượng và giá thành tốt
                                nhất cho quý đối tác
                            </div>
                        </div>
                    </div>
                    <div class="content-item">
                        <img src="../asset/image/diversity.png" alt="">
                        <div>
                            <p>
                                Đa dạng mẫu mã
                            </p>
                            <div>
                                Ngoài sản xuất các sản phẩm may mặc như đồng
                                phục thời trang, áo quần bảo hộ lao động… Tân An
                                Thành còn nhận gia công các ngành hàng tương trợ
                                với ngành may
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="flickity-slider" data-aos="slide-up"
            data-aos-duration="1100">
            <div class="title center">
                CÁC ĐỐI TÁC CHIẾN LƯỢC
            </div>
            <div class="paragraph">
                <span style="font-weight:bold">Công ty TNHH Tân An Thành </span>
                với hơn 19 năm kinh nghiệm trong ngành may mặc Là đối tác chiến
                lược <br> của các tập đoàn lớn như THACO TRƯỜNG HẢI, HYOSUNG,
                THÁI TUẤN, DRAXLMAIER… Trải qua những<br> giai đoạn thịnh vượng
                cũng như khó khăn chung của nền kinh tế đất nước, công ty đã
                từng bước phát triển,<br> khẳng định và nâng cao chất lượng sản
                phẩm, thương hiệu.
            </div>
            <div class="slide"  data-flickity='{"autoPlay" : 1500,"wrapAround" : true ,"lazyLoad" : 0.5}'>
                <div class="slide-item">
                    <img src="../asset/image/hyosung.png" alt="">
                </div>
                <div class="slide-item">
                    <img src="../asset/image/Thaco-Truong-Hai.png" alt="">
                </div>
                <div class="slide-item">
                    <img src="../asset/image/Thai-Tuan-.png" alt="">
                </div>
                <div class="slide-item">
                    <img src="../asset/image/draxlmaier-logo.png" alt="">
                </div>
                <div class="slide-item hkk">
                    <img src="../asset/image/day-keo-HKK.png" alt="">
                </div>
            </div>
        </div>
        <div class="services" data-aos="slide-up">
            <div class="service1">
                <div class="title-top">
                    ADVISE
                </div>
                <div class="title-1">

                    Anything
                </div>
                <div class="advise">
                    <div class="item-advise">
                        Nếu quý đối tác có bất kỳ thắc mắc cũng như cần <br>được
                        tư vấn thêm,
                        xin vui lòng liên hệ <br>trực tiếp để công ty chúng tôi
                        có thể hỗ trợ nhanh nhất có thể.
                        <div class="btn-call-now">
                            <i class="fa fa-phone"></i>
                            Gọi Cho Chúng Tôi
                        </div>
                    </div>
                    <div class="item-advise">
                        <img src="../asset/image/bat-tay-.jpg" alt="">
                    </div>
                </div>
            </div>

        </div>

        <footer data-aos="fade-in" data-aos-duration="1500">
            <div class="overlay">

                <div class="title-no-before center">
                    CÔNG TY TNHH TÂN AN THÀNH
                </div>
                <div class="content">
                    <div class="content-footer">
                        <img data-aos="flip-left"
                            data-aos-easing="ease-out-cubic"
                            data-aos-duration="2000"
                            src="../asset/image/TAT-logo-chuanar-e1644918338966.png"
                            alt="">
                    </div>
                    <div class="content-footer">
                        <ul>
                            <li data-aos="" data-aos-duration="500">
                                Địa chỉ: Cụm CN-TTCN Trường Xuân, P. Trường
                                Xuân, TP. Tam Kỳ, Quảng Nam
                            </li>
                            <li data-aos="" data-aos-duration="700">
                                MST: 4000384498
                            </li>
                            <li data-aos="" data-aos-duration="900">
                                Hotline: 02353.820.341 - 02353.841.611
                            </li>
                            <li data-aos="fade-in" data-aos-duration="1600">
                                Email: tananthanh.tat@gmail.com
                            </li>
                        </ul>
                    </div>
                    <div class="content-footer">
                        <div class="circle" data-aos="flip-left"
                            data-aos-easing="ease-out-cubic"
                            data-aos-duration="2000">
                            <i class="fa fa-facebook"></i>
                        </div>
                        <div class="circle" data-aos="flip-left"
                            data-aos-easing="ease-out-cubic"
                            data-aos-duration="2000"><i class="fa fa-instagram"></i></div>
                        <div class="circle" data-aos="flip-left"
                            data-aos-easing="ease-out-cubic"
                            data-aos-duration="2000"><i class="fa fa-youtube"></i></div>
                    </div>
                </div>

                
            </div>

        </footer>
        <div class="footer-2nd">
            <div>© 2022 BY COMPANY LIMITED OWNERSHIP TANANTHANH. ALL RIGHT
                RESERVED. <br>
                Chính sách bảo mật thông tin</div>
            <div>

                <img src="../asset/image/dathongbao_bocongthuong.png" alt="">
            </div>
        </div>
        <script>
        
        $(document).ready(function(){
           
            $(window).scroll(function(){
              if($(this).scrollTop()){
                $('.icon').fadeIn();
              
              }
              else {
                $('.icon').fadeOut();
               
              }
            });
            $('.icon').click(function(){
              $('html,body').animate({scrollTop: 0},700);
            });	
            
          });
          
        
          </script>
    </body>
</html>