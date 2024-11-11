document.addEventListener("DOMContentLoaded", function () {
    const currentPath = window.location.pathname;

    // Cấu hình cơ bản cho swiper
    const swiperConfig = {
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        loop: true,
        speed: 1000,
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
});
