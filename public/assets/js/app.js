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
                slideChange: function () {
                    const activeIndex = this.realIndex; // Sử dụng realIndex thay vì activeIndex khi có loop
                    const totalSlides = this.slides.length - 2; // Trừ 2 slides clone khi loop
                    const lastBulletIndex = Math.ceil(totalSlides / 2) - 1;

                    // Logic cho bullet cuối
                    if (this.clickedIndex === lastBulletIndex) {
                        // Hiển thị slides 5 và 1
                        this.slideTo(totalSlides - 1); // Slide to slide 5
                    }
                },
                init: function () {
                    // Thêm bullet thứ 5
                    const totalBullets = 5;
                    this.pagination.render();
                    this.pagination.update();
                },
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
                },
            },
        });
    }

    if (
        window.location.pathname === "/" ||
        window.location.pathname.includes("/home")
    ) {
        // Thêm Swiper cho home1
        const home1Swiper = new Swiper(".home1 .swiper-base", {
            slidesPerView: 1,
            spaceBetween: 60,
            pagination: {
                el: ".home1 .swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 7000, // 2 seconds
                disableOnInteraction: false, // Tiếp tục autoplay sau khi user tương tác
            },
            loop: true,
            speed: 800,
            autoHeight: true,
        });

        // Thêm Swiper cho home2
        const home2Swiper = new Swiper(".home2 .swiper-base", {
            slidesPerView: 1.3,
            spaceBetween: 10,
            navigation: {
                prevEl: ".home2 .js-showarrow .prev-slide",
                nextEl: ".home2 .js-showarrow .next-slide",
            },
            loop: false,
            speed: 800,
            autoHeight: true,
            breakpoints: {
                // >= 1024px (desktop)
                1024: {
                    centeredSlides: false,
                },
                // < 1024px (mobile)
                0: {
                    centeredSlides: true,
                },
            },
        });
    }

    if (window.location.pathname.includes("pineapple-village-location")) {
        const locationSwiper = new Swiper(".location__top .swiper-base", {
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
                el: ".location__top .swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 7000, // 2 seconds
                disableOnInteraction: false, // Tiếp tục autoplay sau khi user tương tác
            },
            loop: true,
            speed: 800,
            autoHeight: true,
        });
    }

    if (window.location.pathname.includes("pineapple-village-potential")) {
        const potentialSwiper = new Swiper(".potential2 .swiper-base", {
            spaceBetween: 30,
            loop: false,
            speed: 800,
            navigation: {
                prevEl: ".potential2 .prev-slide",
                nextEl: ".potential2 .next-slide",
            },
            breakpoints: {
                1025: {
                    slidesPerView: 3,
                },
                0: {
                    slidesPerView: 1,
                },
            },
        });
    }

    if (window.location.pathname.includes("investment-seminar")) {
        const seminar3Swiper = new Swiper(".seminar3 .swiper-base", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: true,
            speed: 800,
            pagination: {
                el: ".seminar3 .swiper-pagination",
                clickable: true,
            },
            autoplay: {
                delay: 7000, // 2 seconds
                disableOnInteraction: false, // Tiếp tục autoplay sau khi user tương tác
            },
            autoHeight: true,
        });

        const seminar4Swiper = new Swiper(".seminar4 .swiper-base", {
            slidesPerView: 1,
            spaceBetween: 30,
            loop: false,
            speed: 800,
            navigation: {
                nextEl: ".seminar4 .next-slide",
                prevEl: ".seminar4 .prev-slide",
            },
            on: {
                slideChange: function () {
                    const currentSlide = this.slides[this.activeIndex];
                    const month = currentSlide.dataset.month;
                    document.querySelector(".month-display").textContent =
                        month.toUpperCase();
                },
            },
        });
    }
});
