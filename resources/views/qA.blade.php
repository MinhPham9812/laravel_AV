@extends('layouts.master')

@section('title', 'Q&A')

@section('q-a')
    <x-breadcrumb class="breadcrumb--qA">
        @slot('title')
            BẠN HỎI - AKING ĐÁP
        @endslot
    </x-breadcrumb>

<section class="question1">
    <div class="answerQuestion">
        <h2 class="c-title1">Q<span>&</span>A</h2>

        <!-- Thêm class .swiper-base để kích hoạt style pagination từ swiper_base.css -->
        <div class="swiper-base">
            
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide answerQuestion__inner">
                        <div class="c-content">
                            <p class="c-desc">
                                <span>Câu hỏi: </span> Làm thế nào để doanh nghiệp có thể cạnh tranh với thị trường trong nước và lợi thế nào khi xuất khẩu sản phẩm ra thị trường thế giới? Hãy phân tích cả 2.
                            </p>
                            <p class="c-desc">
                                <span>Trả lời: </span> Khởi đầu của tiến trình hội nhập quốc tế để chuyển từ một nền kinh tế đóng sang một nền kinh tế mở với phương châm “Việt Nam muốn làm bạn với tất cả các nước trong cộng đồng quốc tế, phấn đấu vì hòa bình, độc lập và phát triển”, sau hơn 35 năm đổi mới, từ chủ trương hội nhập kinh tế quốc tế đã phát triển thành “chủ động, tích cực hội nhập và nâng cao hiệu quả hợp tác quốc tế”. Từ chỗ bị bao vây, cấm vận, đến năm 2020, Việt Nam đã thiết lập quan hệ hợp tác kinh tế, thương mại, đầu tư với hơn 230 quốc gia và vùng lãnh thổ; ký kết hơn 90 hiệp định thương mại song phương; 12 hiệp định thương mại đa phương; gần 60 hiệp định khuyến khích và bảo hộ đầu tư; 54 hiệp định chống đánh thuế hai lần. Tính đến tháng 12-2021, có 17 hiệp định thương mại tự do (FT)
                            </p>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide answerQuestion__inner">
                        <div class="c-content">
                            <p class="c-desc">
                                <span>Câu hỏi: </span> Làm thế nào để doanh nghiệp có thể cạnh tranh với thị trường trong nước và lợi thế nào khi xuất khẩu sản phẩm ra thị trường thế giới? Hãy phân tích cả 2.
                            </p>
                            <p class="c-desc">
                                <span>Trả lời: </span> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam asperiores necessitatibus, at maxime consequuntur, minus animi optio eligendi facere enim assumenda, unde nemo impedit veritatis aliquid. Accusantium eaque cum voluptatem.
                            </p>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="swiper-slide answerQuestion__inner">
                        <div class="c-content">
                            <p class="c-desc">
                                <span>Câu hỏi: </span> Làm thế nào để doanh nghiệp có thể cạnh tranh với thị trường trong nước và lợi thế nào khi xuất khẩu sản phẩm ra thị trường thế giới? Hãy phân tích cả 2.
                            </p>
                            <p class="c-desc">
                                <span>Trả lời: </span> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam asperiores necessitatibus, at maxime consequuntur, minus animi optio eligendi facere enim assumenda, unde nemo impedit veritatis aliquid. Accusantium eaque cum voluptatem.
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide answerQuestion__inner">
                        <div class="c-content">
                            <p class="c-desc">
                                <span>Câu hỏi: </span> Làm thế nào để doanh nghiệp có thể cạnh tranh với thị trường trong nước và lợi thế nào khi xuất khẩu sản phẩm ra thị trường thế giới? Hãy phân tích cả 2.
                            </p>
                            <p class="c-desc">
                                <span>Trả lời: </span> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam asperiores necessitatibus, at maxime consequuntur, minus animi optio eligendi facere enim assumenda, unde nemo impedit veritatis aliquid. Accusantium eaque cum voluptatem.
                            </p>
                        </div>
                    </div>

                    <div class="swiper-slide answerQuestion__inner">
                        <div class="c-content">
                            <p class="c-desc">
                                <span>Câu hỏi: </span> Làm thế nào để doanh nghiệp có thể cạnh tranh với thị trường trong nước và lợi thế nào khi xuất khẩu sản phẩm ra thị trường thế giới? Hãy phân tích cả 2.
                            </p>
                            <p class="c-desc">
                                <span>Trả lời: </span> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam asperiores necessitatibus, at maxime consequuntur, minus animi optio eligendi facere enim assumenda, unde nemo impedit veritatis aliquid. Accusantium eaque cum voluptatem.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            
        </div>
    </div>
</section>
@endsection
