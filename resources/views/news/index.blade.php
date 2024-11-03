@extends('layouts.tab_news')

@section('title', 'Tin Tức')
<!-- Content -->
@section('tin-aking')
<div id="news" class="news">
    <div class="news__container">
        <!-- Large news item -->
        
            <a class="news__large-item" href="{{ url('/news-detail') }}">
                <div class="news__overlay">
                    <p class="news__date">11/5/2022</p>
                    <h2 class="news__title">AKING VILLAGE KHẲNG ĐỊNH UY TÍN TỪ NHỮNG DỰ ÁN BÀN GIAO ĐÚNG TIẾN ĐỘ</h2>
                    <p class="news__desc">20 năm thực hiện tôn chỉ “Nơi đặt niềm tin, Nơi xây tổ ấm”, hoạt động kinh doanh dựa trên nền tảng giá trị cốt lõi: pháp lý vững chắc, thông tin minh bạch, sản phẩm chất lượng và dịch vụ tận tâm, AKING VILLAGE đang khẳng định tầm vóc của một thương hiệu Việt...</p>
                </div>
            </a>
        
            
        <!-- Small news items -->
            <div class="news__small-grid">
                <div class="news__small-item">
                    <a href="{{ url('/news-detail') }}">
                        <img src="assets/images/Rectangle2.svg" alt="news image">
                    </a>
                        <div class="news__overlay">
                        <p class="news__date">11/5/2022</p>
                        <h2 class="news__desc-t">NGÀY 11.5.2022: AKING VILLAGE TỔ CHỨC SỰ KIỆN TRI ÂN KHÁCH HÀNG</h2>
                        </div>
                </div>
                <div class="news__small-item">
                    <a href="{{ url('/news-detail') }}">
                        <img src="assets/images/Rectangle3.svg" alt="news image">
                    </a>
                        <div class="news__overlay">
                        <p class="news__date">11/5/2022</p>
                        <h2 class="news__desc-t">NGÀY 11.5.2022: AKING VILLAGE TỔ CHỨC SỰ KIỆN TRI ÂN KHÁCH HÀNG</h2>
                        </div>
                </div>
                <div class="news__small-item">
                    <a href="{{ url('/news-detail') }}">
                        <img src="assets/images/Rectangle4.svg" alt="news image">
                    </a>
                        <div class="news__overlay">
                        <p class="news__date">11/5/2022</p>
                        <h2 class="news__desc-t">NGÀY 11.5.2022: AKING VILLAGE TỔ CHỨC SỰ KIỆN TRI ÂN KHÁCH HÀNG</h2>
                        </div>
                </div>
                <div class="news__small-item">
                    <a href="{{ url('/news-detail') }}">
                        <img src="assets/images/Rectangle5.svg" alt="news image">
                    </a>
                        <div class="news__overlay">
                        <p class="news__date">11/5/2022</p>
                        <h2 class="news__desc-t">NGÀY 11.5.2022: AKING VILLAGE TỔ CHỨC SỰ KIỆN TRI ÂN KHÁCH HÀNG</h2>
                        </div>
                </div>
            </div>
    </div>
</div>
@endsection

