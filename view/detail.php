<?php

require '../asset/controller/conection.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($con, "SELECT * FROM NEW WHERE ID=$id");
    $data = mysqli_fetch_assoc($result);
    if ($id <= 5) {
        $result_more = mysqli_query($con, "SELECT * FROM NEW WHERE ID BETWEEN $id AND $id+5");
    } else {
        $result_more = mysqli_query($con, "SELECT * FROM NEW WHERE ID BETWEEN $id-5 AND $id");
    }
} else {
    header('location:index.html');
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/news-style.css">
    <link rel="stylesheet" href="../asset/css/detail.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Itim|Lobster|Montserrat:500|Noto+Serif|Nunito|Patrick+Hand|Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i|Roboto+Slab|Saira" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="../asset/js/pkgd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <link rel="icon" href="../asset/image/cropped-TAT-logo-chuanar-1-32x32.png" sizes="32x32">
    <link rel="stylesheet" href="../asset/css/scroll-bar.css">
    <title>Tin tức & Sự kiện</title>
</head>

<body>
    <script src="../asset/js/aos.js"></script>
    <script>
        AOS.init();
    </script>
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
            <label for="check" class="hidden">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </label>
            <label for="">
                <img src="https://tananthanh.com/wp-content/uploads/2022/02/Banner-Tan-An-Thanh-1400x289.png" alt="">
            </label>
            <ul id="bars">

                <li><a href="index.html">TRANG CHỦ</a></li>
                <li><a href="">GIỚI THIỆU</a></li>
                <li><a href="" id="active">TIN TỨC & SỰ KIỆN</a></li>
                <li><a href="recruit.html">TUYỂN DỤNG</a></li>
                <li><a href="contact.html">LIÊN HỆ</a></li>
            </ul>
        </nav>
    </div>
    <div class="slide-show">
        <div class="rectangle">
            <h3 class="text">
                <br>
                Tin tức
            </h3>

        </div>
    </div>
    <div class="menu-new">
        <div class="item"><a href="">Tin Công ty TNHH Tân An Thành</a></div>
        <div class="item"><a href="">Các công ty hợp tác</a></div>
        <div class="item"><a href="">Thông tin báo chí</a></div>
        <div class="item"><a href="">Tin thị trường</a></div>
        <div class="item"><a href="">Văn hóa doanh nghiệp</a></div>
        <div class="item"><a href="">Thư Viên</a></div>
    </div>
    <div class="container">
        <div class="new">
            <h1><?php echo $data['title'] ?></h1>

            <div class="title">
                TIN CÔNG TY TNHH TÂN AN THÀNH | <img src="../asset/image/calendar-icon.png" alt="" width="20px">
                <span style="color: black">
                    <?php $date = date_create($data['day_post']);
                    echo date_format($date, "d-m-Y "); ?>
                </span>
            </div>
            <hr width="100%" color="gray">

            <div class="main-content">
                <b>
                    <?php echo $data['main_content'] ?>
                </b>
            </div>
            <div class="line-height">
                <?php
                if (!empty($data['content_1'])) {
                    echo $data['content_1'];
                }
                ?>
            </div>
            <div class="image">
                <?php if (!empty($data['image_1'])) { ?>
                    <img src="../asset/uploads/<?php echo $data['image_1'] ?>" alt="">


                    <div style="text-align: center;color: gray">
                        <?php echo $data['image_description_1'] ?>
                    <?php } ?>
                    </div>

            </div>
            <div class=" line-height">
                <?php
                if (!empty($data['content_2'])) {
                    echo $data['content_2'];
                }
                ?>
            </div>
            <div class="image">
                <?php if (!empty($data['image_2'])) { ?>
                    <img src="../asset/uploads/<?php echo $data['image_1'] ?>" alt="">


                    <div style="text-align: center;color: gray">
                        <?php echo $data['image_description_2'] ?>
                    <?php } ?>
                    </div>

            </div>
            <div class=" line-height">
                <?php
                if (!empty($data['content_3'])) {
                    echo $data['content_3'];
                }
                ?>
            </div>
            <div class="image">
                <?php if (!empty($data['image_3'])) { ?>
                    <img src="../asset/uploads/<?php echo $data['image_3'] ?>" alt="">


                    <div style="text-align: center;color: gray">
                        <?php echo $data['image_description_3'] ?>
                    <?php } ?>
                    </div>

            </div>
        </div>
        <div class="care">
            <div class="title-big">
                CÓ THỂ BẠN QUAN TÂM
            </div>
            <div class="content">
            
            <?php while ($key = mysqli_fetch_array($result_more)) { ?>
                <div class="slide-item">
                    <img src="../asset/uploads/<?php echo $key['image_title_name'] ?>" alt="" onclick="window.open('detail.php?id=<?php echo $key['id'] ?>','_self')">
                    <div class="title">
                        Tin Công ty TNHH Tân An Thành
                    </div>
                    <hr>
                    <div class="paragraph">
                        <a href="detail.php?id=<?php echo $key['id'] ?>">
                            <?php echo $key['title'] ?>
                        </a>
                    </div>
                </div>
            <?php } ?>

                

            </div>
        </div>




    </div>
    <!-- <div class="flickity-slider" data-aos="slide-up" data-aos-duration="1100">
            <div class="title-big">
                CÓ THỂ BẠN QUAN TÂM
            </div>
        
    </div> -->

    <footer data-aos="fade-in">
        <div class="overlay">

            <div class="title-no-before center">
                CÔNG TY TNHH TÂN AN THÀNH
            </div>
            <div class="content-main">
                <div class="content-footer">
                    <img data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000" src="../asset/image/TAT-logo-chuanar-e1644918338966.png" alt="">
                </div>
                <div class="content-footer">
                    <ul>
                        <li data-aos="fade-in" data-aos-duration="1000">
                            Địa chỉ: Cụm CN-TTCN Trường Xuân, P. Trường
                            Xuân, TP. Tam Kỳ, Quảng Nam
                        </li>
                        <li data-aos="fade-in" data-aos-duration="1200">
                            MST: 4000384498
                        </li>
                        <li data-aos="fade-in" data-aos-duration="1400">
                            Hotline: 02353.820.341 - 02353.841.611
                        </li>
                        <li data-aos="fade-in" data-aos-duration="1600">
                            Email: tananthanh.tat@gmail.com
                        </li>
                    </ul>
                </div>
                <div class="content-footer">
                    <div class="circle" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
                        <i class="fa fa-facebook"></i>
                    </div>
                    <div class="circle" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000"><i class="fa fa-instagram"></i></div>
                    <div class="circle" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000"><i class="fa fa-youtube"></i></div>
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
        $(document).ready(function() {

            $(window).scroll(function() {
                if ($(this).scrollTop()) {
                    $('.icon').fadeIn();

                } else {
                    $('.icon').fadeOut();

                }
            });
            $('.icon').click(function() {
                $('html,body').animate({
                    scrollTop: 0
                }, 700);
            });

        });
    </script>
</body>

</html>