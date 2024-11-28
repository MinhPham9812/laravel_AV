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
@endsection