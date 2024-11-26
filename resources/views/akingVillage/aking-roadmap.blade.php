@extends('layouts.tab_aking')

@section('title', 'Roadmap')

@section('aking-roadmap')
<div class="roadmap">
    <section class="roadmap__layout">
        <div class="l-container">
            <div class="roadmap__title">
                <h2 class="c-title1">AKING VILLAGE</h2>
                <h3 class="c-title2">MÔ HÌNH ĐẦU TƯ & KHAI THÁC BẤT ĐỘNG SẢN NÔNG NGHIỆP</h3>
            </div>

            <div class="roadmap__inner">
                <div class="roadmap__route">
                    <!-- Phase 1 -->
                    <div class="c-route__list is-active">
                        <span class="c-dotitem"></span>
                        <p class="u-gd c-desc">Giai đoạn 1</p>
                        <p class="c-title2 u-gd1">
                            <span class="c-desc">ĐẦU TƯ</span>
                            <br>NÔNG TRẠI
                        </p>
                    </div>
            
                    
                    <div class="c-route__list is-active">
                        <span class="c-dotitem"></span>
                        <p class="c-title2 u-gd1--1">
                            <span class="c-desc">ĐẦU TƯ</span>
                            <br>ĐẤT
                        </p>
                    </div>
            
                    <!-- Phase 2 -->
                    <div class="c-route__list">
                        <span class="c-dotitem"></span>
                        <p class="u-gd u-gd2 c-desc">Giai đoạn 2</p>
                        <p class="c-title2">
                            <span class="c-desc">VẬN HÀNH</span>
                            <br>HOMESTAY
                        </p>
                    </div>
            
                    <!-- Phase 3 -->
                    <div class="c-route__list">
                        <span class="c-dotitem"></span>
                        <p class="c-title2 u-gd2">
                            <span class="c-desc">VẬN HÀNH</span>
                            <br>F&B
                        </p>
                        <div class="c-route__list--gd3">
                            <p class="u-gd c-desc">Giai đoạn 3</p>
                            <span class="c-dotitem u-gd3"></span>
                            <p class="c-title2 u-gd3">
                                <span class="c-desc">VẬN HÀNH</span>
                                <br>DU LỊCH
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <p class="c-desc mr-auto">
                Mô hình nông trại sinh thái Aking Village và hệ sinh thái xung quanh trong việc phát triển du lịch sinh thái, nông nghiệp với giá trị cộng thêm cao từng phần đất tại Vĩnh Long được phát triển với nhiều BĐS nông nghiệp đã gắn kết hợp điểm thức năng tại suối - ngoài dưới rẫy du lịch làng sinh thái, homestay và F&B tại các điểm sáng BĐS nông nghiệp của Vĩnh Long, Bình Phước...
            </p>
            
        </div>
    </section>

    <div class="l-container">
        <div class="roadmap-tabs">
            <!-- Tab links -->
            <ul class="roadmap-tabs__list" id="js-showtab">
                <li class="roadmap-tabs__item is-active">
                    <a href="#tab1">Dự án đang triển khai</a>
                </li>
                <li class="roadmap-tabs__item">
                    <a href="#tab2">Dự án sắp triển khai</a>
                </li>
            </ul>
        </div>    
            <!-- Tab content -->
            <div class="roadmap-tabs__content">
                <!-- Tab 1 -->
                <div class="roadmap-tabs__pane is-active" id="tab1">
                        <img src="assets/images/shutterstock_555184306.svg" alt="Làng Dứa Vĩnh Long">
                        <div class="roadmap-tabs__text">
                            <h3 class="c-title1">LÀNG DỨA VĨNH LONG</h3>  
                            <h4 class="c-title2">
                                QUY MÔ: <span>10 HA</span><br>
                                VỐN ĐẦU TƯ: ...
                            </h4>
                        </div>
                </div>
    
                <!-- Tab 2 -->
                <div class="roadmap-tabs__pane" id="tab2">
                        <img src="assets/images/shutterstock_555184306.svg" alt="Làng Dứa Vĩnh Long">
                        <div class="roadmap-tabs__text">
                            <h3 class="c-title1">LÀNG DỨA VĨNH LONG</h3>
                            <h4 class="c-title2">
                                QUY MÔ: <span>100 HA</span><br>
                                VỐN ĐẦU TƯ: ...
                            </h4>
                        </div>
                </div>
            </div>
    </div>
</div>  
@endsection

