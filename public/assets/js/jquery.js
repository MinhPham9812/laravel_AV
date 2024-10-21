$(document).ready(function() {
    var header = $('.header');
    var logo = $('.header__logo-img');
    
    // Các giá trị chiều cao
    var headerHeightInitial = 127; 
    var headerHeightSmall = 70;    
    var logoHeightInitial = 70;    
    var logoHeightSmall = 55;      
    
    // Điều chỉnh chiều cao header theo kích thước màn hình
    function adjustHeaderHeight() {
        var windowWidth = $(window).width();
        
        if (windowWidth <= 1050) {
            header.css('height', headerHeightSmall + 'px');
            logo.css('height', logoHeightSmall + 'px');
        } else if (windowWidth <= 1440) {
            header.css('height', '100px');
            logo.css('height', logoHeightInitial + 'px');
        } else {
            header.css('height', headerHeightInitial + 'px');
            logo.css('height', logoHeightInitial + 'px');
        }
    }

    // Gọi hàm điều chỉnh chiều cao khi tải lại trang và khi thay đổi kích thước trang
    adjustHeaderHeight();
    $(window).resize(adjustHeaderHeight);

    // Xử lý cuộn trang
    var lastScrollTop = 0;
    $(window).on('scroll', function() {
        var scrollTop = $(this).scrollTop();

        if (scrollTop > lastScrollTop) {
            // Lăn chuột xuống: ẩn header
            header.css('top', -headerHeightInitial + 'px');
        } else {
            // Lăn chuột lên: hiện header với chiều cao nhỏ
            header.css({
                'top': '0',
                'height': headerHeightSmall + 'px'
            });
            logo.css('height', logoHeightSmall + 'px');
        }

        // Khi cuộn đến trên cùng của trang, trả lại chiều cao ban đầu của header
        if (scrollTop === 0) {
            adjustHeaderHeight();
        }

        lastScrollTop = scrollTop; // Cập nhật vị trí cuộn hiện tại
    });

    // Mở sidebar khi nhấn nút nav-bars-btn
    $('.header__bars-btn').click(function() {
        $('.header__mobile').addClass('active');
        $('.header__overlay').fadeIn();
    });

    // Đóng sidebar khi nhấn vào nút close hoặc overlay
    $('.header__mobile-close, .header__overlay').click(function() {
        $('.header__mobile').removeClass('active');
        $('.header__overlay').fadeOut();
    });


     

    // Xử lý scrollToTop
    // Kiểm tra nếu phần tử scrollToTop tồn tại
    if ($("#scrollToTop").length) {
        // Ẩn nút khi trang được tải
        $("#scrollToTop").hide();

        // Khi người dùng cuộn xuống 600px, hiển thị nút
        $(window).on('scroll',function() {
            if ($(this).scrollTop() > 600) {
                $("#scrollToTop").fadeIn();
            } else {
                $("#scrollToTop").fadeOut();
            }
        });

        // Khi người dùng nhấp vào nút, cuộn về đầu trang
        $("#scrollToTop").on('click',function() {
            $("html, body").animate({scrollTop: 0}, 600);
            return false;
        });
    }
});

