$(document).ready(function() {
    const header = $('.header');
    const logo = $('.header__logo-img');
    const root = document.documentElement;
    
    // Các giá trị chiều cao
    const heights = {
        default: 127,
        medium: 100,
        small: 70,
        scrolled: 70
    };
    
    const logoHeights = {
        default: 70,
        small: 55
    };

    function updateHeaderHeight(height) {
        root.style.setProperty('--header-height', `${height}px`);
    }

    function adjustLayout() {
        const windowWidth = $(window).width();
        
        if (windowWidth <= 1050) {
            updateHeaderHeight(heights.small);
            logo.height(logoHeights.small);
        } else if (windowWidth <= 1440) {
            updateHeaderHeight(heights.medium);
            logo.height(logoHeights.default);
        } else {
            updateHeaderHeight(heights.default);
            logo.height(logoHeights.default);
        }
    }

    // Scroll handler
    let lastScrollTop = 0;
    $(window).on('scroll', function() {
        const scrollTop = $(this).scrollTop();
        
        if (scrollTop > lastScrollTop) {
            // Scrolling down
            header.css('transform', `translateY(-${heights.default}px)`);
        } else {
            // Scrolling up
            header.css('transform', 'translateY(0)');
            updateHeaderHeight(heights.scrolled);
            logo.height(logoHeights.small);
        }

        if (scrollTop === 0) {
            adjustLayout();
        }

        lastScrollTop = scrollTop;
    });

    // Initial setup and resize handler
    adjustLayout();
    $(window).resize(adjustLayout);

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

