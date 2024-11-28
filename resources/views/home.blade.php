@extends('layouts.master')

@section('title', 'Trang Chủ')

@section('home')
<x-slider class="slider--home" tag="h2">
    @slot('title')
        MÔ HÌNH ĐẦU TƯ & KHAI THÁC BẤT ĐỘNG SẢN NÔNG NGHIỆP
    @endslot
    <h3 class="slider__subtitle">
        Dẫn đầu xu hướng phát triển BĐS Nông nghiệp mới tại Việt Nam
    </h3>
</x-slider>

<section class="home1">
    <div class="l-container">
        <div class="c-row">
            <!-- Cột hình ảnh -->
            <div class="c-row__col home1__image">
                <img src="assets/images/homeBanner1.png" alt="Mô hình đầu tư">
            </div>

            <!-- Cột nội dung với Swiper -->
            <div class="c-row__col home1__content">
                <div class="swiper-base">
                    <div class="swiper-wrapper">
                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="home1__slide">
                                <h2 class="c-title1">AKING VILLAGE</h2>
                                <h3 class="c-title2">MÔ HÌNH ĐẦU TƯ VÀ KHAI THÁC <br> BĐS NÔNG NGHIỆP CẢI TIẾN & AN TOÀN</h3>
                                <p>Lấy nông nghiệp xanh và vùng trồng làm giá trị cốt lỗi, phát triển BĐS nông nghiệp từ đó khai thác nông sản kết hợp mô hình du lịch làng sinh thái và F&amp;B, Aking Village hướng đến phát triển “Mô hình đầu tư Bất động sản Nông nghiệp và Nông sản” hiện đại mang lại giá trị bền vững, cơ chế đầu tư hoàn thiện cho nhà đầu tư, không những vậy còn tạo sinh kế cho người dân địa phương.</p>
                                <a href="/" class="c-btn3 u-btnblue only-pc">
                                    Tìm hiểu thêm 
                                    <svg width="47" height="46" viewBox="0 0 47 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path class="u-btnblue__icon" d="M45.524 23C45.524 35.4262 35.4453 45.5 23.012 45.5C10.5787 45.5 0.5 35.4262 0.5 23C0.5 10.5738 10.5787 0.5 23.012 0.5C35.4453 0.5 45.524 10.5738 45.524 23Z" stroke="#EEEBE2"/>
                                        <path class="u-btnblue__icon" d="M28.6795 22.3352C29.0467 22.7024 29.0467 23.2976 28.6795 23.6648L22.6963 29.648C22.3291 30.0152 21.7339 30.0152 21.3667 29.648C20.9995 29.2809 20.9995 28.6856 21.3667 28.3184L26.6851 23L21.3667 17.6816C20.9995 17.3144 20.9995 16.7191 21.3667 16.352C21.7339 15.9848 22.3291 15.9848 22.6963 16.352L28.6795 22.3352ZM18.0095 22.0598L28.0147 22.0598V23.9402L18.0095 23.9402V22.0598Z" fill="#EEEBE2"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        
                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div class="home1__slide">
                                <h2 class="c-title1">AKING VILLAGE2</h2>
                                <h3 class="c-title2">MÔ HÌNH ĐẦU TƯ VÀ KHAI THÁC <br> BĐS NÔNG NGHIỆP CẢI TIẾN & AN TOÀN</h3>
                                <p>Lấy nông nghiệp xanh và vùng trồng làm giá trị cốt lỗi, phát triển BĐS nông nghiệp từ đó khai thác nông sản kết hợp mô hình du lịch làng sinh thái và F&amp;B, Aking Village hướng đến phát triển “Mô hình đầu tư Bất động sản Nông nghiệp và Nông sản” hiện đại mang lại giá trị bền vững, cơ chế đầu tư hoàn thiện cho nhà đầu tư, không những vậy còn tạo sinh kế cho người dân địa phương.</p>
                                <a href="/" class="c-btn3 u-btnblue only-pc">
                                    Tìm hiểu thêm 
                                    <svg width="47" height="46" viewBox="0 0 47 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path class="u-btnblue__icon" d="M45.524 23C45.524 35.4262 35.4453 45.5 23.012 45.5C10.5787 45.5 0.5 35.4262 0.5 23C0.5 10.5738 10.5787 0.5 23.012 0.5C35.4453 0.5 45.524 10.5738 45.524 23Z" stroke="#EEEBE2"/>
                                        <path class="u-btnblue__icon" d="M28.6795 22.3352C29.0467 22.7024 29.0467 23.2976 28.6795 23.6648L22.6963 29.648C22.3291 30.0152 21.7339 30.0152 21.3667 29.648C20.9995 29.2809 20.9995 28.6856 21.3667 28.3184L26.6851 23L21.3667 17.6816C20.9995 17.3144 20.9995 16.7191 21.3667 16.352C21.7339 15.9848 22.3291 15.9848 22.6963 16.352L28.6795 22.3352ZM18.0095 22.0598L28.0147 22.0598V23.9402L18.0095 23.9402V22.0598Z" fill="#EEEBE2"/>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <div class="home1__slide">
                                <h2 class="c-title1">AKING VILLAGE3</h2>
                                <h3 class="c-title2">MÔ HÌNH ĐẦU TƯ VÀ KHAI THÁC <br> BĐS NÔNG NGHIỆP CẢI TIẾN & AN TOÀN</h3>
                                <p>Lấy nông nghiệp xanh và vùng trồng làm giá trị cốt lỗi, phát triển BĐS nông nghiệp từ đó khai thác nông sản kết hợp mô hình du lịch làng sinh thái và F&amp;B, Aking Village hướng đến phát triển “Mô hình đầu tư Bất động sản Nông nghiệp và Nông sản” hiện đại mang lại giá trị bền vững, cơ chế đầu tư hoàn thiện cho nhà đầu tư, không những vậy còn tạo sinh kế cho người dân địa phương.</p>
                                <a href="/" class="c-btn3 u-btnblue only-pc">
                                    Tìm hiểu thêm 
                                    <svg width="47" height="46" viewBox="0 0 47 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path class="u-btnblue__icon" d="M45.524 23C45.524 35.4262 35.4453 45.5 23.012 45.5C10.5787 45.5 0.5 35.4262 0.5 23C0.5 10.5738 10.5787 0.5 23.012 0.5C35.4453 0.5 45.524 10.5738 45.524 23Z" stroke="#EEEBE2"/>
                                        <path class="u-btnblue__icon" d="M28.6795 22.3352C29.0467 22.7024 29.0467 23.2976 28.6795 23.6648L22.6963 29.648C22.3291 30.0152 21.7339 30.0152 21.3667 29.648C20.9995 29.2809 20.9995 28.6856 21.3667 28.3184L26.6851 23L21.3667 17.6816C20.9995 17.3144 20.9995 16.7191 21.3667 16.352C21.7339 15.9848 22.3291 15.9848 22.6963 16.352L28.6795 22.3352ZM18.0095 22.0598L28.0147 22.0598V23.9402L18.0095 23.9402V22.0598Z" fill="#EEEBE2"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <!-- Mobile button -->
            {{-- <a href="/" class="c-btn2 u-btn only-sp">Tìm hiểu thêm</a> --}}
        </div>
    </div>
</section>

<section class="home2">
    <div class="l-container">
        <div class="c-row">
            <!-- Cột tiêu đề bên trái -->
            <div class="c-row__col home2__content">
                <h2 class="c-title1">5 GIÁ TRỊ AKING VILLAGE MANG LẠI CHO CỘNG ĐỒNG</h2>
                <p>Lướt qua để khám phá</p>
                
                <!-- Navigation buttons -->
                <div class="js-showarrow">
                    <button type="button" class="button-slider prev-slide">
                        <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9999 4.9999C13.9999 4.86729 13.9472 4.74011 13.8535 4.64635C13.7597 4.55258 13.6325 4.4999 13.4999 4.4999H1.70692L4.85392 1.3539C4.9004 1.30741 4.93728 1.25222 4.96244 1.19148C4.9876 1.13074 5.00055 1.06564 5.00055 0.999899C5.00055 0.934155 4.9876 0.869055 4.96244 0.808316C4.93728 0.747576 4.9004 0.692387 4.85392 0.645899C4.80743 0.599411 4.75224 0.562535 4.6915 0.537376C4.63076 0.512217 4.56566 0.499268 4.49992 0.499268C4.43417 0.499268 4.36907 0.512217 4.30833 0.537376C4.24759 0.562535 4.1924 0.599411 4.14592 0.645899L0.145917 4.6459C0.099354 4.69234 0.0624111 4.74752 0.0372047 4.80827C0.0119982 4.86901 -0.000976563 4.93413 -0.000976562 4.9999C-0.000976563 5.06567 0.0119982 5.13079 0.0372047 5.19153C0.0624111 5.25228 0.099354 5.30745 0.145917 5.3539L4.14592 9.3539C4.1924 9.40039 4.24759 9.43726 4.30833 9.46242C4.36907 9.48758 4.43417 9.50053 4.49992 9.50053C4.56566 9.50053 4.63076 9.48758 4.6915 9.46242C4.75224 9.43726 4.80743 9.40039 4.85392 9.3539C4.9004 9.30741 4.93728 9.25222 4.96244 9.19148C4.9876 9.13074 5.00055 9.06564 5.00055 8.9999C5.00055 8.93416 4.9876 8.86905 4.96244 8.80832C4.93728 8.74758 4.9004 8.69239 4.85392 8.6459L1.70692 5.4999H13.4999C13.6325 5.4999 13.7597 5.44722 13.8535 5.35345C13.9472 5.25968 13.9999 5.13251 13.9999 4.9999Z" fill="#63A940"/>
                        </svg>
                    </button>
                    <svg width="20" height="33" viewBox="0 0 20 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 32.7697C7.34784 32.7697 4.8043 31.6922 2.92893 29.7744C1.05357 27.8566 0 25.2555 0 22.5433V10.2716C0 7.55936 1.05357 4.95823 2.92893 3.04041C4.8043 1.12259 7.34784 0.045166 10 0.045166C12.6522 0.045166 15.1957 1.12259 17.0711 3.04041C18.9464 4.95823 20 7.55936 20 10.2716V22.5433C20 23.8862 19.7413 25.216 19.2388 26.4567C18.7362 27.6975 17.9997 28.8248 17.0711 29.7744C16.1425 30.724 15.0401 31.4773 13.8268 31.9912C12.6136 32.5051 11.3132 32.7697 10 32.7697ZM10 2.09045C7.87827 2.09045 5.84344 2.95238 4.34315 4.48664C2.84285 6.0209 2 8.1018 2 10.2716V22.5433C2 24.713 2.84285 26.7939 4.34315 28.3282C5.84344 29.8624 7.87827 30.7244 10 30.7244C12.1217 30.7244 14.1566 29.8624 15.6569 28.3282C17.1571 26.7939 18 24.713 18 22.5433V10.2716C18 8.1018 17.1571 6.0209 15.6569 4.48664C14.1566 2.95238 12.1217 2.09045 10 2.09045Z"
                            fill="#63A940" />
                        <path
                            d="M10 13.3397C9.73478 13.3397 9.48043 13.232 9.29289 13.0402C9.10536 12.8484 9 12.5883 9 12.3171V8.2265C9 7.95528 9.10536 7.69516 9.29289 7.50338C9.48043 7.3116 9.73478 7.20386 10 7.20386C10.2652 7.20386 10.5196 7.3116 10.7071 7.50338C10.8946 7.69516 11 7.95528 11 8.2265V12.3171C11 12.5883 10.8946 12.8484 10.7071 13.0402C10.5196 13.232 10.2652 13.3397 10 13.3397Z"
                            fill="#63A940" />
                    </svg>
                    <button type="button" class="button-slider next-slide">
                        <svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.29697e-05 4.9999C8.29697e-05 4.86729 0.052761 4.74011 0.146529 4.64635C0.240297 4.55258 0.367475 4.4999 0.500083 4.4999H12.2931L9.14608 1.3539C9.09959 1.30741 9.06272 1.25222 9.03756 1.19148C9.0124 1.13074 8.99945 1.06564 8.99945 0.999899C8.99945 0.934155 9.0124 0.869055 9.03756 0.808316C9.06272 0.747576 9.09959 0.692387 9.14608 0.645899C9.19257 0.599411 9.24776 0.562535 9.3085 0.537376C9.36924 0.512217 9.43434 0.499268 9.50008 0.499268C9.56583 0.499268 9.63093 0.512217 9.69167 0.537376C9.75241 0.562535 9.8076 0.599411 9.85408 0.645899L13.8541 4.6459C13.9006 4.69234 13.9376 4.74752 13.9628 4.80827C13.988 4.86901 14.001 4.93413 14.001 4.9999C14.001 5.06567 13.988 5.13079 13.9628 5.19153C13.9376 5.25228 13.9006 5.30745 13.8541 5.3539L9.85408 9.3539C9.8076 9.40039 9.75241 9.43726 9.69167 9.46242C9.63093 9.48758 9.56583 9.50053 9.50008 9.50053C9.43434 9.50053 9.36924 9.48758 9.3085 9.46242C9.24776 9.43726 9.19257 9.40039 9.14608 9.3539C9.09959 9.30741 9.06272 9.25222 9.03756 9.19148C9.0124 9.13074 8.99945 9.06564 8.99945 8.9999C8.99945 8.93416 9.0124 8.86905 9.03756 8.80832C9.06272 8.74758 9.09959 8.69239 9.14608 8.6459L12.2931 5.4999H0.500083C0.367475 5.4999 0.240297 5.44722 0.146529 5.35345C0.052761 5.25968 8.29697e-05 5.13251 8.29697e-05 4.9999Z" fill="#63A940"/>
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
                                <img src="assets/images/homeBanner2.png" class="u-img home2__image" alt="Gia tăng hiệu suất vùng trồng">
                                <div class="home2__title">Gia tăng hiệu suất <br> vùng trồng</div>
                                <p class="home2__text">Tạo ra lợi nhuận kép an toàn và dài hạn với giải pháp khai thác đất và sản xuất nông nghiệp mang lại giá trị kinh tế cao cho nhà đầu tư, cũng như góp phần phát triển mô hình nông trại sinh thái trên cả nước</p>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div class="home2__slide">
                                <img src="assets/images/homeBanner2.png" class="u-img" alt="Gia tăng hiệu suất vùng trồng">
                                <div class="home2__title">Gia tăng hiệu suất <br> vùng trồng</div>
                                <p class="home2__text">Tạo ra lợi nhuận kép an toàn và dài hạn với giải pháp khai thác đất và sản xuất nông nghiệp mang lại giá trị kinh tế cao cho nhà đầu tư, cũng như góp phần phát triển mô hình nông trại sinh thái trên cả nước</p>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <div class="home2__slide">
                                <img src="assets/images/homeBanner2.png" class="u-img" alt="Gia tăng hiệu suất vùng trồng">
                                <div class="home2__title">Gia tăng hiệu suất <br> vùng trồng</div>
                                <p class="home2__text">Tạo ra lợi nhuận kép an toàn và dài hạn với giải pháp khai thác đất và sản xuất nông nghiệp mang lại giá trị kinh tế cao cho nhà đầu tư, cũng như góp phần phát triển mô hình nông trại sinh thái trên cả nước</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection