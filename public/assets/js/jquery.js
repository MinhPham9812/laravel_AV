$(document).ready(function() {
    // Đặt đoạn mã xử lý scroll sau khi header được load xong
    var lastScrollTop = 0;
    var header = $('#header');
    var logo = $('.nav-logo img');
    var headerHeightInitial = 127; // Chiều cao ban đầu của header khi ở trên cùng
    var headerHeightSmall = 70;    // Chiều cao nhỏ khi lăn chuột lên
    var logoHeightInitial = 70;    // Chiều cao ban đầu của logo
    var logoHeightSmall = 55;      // Chiều cao nhỏ của logo khi lăn chuột lên

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
            logo.css('height', logoHeightSmall + 'px'); // Thu nhỏ logo khi header nh
        }

        // Khi cuộn đến trên cùng của trang, trả lại chiều cao ban đầu của header
        if (scrollTop === 0) {
            header.css('height', headerHeightInitial + 'px');
            logo.css('height', logoHeightInitial + 'px'); // Đưa logo về chiều cao ban đầu
        }

        lastScrollTop = scrollTop; // Cập nhật vị trí cuộn hiện tại
    });

    // Mở sidebar khi nhấn nút nav-bars-btn
    $('.nav-bars-btn').click(function() {
        $('.nav-mobile').addClass('active');
        $('.nav-overlay').fadeIn();
    });

    // Đóng sidebar khi nhấn vào nút close hoặc overlay
    $('.nav-mobile-close, .nav-overlay').click(function() {
        $('.nav-mobile').removeClass('active');
        $('.nav-overlay').fadeOut();
    });


    // Load tabs và gắn sự kiện sau khi tải xong
    // $("#tab-container").load("/tabs", function(response, status, xhr) {
    //     if (status == "error") {
    //         console.log("Error loading tabs: " + xhr.status + " " + xhr.statusText);
    //     } else {
    //         console.log("Tabs loaded successfully");
    //     }

    //     // Khởi tạo Swiper sau khi slider-news-container được load
    //     $("#slider-news-container").load("/news", function() {
    //         const swiper = new Swiper('.swiper', {
    //             direction: 'horizontal',
    //             loop: true,
    //             pagination: {
    //                 el: '.swiper-pagination',
    //                 clickable: true,
    //             },
    //         });

    //         // Xử lý chuyển sang trang news_detail
    //         $('#slider-news-container').on('click', '.larg-news-item img, .small-news-grid img', function(event) {
    //             event.preventDefault();
    //             $("#tab-content").hide();
    //             $("#news-detail-container").show().load("/news-detail");
    //         });
    //     });

    //     // Gắn sự kiện click cho các tab
    //     $('#tabs a').on('click', function(event) {
    //         event.preventDefault();
    //         $('#tabs a').removeClass('active');
    //         $(this).addClass('active');
    //         $('.tab-pane').removeClass('active');

    //         let tabId = $(this).attr('id');
    //         console.log('Tab clicked: ' + tabId);

    //         if (tabId === 'news-link') {
    //             $('#news').addClass('active');
    //         } else if (tabId === 'newsProject-link') {
    //             $('#newsProject').load('/newsProject').addClass('active');
    //         } else if (tabId === 'notificationPage-link') {
    //             $('#notificationPage').load('/notificationPage').addClass('active');
    //         }
    //     });
    // });

     

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

