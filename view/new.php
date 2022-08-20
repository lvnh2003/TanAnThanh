<?php

require '../asset/controller/conection.php';
require '../asset/controller/controller.php';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
if ($page == 1) {
    $begin = 0;
} else {
    $begin = ($page * 12) - 12;
}
if (isset($_GET['value-search'])) {
    $value_search = $_GET['value-search'];
} else {
    $value_search = '';
}

$result = mysqli_query($con, "SELECT * FROM NEW WHERE TITLE  LIKE '%$value_search%' ORDER BY ID DESC LIMIT $begin,12");




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/news-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Itim|Lobster|Montserrat:500|Noto+Serif|Nunito|Patrick+Hand|Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i|Roboto+Slab|Saira" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
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
        <div class="item"><a href="">Tin Tân An Thành</a></div>
        <div class="item"><a href="">Các công ty hợp tác</a></div>
        <div class="item"><a href="">Thông tin báo chí</a></div>
        <div class="item"><a href="">Tin thị trường</a></div>
        <div class="item"><a href="">Văn hóa doanh nghiệp</a></div>
        <div class="item"><a href="">Thư Viên</a></div>
    </div>
    <div class="search" style="padding: 40px;position: relative;">
        <form class="searchbox" method="POST" enctype="multipart/form-data">
            <input type="text" placeholder="Tìm kiếm tin tức.." name="value-search">
            <button type="submit" name="search">Tìm</button>
        </form>

    </div>
    <?php if($value_search!='') {?>
    <div style="padding-left: 20px;color: gray">
        Bạn đang tìm kiếm: <span style="color: black">
        <?php echo $value_search ?>
        </span> 
    </div>
    <?php } ?>
    <div class="content">
        <?php
        $row = mysqli_num_rows($result);
        if ($row == 0) {
            echo '<div style="text-align:center" > Không tìm thấy kết quả </div>';
        } else {
        ?>

            <?php while ($key = mysqli_fetch_array($result)) { ?>
                <div class="item-content">
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
        <?php } ?>

    </div>
    <?php if (mysqli_num_rows($result) != 0) { ?>


        <div class="pages" style=" clear: both;">
            <?php
            $sql = mysqli_query($con, "SELECT * FROM NEW WHERE TITLE LIKE '%$value_search%' ");
            $row_count = mysqli_num_rows($sql);
            $pages = ceil($row_count / 12);


            ?>

            <ul>
                <?php if ($page != 1) { ?>
                    <li><a href="?page=<?php echo 1 ?>&value-search=<?php echo $value_search ?>">«</a></li>
                <?php } ?>
                <?php if ($page > 1) { ?>
                    <li><a href="?page=<?php echo $page - 1 ?>&value-search=<?php echo $value_search ?>">‹</a></li>
                <?php } ?>
                <?php for ($i = 1; $i <= $pages; $i++) {
                    if ($i > $page - 3 && $i < $page + 3) {

                ?>

                        <li <?php if ($i == $page) {
                                echo 'class="page-current"';
                            } ?>><a href="new.php?page=<?php echo $i ?>&value-search=<?php echo $value_search ?>" <?php if ($i == $page) {
                                echo 'style="color:white"';
                            } ?>><?php echo $i ?></a>
                        </li>
                    <?php }  ?>


                <?php } ?>
                <?php if ($page < $pages) { ?>
                    <li><a href="?page=<?php echo $page + 1 ?>&value-search=<?php echo $value_search ?>">›</a></li>
                <?php } ?>
                <?php if ($page != $pages) {  ?>

                    <li><a href="?page=<?php echo $pages ?>&value-search=<?php echo $value_search ?>">»</a></li>
                <?php } ?>
            </ul>

        </div>
    <?php
    } else {
        echo '<div style="padding: 30px;display:block"> </div>';
    }
    ?>
    <footer data-aos="fade-in" data-aos-duration="1500">
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