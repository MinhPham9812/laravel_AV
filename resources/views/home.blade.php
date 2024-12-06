@extends('layouts.master')

@section('title', 'Trang Chủ')

@section('home')
    <x-breadcrumb class="breadcrumb--home" tag="h2">
        @slot('title')
            MÔ HÌNH ĐẦU TƯ & KHAI THÁC BẤT ĐỘNG SẢN NÔNG NGHIỆP
        @endslot
        <h3 class="breadcrumb__subtitle">
            Dẫn đầu xu hướng phát triển BĐS Nông nghiệp mới tại Việt Nam
        </h3>
    </x-breadcrumb>

    <section class="home1">
        <div class="l-container">
            <div class="c-row">
                <!-- Cột hình ảnh -->
                <div class="c-row__col home1__image">
                    <img alt="Mô hình đầu tư" src="assets/images/homeBanner1.png">
                </div>

                <!-- Cột nội dung với Swiper -->
                <div class="c-row__col home1__content">
                    <div class="swiper-base">
                        <div class="swiper-wrapper">
                            <!-- Slide 1 -->
                            <div class="swiper-slide">
                                <div class="home1__slide">
                                    <h2 class="c-title1">AKING VILLAGE</h2>
                                    <h3 class="c-title2">MÔ HÌNH ĐẦU TƯ VÀ KHAI THÁC <br> BĐS NÔNG NGHIỆP CẢI TIẾN & AN TOÀN
                                    </h3>
                                    <img alt="Mô hình đầu tư" class="only-sp" src="assets/images/homeBanner1.png">
                                    <p>Lấy nông nghiệp xanh và vùng trồng làm giá trị cốt lỗi, phát triển BĐS nông nghiệp từ
                                        đó khai thác nông sản kết hợp mô hình du lịch làng sinh thái và F&amp;B, Aking
                                        Village hướng đến phát triển “Mô hình đầu tư Bất động sản Nông nghiệp và Nông sản”
                                        hiện đại mang lại giá trị bền vững, cơ chế đầu tư hoàn thiện cho nhà đầu tư, không
                                        những vậy còn tạo sinh kế cho người dân địa phương.</p>
                                    <a class="c-btn3" href=""> Tìm hiểu thêm
                                        <svg fill="none" height="46" viewBox="0 0 47 46" width="47"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M45.524 23C45.524 35.4262 35.4453 45.5 23.012 45.5C10.5787 45.5 0.5 35.4262 0.5 23C0.5 10.5738 10.5787 0.5 23.012 0.5C35.4453 0.5 45.524 10.5738 45.524 23Z"
                                                stroke="#EEEBE2" />
                                            <path
                                                d="M28.6795 22.3352C29.0467 22.7024 29.0467 23.2976 28.6795 23.6648L22.6963 29.648C22.3291 30.0152 21.7339 30.0152 21.3667 29.648C20.9995 29.2809 20.9995 28.6856 21.3667 28.3184L26.6851 23L21.3667 17.6816C20.9995 17.3144 20.9995 16.7191 21.3667 16.352C21.7339 15.9848 22.3291 15.9848 22.6963 16.352L28.6795 22.3352ZM18.0095 22.0598L28.0147 22.0598V23.9402L18.0095 23.9402V22.0598Z"
                                                fill="#EEEBE2" />
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <!-- Slide 2 -->
                            <div class="swiper-slide">
                                <div class="home1__slide">
                                    <h2 class="c-title1">AKING VILLAGE2</h2>
                                    <h3 class="c-title2">MÔ HÌNH ĐẦU TƯ VÀ KHAI THÁC <br> BĐS NÔNG NGHIỆP CẢI TIẾN & AN TOÀN
                                    </h3>
                                    <img alt="Mô hình đầu tư" class="only-sp" src="assets/images/homeBanner1.png">
                                    <p>Lấy nông nghiệp xanh và vùng trồng làm giá trị cốt lỗi, phát triển BĐS nông nghiệp từ
                                        đó khai thác nông sản kết hợp mô hình du lịch làng sinh thái và F&amp;B, Aking
                                        Village hướng đến phát triển “Mô hình đầu tư Bất động sản Nông nghiệp và Nông sản”
                                        hiện đại mang lại giá trị bền vững, cơ chế đầu tư hoàn thiện cho nhà đầu tư, không
                                        những vậy còn tạo sinh kế cho người dân địa phương.</p>
                                    <a class="c-btn3" href=""> Tìm hiểu thêm
                                        <svg fill="none" height="46" viewBox="0 0 47 46" width="47"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M45.524 23C45.524 35.4262 35.4453 45.5 23.012 45.5C10.5787 45.5 0.5 35.4262 0.5 23C0.5 10.5738 10.5787 0.5 23.012 0.5C35.4453 0.5 45.524 10.5738 45.524 23Z"
                                                stroke="#EEEBE2" />
                                            <path
                                                d="M28.6795 22.3352C29.0467 22.7024 29.0467 23.2976 28.6795 23.6648L22.6963 29.648C22.3291 30.0152 21.7339 30.0152 21.3667 29.648C20.9995 29.2809 20.9995 28.6856 21.3667 28.3184L26.6851 23L21.3667 17.6816C20.9995 17.3144 20.9995 16.7191 21.3667 16.352C21.7339 15.9848 22.3291 15.9848 22.6963 16.352L28.6795 22.3352ZM18.0095 22.0598L28.0147 22.0598V23.9402L18.0095 23.9402V22.0598Z"
                                                fill="#EEEBE2" />
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <!-- Slide 3 -->
                            <div class="swiper-slide">
                                <div class="home1__slide">
                                    <h2 class="c-title1">AKING VILLAGE3</h2>
                                    <h3 class="c-title2">MÔ HÌNH ĐẦU TƯ VÀ KHAI THÁC <br> BĐS NÔNG NGHIỆP CẢI TIẾN & AN TOÀN
                                    </h3>
                                    <img alt="Mô hình đầu tư" class="only-sp" src="assets/images/homeBanner1.png">
                                    <p>Lấy nông nghiệp xanh và vùng trồng làm giá trị cốt lỗi, phát triển BĐS nông nghiệp từ
                                        đó khai thác nông sản kết hợp mô hình du lịch làng sinh thái và F&amp;B, Aking
                                        Village hướng đến phát triển “Mô hình đầu tư Bất động sản Nông nghiệp và Nông sản”
                                        hiện đại mang lại giá trị bền vững, cơ chế đầu tư hoàn thiện cho nhà đầu tư, không
                                        những vậy còn tạo sinh kế cho người dân địa phương.</p>
                                    <a class="c-btn3" href=""> Tìm hiểu thêm
                                        <svg fill="none" height="46" viewBox="0 0 47 46" width="47"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M45.524 23C45.524 35.4262 35.4453 45.5 23.012 45.5C10.5787 45.5 0.5 35.4262 0.5 23C0.5 10.5738 10.5787 0.5 23.012 0.5C35.4453 0.5 45.524 10.5738 45.524 23Z"
                                                stroke="#EEEBE2" />
                                            <path
                                                d="M28.6795 22.3352C29.0467 22.7024 29.0467 23.2976 28.6795 23.6648L22.6963 29.648C22.3291 30.0152 21.7339 30.0152 21.3667 29.648C20.9995 29.2809 20.9995 28.6856 21.3667 28.3184L26.6851 23L21.3667 17.6816C20.9995 17.3144 20.9995 16.7191 21.3667 16.352C21.7339 15.9848 22.3291 15.9848 22.6963 16.352L28.6795 22.3352ZM18.0095 22.0598L28.0147 22.0598V23.9402L18.0095 23.9402V22.0598Z"
                                                fill="#EEEBE2" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

                <!-- Mobile button -->
                <a class="c-btn2 u-btn only-sp" href="/">Tìm hiểu thêm</a>
            </div>
        </div>
    </section>

    <section class="home2">
        <div class="home2__inner">
            <div class="c-row">
                <!-- Cột tiêu đề bên trái -->
                <div class="c-row__col home2__content">
                    <h2 class="c-title1">5 GIÁ TRỊ AKING VILLAGE MANG LẠI CHO CỘNG ĐỒNG</h2>
                    <p>Lướt qua để khám phá</p>

                    <!-- Navigation buttons -->
                    <div class="js-showarrow">
                        <button class="button-slider prev-slide" type="button">
                            <svg fill="none" height="10" viewBox="0 0 14 10" width="14"
                                xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd"
                                    d="M13.9999 4.9999C13.9999 4.86729 13.9472 4.74011 13.8535 4.64635C13.7597 4.55258 13.6325 4.4999 13.4999 4.4999H1.70692L4.85392 1.3539C4.9004 1.30741 4.93728 1.25222 4.96244 1.19148C4.9876 1.13074 5.00055 1.06564 5.00055 0.999899C5.00055 0.934155 4.9876 0.869055 4.96244 0.808316C4.93728 0.747576 4.9004 0.692387 4.85392 0.645899C4.80743 0.599411 4.75224 0.562535 4.6915 0.537376C4.63076 0.512217 4.56566 0.499268 4.49992 0.499268C4.43417 0.499268 4.36907 0.512217 4.30833 0.537376C4.24759 0.562535 4.1924 0.599411 4.14592 0.645899L0.145917 4.6459C0.099354 4.69234 0.0624111 4.74752 0.0372047 4.80827C0.0119982 4.86901 -0.000976563 4.93413 -0.000976562 4.9999C-0.000976563 5.06567 0.0119982 5.13079 0.0372047 5.19153C0.0624111 5.25228 0.099354 5.30745 0.145917 5.3539L4.14592 9.3539C4.1924 9.40039 4.24759 9.43726 4.30833 9.46242C4.36907 9.48758 4.43417 9.50053 4.49992 9.50053C4.56566 9.50053 4.63076 9.48758 4.6915 9.46242C4.75224 9.43726 4.80743 9.40039 4.85392 9.3539C4.9004 9.30741 4.93728 9.25222 4.96244 9.19148C4.9876 9.13074 5.00055 9.06564 5.00055 8.9999C5.00055 8.93416 4.9876 8.86905 4.96244 8.80832C4.93728 8.74758 4.9004 8.69239 4.85392 8.6459L1.70692 5.4999H13.4999C13.6325 5.4999 13.7597 5.44722 13.8535 5.35345C13.9472 5.25968 13.9999 5.13251 13.9999 4.9999Z"
                                    fill-rule="evenodd" fill="#63A940" />
                            </svg>
                        </button>
                        <svg fill="none" height="33" viewBox="0 0 20 33" width="20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 32.7697C7.34784 32.7697 4.8043 31.6922 2.92893 29.7744C1.05357 27.8566 0 25.2555 0 22.5433V10.2716C0 7.55936 1.05357 4.95823 2.92893 3.04041C4.8043 1.12259 7.34784 0.045166 10 0.045166C12.6522 0.045166 15.1957 1.12259 17.0711 3.04041C18.9464 4.95823 20 7.55936 20 10.2716V22.5433C20 23.8862 19.7413 25.216 19.2388 26.4567C18.7362 27.6975 17.9997 28.8248 17.0711 29.7744C16.1425 30.724 15.0401 31.4773 13.8268 31.9912C12.6136 32.5051 11.3132 32.7697 10 32.7697ZM10 2.09045C7.87827 2.09045 5.84344 2.95238 4.34315 4.48664C2.84285 6.0209 2 8.1018 2 10.2716V22.5433C2 24.713 2.84285 26.7939 4.34315 28.3282C5.84344 29.8624 7.87827 30.7244 10 30.7244C12.1217 30.7244 14.1566 29.8624 15.6569 28.3282C17.1571 26.7939 18 24.713 18 22.5433V10.2716C18 8.1018 17.1571 6.0209 15.6569 4.48664C14.1566 2.95238 12.1217 2.09045 10 2.09045Z"
                                fill="#63A940" />
                            <path
                                d="M10 13.3397C9.73478 13.3397 9.48043 13.232 9.29289 13.0402C9.10536 12.8484 9 12.5883 9 12.3171V8.2265C9 7.95528 9.10536 7.69516 9.29289 7.50338C9.48043 7.3116 9.73478 7.20386 10 7.20386C10.2652 7.20386 10.5196 7.3116 10.7071 7.50338C10.8946 7.69516 11 7.95528 11 8.2265V12.3171C11 12.5883 10.8946 12.8484 10.7071 13.0402C10.5196 13.232 10.2652 13.3397 10 13.3397Z"
                                fill="#63A940" />
                        </svg>
                        <button class="button-slider next-slide" type="button">
                            <svg fill="none" height="10" viewBox="0 0 14 10" width="14"
                                xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd"
                                    d="M8.29697e-05 4.9999C8.29697e-05 4.86729 0.052761 4.74011 0.146529 4.64635C0.240297 4.55258 0.367475 4.4999 0.500083 4.4999H12.2931L9.14608 1.3539C9.09959 1.30741 9.06272 1.25222 9.03756 1.19148C9.0124 1.13074 8.99945 1.06564 8.99945 0.999899C8.99945 0.934155 9.0124 0.869055 9.03756 0.808316C9.06272 0.747576 9.09959 0.692387 9.14608 0.645899C9.19257 0.599411 9.24776 0.562535 9.3085 0.537376C9.36924 0.512217 9.43434 0.499268 9.50008 0.499268C9.56583 0.499268 9.63093 0.512217 9.69167 0.537376C9.75241 0.562535 9.8076 0.599411 9.85408 0.645899L13.8541 4.6459C13.9006 4.69234 13.9376 4.74752 13.9628 4.80827C13.988 4.86901 14.001 4.93413 14.001 4.9999C14.001 5.06567 13.988 5.13079 13.9628 5.19153C13.9376 5.25228 13.9006 5.30745 13.8541 5.3539L9.85408 9.3539C9.8076 9.40039 9.75241 9.43726 9.69167 9.46242C9.63093 9.48758 9.56583 9.50053 9.50008 9.50053C9.43434 9.50053 9.36924 9.48758 9.3085 9.46242C9.24776 9.43726 9.19257 9.40039 9.14608 9.3539C9.09959 9.30741 9.06272 9.25222 9.03756 9.19148C9.0124 9.13074 8.99945 9.06564 8.99945 8.9999C8.99945 8.93416 9.0124 8.86905 9.03756 8.80832C9.06272 8.74758 9.09959 8.69239 9.14608 8.6459L12.2931 5.4999H0.500083C0.367475 5.4999 0.240297 5.44722 0.146529 5.35345C0.052761 5.25968 8.29697e-05 5.13251 8.29697e-05 4.9999Z"
                                    fill-rule="evenodd" fill="#63A940" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Cột slider bên phải -->
                <div class="c-row__col home2__slider">
                    <div class="swiper-base">
                        <div class="swiper-wrapper">
                            <!-- Slide 1 -->
                            <div class="swiper-slide">
                                <div class="home2__slide">
                                    <img alt="Gia tăng hiệu suất vùng trồng" class="u-img home2__image"
                                        src="assets/images/homeBanner2.png">
                                    <div class="home2__title">Gia tăng hiệu suất1 <br> vùng trồng</div>
                                    <p class="home2__text">Tạo ra lợi nhuận kép an toàn và dài hạn với giải pháp khai thác
                                        đất và sản xuất nông nghiệp mang lại giá trị kinh tế cao cho nhà đầu tư, cũng như
                                        góp phần phát triển mô hình nông trại sinh thái trên cả nước</p>
                                </div>
                            </div>

                            <!-- Slide 2 -->
                            <div class="swiper-slide">
                                <div class="home2__slide">
                                    <img alt="Gia tăng hiệu suất vùng trồng" class="u-img"
                                        src="assets/images/homeBanner2.png">
                                    <div class="home2__title">Gia tăng hiệu suất2 <br> vùng trồng</div>
                                    <p class="home2__text">Tạo ra lợi nhuận kép an toàn và dài hạn với giải pháp khai thác
                                        đất và sản xuất nông nghiệp mang lại giá trị kinh tế cao cho nhà đầu tư, cũng như
                                        góp phần phát triển mô hình nông trại sinh thái trên cả nước</p>
                                </div>
                            </div>

                            <!-- Slide 3 -->
                            <div class="swiper-slide">
                                <div class="home2__slide">
                                    <img alt="Gia tăng hiệu suất vùng trồng" class="u-img"
                                        src="assets/images/homeBanner2.png">
                                    <div class="home2__title">Gia tăng hiệu suất3 <br> vùng trồng</div>
                                    <p class="home2__text">Tạo ra lợi nhuận kép an toàn và dài hạn với giải pháp khai thác
                                        đất và sản xuất nông nghiệp mang lại giá trị kinh tế cao cho nhà đầu tư, cũng như
                                        góp phần phát triển mô hình nông trại sinh thái trên cả nước</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home3">
        <div class="l-container">
            <div class="home3__inner">
                <h2 class="c-title2">LỢI NHUẬN HẤP DẪN, CƠ SỞ VỮNG CHẮC VỚI</h2>
                <h3 class="c-title1">HỆ SINH THÁI NÔNG NGHIỆP TOÀN DIỆN</h3>
                <p>Bất động sản nông nghiệp là xu thế "chiếm sóng thị trường" với các cơ chế chính sách đang mở cửa. Aking
                    Village tiên phong xây dựng <span>Mô hình đầu tư Bất động sản Nông nghiệp và Nông sản</span> - loại hình
                    đầu tư đầy tiềm năng và cơ chế pháp lý đầy đủ - giúp các nhà đầu tư dễ dàng tiếp cận thị trường BĐS nông
                    nghiệp có khả năng sinh lời vững vàng trước mọi biến động.</p>
                <a class="c-btn1 u-btn" href="/">Đầu tư ngay</a>
            </div>
        </div>
    </section>

    <section class="home4">
        <div class="l-container">
            <div class="home4__content">
                <h2 class="c-title2">TĂNG TRƯỞNG ĐẤT TRUNG BÌNH <span>20%</span> MỖI NĂM THU NHẬP THỤ ĐỘNG TỪ FARM
                    <span>50+++</span> TRIỆU/NĂM</h2>
                <div class="c-row">
                    <div class="c-row__col">
                        <div class="u-center">
                            <svg fill="none" height="43" viewBox="0 0 42 43" width="42"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M21 5.90778e-06C16.8466 5.90778e-06 12.7865 1.26096 9.33303 3.62341C5.8796 5.98586 3.18798 9.3437 1.59854 13.2723C0.00909892 17.2009 -0.406771 21.5238 0.403518 25.6944C1.21381 29.865 3.21386 33.696 6.15076 36.7028C9.08767 39.7096 12.8295 41.7573 16.9031 42.5869C20.9767 43.4165 25.1991 42.9907 29.0364 41.3634C32.8736 39.7361 36.1534 36.9804 38.4609 33.4448C40.7684 29.9091 42 25.7523 42 21.5C42.002 18.676 41.4603 15.8793 40.4056 13.2698C39.351 10.6604 37.8042 8.28941 35.8538 6.29254C33.9034 4.29566 31.5875 2.71206 29.0388 1.63233C26.49 0.552596 23.7583 -0.00208828 21 5.90778e-06ZM33.2474 15.6074L18.0514 31.2148C17.8752 31.4009 17.6647 31.5492 17.4321 31.6513C17.1995 31.7533 16.9494 31.8071 16.6963 31.8094C16.2123 31.8094 15.68 31.6112 15.3412 31.2148L7.79161 23.4854C7.42569 23.1109 7.22008 22.6029 7.22 22.0732C7.21992 21.5435 7.42538 21.0354 7.79118 20.6608C8.15698 20.2862 8.65316 20.0757 9.17056 20.0756C9.68797 20.0755 10.1842 20.2858 10.5501 20.6603L16.6479 27.0033L30.4889 12.8292C30.6685 12.641 30.883 12.4914 31.1199 12.3893C31.3567 12.2872 31.6111 12.2346 31.8681 12.2346C32.1252 12.2346 32.3796 12.2872 32.6164 12.3893C32.8533 12.4914 33.0678 12.641 33.2474 12.8292C34.0252 13.5724 34.0252 14.8111 33.2474 15.6039V15.6074Z"
                                    fill="#63A940" />
                            </svg>
                        </div>
                        <p class="c-desc">Nắm giữ trong tay <span>1000m2 đất</span> và <span>4000 cây dứa</span> cho mỗi
                            suất đầu tư</p>
                    </div>
                    <div class="c-row__col">
                        <div class="u-center">
                            <svg fill="none" height="45" viewBox="0 0 44 45" width="44"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_731_1551)">
                                    <path
                                        d="M4.39612 20.9895C2.94585 20.8504 1.53767 20.7114 0 20.6187C0.906416 13.0168 4.35079 7.12677 10.741 3.23647C17.3579 -0.796198 24.2466 -0.935255 31.3199 2.12401C30.6854 3.51459 30.0509 4.8555 29.4585 6.20303C17.5853 0.687083 5.16657 9.49406 4.39612 20.9895ZM39.3838 19.4168C40.1542 24.6546 39.1118 29.4323 35.9394 33.5543C32.8122 37.6797 28.6427 39.951 23.5215 40.5072C23.6574 41.9905 23.7481 43.4274 23.884 44.8643C34.5798 44.4902 46.0491 33.5047 43.6892 18.5791C42.2843 18.9036 40.8793 19.1354 39.3838 19.4135V19.4168ZM4.35079 24.1415C2.99117 24.2805 1.58623 24.3732 0.135962 24.5123C0.453208 33.6884 8.2937 44.0267 20.0771 45.0001C20.2131 43.5168 20.349 42.0799 20.4397 40.6429C11.2396 39.0686 5.8917 33.5974 4.35079 24.1415ZM35.9847 11.5336C37.0724 12.9705 37.9335 14.5961 38.6133 16.3542C39.9729 15.8444 41.3325 15.3345 42.7407 14.8246C41.1092 10.3748 38.4353 6.85197 34.6736 4.07082C33.8093 5.27598 32.9935 6.48115 32.1292 7.73266C33.5859 8.84512 34.897 10.0983 35.9847 11.5336Z"
                                        fill="#63A940" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_731_1551">
                                        <rect fill="white" height="45" width="44" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <p class="c-desc">Cam kết thu nhập thụ động lên đến <span>50 +++ triệu/năm/suất đầu tư</span></p>
                    </div>
                    <div class="c-row__col">
                        <div class="u-center">
                            <svg fill="none" height="43" viewBox="0 0 43 43" width="43"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.4231 0H24.5641V13.7995H18.4231V0Z" fill="#63A940" />
                                <path clip-rule="evenodd"
                                    d="M39.3547 1.63352C38.8401 1.11652 38.2286 0.706113 37.5552 0.425806C36.8818 0.1455 36.1597 0.000801722 35.4302 0L27.0713 0V12.5166C27.0711 13.2568 26.7769 13.9666 26.2534 14.49C25.7299 15.0133 25.02 15.3073 24.2798 15.3073H18.7085C18.3415 15.309 17.9779 15.2379 17.6385 15.0982C17.2992 14.9586 16.9909 14.7531 16.7314 14.4936C16.4719 14.2342 16.2664 13.9258 16.1268 13.5865C15.9871 13.2472 15.9161 12.8835 15.9177 12.5166V0H7.56975C6.09262 0.000207734 4.67606 0.587074 3.63157 1.63154C2.58709 2.676 2.00021 4.09254 2 5.56964V33.4178C1.99979 34.8962 2.58613 36.3143 3.63035 37.3608C4.67457 38.4074 6.09134 38.9969 7.56975 39H35.4302C36.9066 38.9901 38.3194 38.3984 39.3622 37.3533C40.4049 36.3083 40.9934 34.8941 41 33.4178V5.56964C40.9977 4.83764 40.8513 4.11326 40.569 3.43788C40.2867 2.76251 39.8741 2.14938 39.3547 1.63352ZM36.1244 34.1245C34.8328 35.4214 33.08 36.1538 31.2496 36.1615H24.2908V33.4194H31.2496C31.8034 33.427 32.3531 33.3245 32.867 33.1178C33.3808 32.9111 33.8484 32.6044 34.2427 32.2155C34.637 31.8266 34.9501 31.3632 35.1637 30.8523C35.3774 30.3413 35.4875 29.793 35.4875 29.2392C35.4875 28.6854 35.3774 28.1371 35.1637 27.6262C34.9501 27.1153 34.637 26.6519 34.2427 26.263C33.8484 25.874 33.3808 25.5673 32.867 25.3607C32.3531 25.154 31.8034 25.0515 31.2496 25.0591H27.5931L29.4335 26.814L27.4748 28.8377L23.2942 24.6571C23.0348 24.3964 22.8892 24.0436 22.8892 23.6759C22.8892 23.3081 23.0348 22.9553 23.2942 22.6946L27.4748 18.5148L29.4335 20.4735L27.5931 22.266H31.2496C33.0974 22.2729 34.8673 23.0116 36.1716 24.3206C37.4758 25.6295 38.2083 27.402 38.2085 29.2498C38.2004 30.1597 38.012 31.059 37.6543 31.8957C37.2966 32.7324 36.7766 33.49 36.1244 34.1245Z"
                                    fill-rule="evenodd" fill="#63A940" />
                            </svg>
                        </div>
                        <p class="c-desc">Aking Village CAM KẾT MUA LẠI suất đầu tư ngay từ năm thứ 2, giá trị lên đến
                            <span>50% sau năm thứ 5</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home5">
        <div class="l-container">
            <h2 class="c-title2">
                <span>ƯU ĐÃI HẤP DẪN</span>
                TẶNG VOUCHER 100 TRIỆU ĐỒNG
                <span>CÁC KHÓA ĐÀO TẠO CHUYÊN SÂU DO AKING TỔ CHỨC</span>
            </h2>
            <a class="c-btn1 u-btn" href="/">Tìm hiểu thêm</a>
        </div>
    </section>

    <section class="home6">
        <div class="l-container">
            <!-- Title cho mobile -->
            <div class="home6__title only-sp">
                <h2 class="c-title2">
                    5 LÝ DO LỰA CHỌN ĐẦU TƯ <br> TẠI <span>AKING VILLAGE</span>
                </h2>
            </div>

            <!-- Main content -->
            <div class="c-row js-slider3 js-slider3-3">
                <!-- Title cho desktop -->
                <div class="c-row__col only-pc">
                    <div class="c-content u-border">
                        <div class="c-content__inner">
                            <h3>5</h3>
                            <h2>LÝ DO LỰA CHỌN <br> ĐẦU TƯ TẠI <br> AKING VILLAGE</h2>
                        </div>
                    </div>
                </div>

                <!-- Card 1 -->
                <div class="c-row__col">
                    <div class="c-content u-boxshadow">
                        <span class="c-number">1</span>
                        <img alt="Giải pháp đầu tư" src="assets/images/home6-1.svg">
                        <p class="custom">Cam kết mua lại đất giá trị tăng trưởng trung bình 20%/ năm + Thu nhập thụ động
                            từ Farm 50 triệu +++/năm hoặc hơn theo đà tăng trưởng mạnh mẽ của mô hình BĐS nông nghiệp</p>
                        <p class="only-sp d-none">Cam kết mua lại đất giá trị tăng trưởng</p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="c-row__col">
                    <div class="c-content u-boxshadow">
                        <span class="c-number">2</span>
                        <img alt="Giải pháp đầu tư" src="assets/images/home6-2.svg">
                        <p class="custom">Đầu tư thật, sản phẩm thật với quy trình pháp lý minh bạch rõ ràng theo quy định
                            của pháp luật</p>
                        <p class="only-sp d-none">Đầu tư thật, sản phẩm thật</p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="c-row__col">
                    <div class="c-content u-boxshadow">
                        <span class="c-number">3</span>
                        <img alt="Giải pháp đầu tư" src="assets/images/home6-3.svg">
                        <p class="custom">Quỹ đất đẹp, số lượng giới hạn</p>
                        <p class="only-sp d-none">Quỹ đất đẹp, số lượng giới hạn</p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="c-row__col">
                    <div class="c-content u-boxshadow">
                        <span class="c-number">4</span>
                        <img alt="Giải pháp đầu tư" src="assets/images/home6-4.svg">
                        <p class="custom">Hỗ trợ chiến lược đầu tư từ các chuyên gia đầu ngành nông nghiệp và tài chính</p>
                        <p class="only-sp d-none">Hỗ trợ chiến lược đầu tư</p>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="c-row__col">
                    <div class="c-content u-boxshadow">
                        <span class="c-number">5</span>
                        <img alt="Giải pháp đầu tư" src="assets/images/home6-5.svg">
                        <p class="custom">Cơ hội tham gia cộng đồng những nhà đầu tư nông nghiệp uy tín, vững mạnh, hỗ trợ
                            nhau cùng phát triển bền vững, góp phần phát triển mô hình nông trại sinh thái xanh - sạch trên
                            cả nước.</p>
                        <p class="only-sp d-none">Cơ hội tham gia cộng đồng</p>
                    </div>
                </div>
            </div>

            <!-- Bottom section -->
            <div class="home6__bottom">
                <h3 class="c-title2">
                    HÃY LÀ <span>150 NGƯỜI</span> THAM GIA CÙNG CHÚNG TÔI. CỘNG ĐỒNG ĐẦU TƯ GIỚI HẠN VÀ CÙNG HỆ GIÁ TRỊ
                </h3>
                <a class="c-btn2 u-btn" href="/">Chớp thời cơ ngay</a>
            </div>
        </div>
    </section>

    <section class="home7">
        <div class="l-container">
            <div class="home7__inner">
                <!-- Title -->
                <h2 class="c-title2">TRỞ THÀNH ĐỐI TÁC CHIẾN LƯỢC CỦA</h2>
                <h3 class="c-title1">AKING VILLAGE</h3>

                <!-- Form -->
                <form action="" class="c-form" id="strategicPartnershipForm" method="POST">
                    <!-- Hidden token -->
                    <input name="_token" type="hidden" value="">

                    <!-- Gender & Name group -->
                    <div class="c-form__group">
                        <div class="w-50 input-wrapper">
                            <select class="c-form__input u--select" name="gender" required>
                                <option disabled selected value="">Anh / Chị</option>
                                <option value="Anh">Anh</option>
                                <option value="Chị">Chị</option>
                            </select>
                        </div>
                        <div class="w-50 input-wrapper">
                            <input class="c-form__input" name="name" placeholder="Họ và tên" type="text">
                        </div>
                    </div>

                    <!-- Phone & Email group -->
                    <div class="c-form__group">
                        <div class="w-50 input-wrapper">
                            <input class="c-form__input" name="phone" placeholder="Số điện thoại" type="number">
                        </div>
                        <div class="w-50 input-wrapper">
                            <input class="c-form__input" name="email" placeholder="Email" type="email">
                        </div>
                    </div>

                    <!-- Comment group -->
                    <div class="c-form__group">
                        <textarea class="c-form__input u--textarea" cols="30" name="content" placeholder="Ý kiến của quý khách"
                            rows="7"></textarea>
                    </div>

                    <!-- Submit button -->
                    <button class="c-btn2 u-btn" type="submit">Gửi thông tin</button>
                </form>

            </div>
        </div>
    </section>
@endsection
