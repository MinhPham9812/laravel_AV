document.addEventListener("DOMContentLoaded", function () {
    const currentPath = window.location.pathname;

    // Cấu hình cơ bản cho swiper
    const swiperConfig = {
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        loop: true,
        speed: 800,
        spaceBetween: 60,
        slidesPerView: 1,
        autoHeight: true,
    };

    if (currentPath.includes("aking-general")) {
        // Swiper cho phần intro second
        new Swiper(".model__intro-second .swiper", {
            ...swiperConfig,
            pagination: {
                el: ".model__intro-second .swiper-pagination",
                clickable: true,
            },
        });

        // Khởi tạo Swiper cho timeline content
        const contentSwiper = new Swiper(".timeline__content .swiper", {
            ...swiperConfig,
            pagination: {
                el: ".timeline__container .swiper-pagination",
                clickable: true,
            },
            observer: true,
            observeParents: true,
        });

        // Đồng bộ keywords với slides
        const keywords = document.querySelectorAll(".keyword__item");

        // Set active class cho keyword đầu tiên
        keywords[0].classList.add("active");

        // Xử lý khi slide thay đổi
        contentSwiper.on("slideChange", function () {
            keywords.forEach((item, index) => {
                item.classList.toggle("active", index === this.realIndex);
            });
            contentSwiper.updateAutoHeight();
        });

        // Click event cho keywords
        keywords.forEach((keyword, index) => {
            keyword.addEventListener("click", () => {
                contentSwiper.slideTo(index);
            });
        });
    }

    if (currentPath.includes("news")) {
        new Swiper(".tab-content__pane--active .swiper", swiperConfig);
    }

    if (currentPath.includes("aking-lion-value")) {
        const lionValueSwiper = new Swiper(".lionValue .swiper-base", {
            slidesPerView: 2,
            spaceBetween: 60,
            pagination: {
                el: ".lionValue .swiper-pagination",
                clickable: true,
                // Tăng số lượng bullets
                renderBullet: function (index, className) {
                    return '<span class="' + className + '"></span>';
                },
            },
            loop: true, // Bật loop để có thể quay lại slide 1
            speed: 800,
            on: {
                slideChange: function() {
                    const activeIndex = this.realIndex; // Sử dụng realIndex thay vì activeIndex khi có loop
                    const totalSlides = this.slides.length - 2; // Trừ 2 slides clone khi loop
                    const lastBulletIndex = Math.ceil(totalSlides / 2) - 1;
    
                    // Logic cho bullet cuối
                    if (this.clickedIndex === lastBulletIndex) {
                        // Hiển thị slides 5 và 1
                        this.slideTo(totalSlides - 1); // Slide to slide 5
                    }
                },
                init: function() {
                    // Thêm bullet thứ 5
                    const totalBullets = 5;
                    this.pagination.render();
                    this.pagination.update();
                }
            },
            // Đảm bảo slides 5 và 1 hiển thị cùng nhau khi click vào bullet cuối
            loopedSlides: 1,
            breakpoints: {
                // Khi width >= 1024px
                1024: {
                    slidesPerView: 2,
                },
                // Mặc định cho màn hình < 1024px
                0: {
                    slidesPerView: 1,
                }
            }
        });
    }

    if (window.location.pathname === "/" || window.location.pathname.includes("/home")) {
        const home1Swiper = new Swiper(".home1 .swiper-base", {
            slidesPerView: 1,
            spaceBetween: 60,
            pagination: {
                el: '.swiper-pagination', 
                clickable: true,
            },
            loop: true,
            speed: 800,
            autoHeight: true
        });
    }
});
