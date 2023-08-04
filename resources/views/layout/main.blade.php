<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="icon" href="{{ asset('/image/cropped-TAT-logo-chuanar-1-32x32.png') }}" sizes="32x32" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    @stack('css')
</head>

<body>
    @include('layout.header')
    @yield('content')
    @include('layout.footer')
    @stack('js')
    <script src="{{ asset('js/smooth-scrollbar.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop()) {
                    $(".icon").fadeIn();
                } else {
                    $(".icon").fadeOut();
                }
            });
            $(".icon").click(function() {
                $("html,body").animate({
                        scrollTop: 0,
                    },
                    700
                );
            });
        });
        $(document).ready(function() {
            // Lắng nghe sự kiện khi input được focus
            $('#searchInput').focus(function() {
                showSearchResults();
            });

            // Lắng nghe sự kiện khi input mất focus
            $('#searchInput').blur(function() {
                // Kiểm tra nếu không click vào danh sách kết quả, thì mới ẩn danh sách
                setTimeout(function() {
                    if (!$('.search-results').is(':focus-within')) {
                        hideSearchResults();
                    }
                }, 200); // Đợi 200ms để kiểm tra focus trong danh sách kết quả
            });

            // Lắng nghe sự kiện khi click vào danh sách kết quả
            $('.search-results').on('click', '.search-result-item', function(e) {
                e.stopPropagation(); // Ngăn chặn sự kiện click từ lan ra ngoài

                // Xử lý logic khi click vào kết quả, ví dụ: điều hướng đến trang chi tiết
                console.log('Đã click vào kết quả: ' + $(this).text());

                // Ẩn danh sách kết quả sau khi click
                hideSearchResults();
            });

            // Hiển thị danh sách kết quả tìm kiếm
            function showSearchResults() {
                $('.search-results').css('display', 'block');
            }

            // Ẩn danh sách kết quả tìm kiếm
            function hideSearchResults() {
                $('.search-results').css('display', 'none');
            }

        });
    </script>
</body>

</html>
