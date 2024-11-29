@extends('layouts.tab_aking')

@section('title', 'Mô Hình Aking Village')

@section('aking-general')
<div class="model">
    <div class="model__intro">
        <div class="l-container">
            <div class="model__wrapper">
                <!-- Left content -->
                <div class="model__content">
                    <h2 class="model__title">AKING VILLAGE</h2>
                    <h3 class="model__subtitle">LÀNG NÔNG NGHIỆP HẠNH PHÚC</h3>
                    <p class="model__desc">Chúng tôi mong muốn xây dựng một ngôi làng mà tại đó, tất cả mọi người:</p>
                    
                    <!-- Bullet points -->
                    <ul class="model__list">
                        <li class="model__item">
                            <div class="model__bullet"></div>
                            <p>Cùng chung sở thích về phát triển triển nông nghiệp thuần tự nhiên</p>
                        </li>
                        <li class="model__item">
                            <div class="model__bullet"></div>
                            <p>Cùng chung phong cách sống, phong cách đầu tư, phong cách phát triển bản thân</p>
                        </li>
                        <li class="model__item">
                            <div class="model__bullet"></div>
                            <p>Cùng chung lý tưởng phát triển lợi ích cộng đồng</p>
                        </li>
                        <li class="model__item">
                            <div class="model__bullet"></div>
                            <p>Nơi mọi người cùng chung tay xây dựng một ngôi làng vững mạnh và cùng chia sẻ những nụ cười hạnh phúc.</p>
                        </li>
                    </ul>
                </div>

                <!-- Right image -->
                <div class="model__image">
                    <img src="assets/images/banner1.svg" alt="Aking Village Farm">
                </div>
            </div>
        </div>
    </div>

        <!-- Quote section -->
        <div class="model__quote">
            <div class="l-container">
                <div class="quote-wrapper">
                <h2 class="quote__title">
                    Muốn đi nhanh thì đi một mình, muốn đi xa thì đi cùng nhau</h2>
                </div>
            </div>
        </div>

    
    <div class="model__intro-second">
        <div class="l-container">
            <div class="model__wrapper">
                <!-- Left image with swiper -->
                <div class="model__image">
                    <div class="swiper swiper-base">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="assets/images/banner2.svg" alt="Aking Village">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/banner2.svg" alt="Aking Village">
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/images/banner2.svg" alt="Aking Village">
                            </div>
                        </div>
                    </div>

                    <div class="model__desc-box">
                        <p>Những năm gần đây, BĐS nông nghiệp được nhiều nhà đầu tư trong và ngoài nước chú ý bởi tiềm năng phát triển vượt bậc và lợi nhuận đáng mơ ước. Tuy nhiên, đây là thị trường đầu tư không mang lại lợi nhuận tức thì mà cần một lộ trình xây dựng dài hạn và bài bản. Dù đã đầu tư rất nhiều tâm huyết và tiền bạc nhưng nhiều nhà đầu tư đã không thể chờ đợi đến ngày "hái quả ngọt" mà phải nhượng lại trang trại cùng những dự án còn đang dang dở.</p>
                        <p class="mt-4">Nắm bắt như cầu thị trường và tâm lý các nhà đầu tư, Aking Village đã mang đến giải pháp giúp các nhà đầu tư thành công với BĐS nông nghiệp, thu được lợi nhuận lý tưởng mà không cần đích thân tham gia vào quá trình sản xuất.</p>
                    </div>
                </div>
                
                <!-- Right content -->
                <div class="model__content">
                    <h2 class="model__title">AKING VILLAGE</h2>
                    <h3 class="model__subtitle">DẪN ĐẦU THỊ TRƯỜNG VỀ MÔ HÌNH ĐẦU TƯ SỞ HỮU BẤT ĐỘNG SẢN NÔNG NGHIỆP AN TOÀN & HIỆU QUẢ</h3>

                    <div class="swiper-base">  <!-- Thêm class này -->
                        <div class="swiper-pagination"></div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>

    <div class="model__features">
        
            
            <div class="features__wrapper">
                <!-- Feature card 1 -->
                <div class="feature-item-container">
                    <div class="feature-item">
                        <div class="feature-image">
                            <img src="assets/images/feature1.jpg" alt="Sở hữu suất đầu tư">
                        </div>
                        <div class="feature-title">
                            <h3>SỞ HỮU SUẤT ĐẦU TƯ SINH LỜI BỀN VỮNG</h3>
                            <p>Cơ hội tăng trưởng vượt bậc về giá trị đầu tư với cơ chế đầu tư doanh nghiệp</p>
                        </div>
                    </div>
                    <div class="model__bullet"></div>
                </div>
                
                <!-- Feature card 2 -->
                <div class="feature-item-container">
                    <div class="feature-item">
                        <div class="feature-image">
                            <img src="assets/images/feature1.jpg" alt="Giải pháp nông nghiệp">
                        </div>
                        <div class="feature-title">
                            <h3>GIẢI PHÁP NÔNG NGHIỆP HOÀN HẢO</h3>
                            <p>Cơ hội tăng trưởng vượt bậc về giá trị đầu tư với cơ chế đầu tư doanh nghiệp</p>
                        </div>
                    </div>
                    <div class="model__bullet"></div>
                </div>
    
                <!-- Feature card 3 -->
                <div class="feature-item-container">
                    <div class="feature-item">
                        <div class="feature-image">
                            <img src="assets/images/feature2.svg" alt="Phát triển du lịch">
                        </div>
                        <div class="feature-title">
                            <h3>PHÁT TRIỂN MÔ HÌNH DU LỊCH SINH THÁI</h3>
                            <p>Cơ hội tăng trưởng vượt bậc về giá trị đầu tư với cơ chế đầu tư doanh nghiệp</p>
                        </div>
                    </div>
                    <div class="model__bullet"></div>
                </div>
            </div>
    
            <div class="features__desc">
                <p>Aking Village là một thương hiệu trực thuộc Aking Farm - Nhà phát triển khai thác bất động sản nông nghiệp & nông sản tại Việt Nam tiên phong đi theo xu hướng mới của thế giới, tạo ra sản phẩm cho các nhà đầu tư nhỏ có nơi gửi gắm nguồn tiền đáng tin cậy trong bối cảnh thị trường kinh tế đầy biến động.</p>
                
                <p>Tại Aking Village, các nhà đầu tư không chỉ có "nơi trú ẩn" tài sản an toàn với khả năng sinh lời ổn định qua năm tháng mà còn góp phần thúc đẩy giá trị nông sản Việt, mang lại lợi ích tốt đẹp cho bản thân, gia đình và xã hội. Với đội ngũ chuyên gia nông nghiệp giàu kinh nghiệm và các cố vấn tài chính uy tín, Aking Village luôn làm việc với tinh thần tâm huyết và cầu thị, không ngừng nỗ lực mang lại giá trị thật để xứng đáng với niềm tin của các đối tác và các nhà đầu tư đã tin tưởng chọn đồng hành cùng chúng tôi.</p>
            </div>
            <!-- Background wrapper -->
            <div class="features__background"></div>
    </div>

    <div class="model__timeline">
        <div class="l-container">
            <div class="timeline__container">
                <!-- Left side - Keywords -->
                <div class="timeline__keywords">
                    <div class="keyword__item">
                        <span>TẦM NHÌN</span>
                    </div>
                    <div class="keyword__item">
                        <span>SỨ MỆNH</span>
                    </div>
                    <div class="keyword__item">
                        <span>GIÁ TRỊ CỐT LÕI</span>
                    </div>
                </div>

                <!-- Pagination -->
                <div class="swiper-base custom">
                    <!-- Các bullet sẽ được tạo tự động bởi Swiper -->
                    <div class="swiper-pagination"></div>
                </div>
        
                <!-- Right side - Content -->
                <div class="timeline__content">
                    <div class="content__image">
                        <img src="assets/images/banner3.svg" alt="Timeline background">
                    </div>
                    <!-- Content box with swiper -->
                    <div class="swiper swiper-base">
                        <div class="swiper-wrapper">
                            <!-- Slide 1 -->
                            <div class="swiper-slide">
                                <div class="content__box">
                                    <ul class="content__list">
                                        <li>Kiến tạo giải pháp nông nghiệp xanh – sạch đáp ứng đầy đủ các tiêu chí của thời đại công nghiệp hóa: Hiện đại, đạt chuẩn quốc tế, đầu tư bền vững, giá trị kinh tế cao và góp phần bảo tồn hệ sinh thái.</li>
                                        <li>Gia tăng hiệu suất vùng trồng, mang lại giá trị cho cộng đồng nhà đầu tư, nông dân, người dân bản địa và góp phần phát triển kinh tế vùng.</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Slide 2 -->
                            <div class="swiper-slide">
                                <div class="content__box">
                                    <ul class="content__list">
                                        <li>Kiến tạo giải pháp nông nghiệp xanh – sạch đáp ứng đầy đủ các tiêu chí của thời đại công nghiệp hóa: Hiện đại, đạt chuẩn quốc tế, đầu tư bền vững, giá trị kinh tế cao và góp phần bảo tồn hệ sinh thái.</li>
                                        <li>Gia tăng hiệu suất vùng trồng, mang lại giá trị cho cộng đồng nhà đầu tư, nông dân, người dân bản địa và góp phần phát triển kinh tế vùng.</li>
                                        
                                    </ul>
                                </div>
                            </div>
                            <!-- Slide 3 -->
                            <div class="swiper-slide">
                                <div class="content__box">
                                    <ul class="content__list">
                                        <li>Gia tăng hiệu suất vùng trồng, mang lại giá trị cho cộng đồng nhà đầu tư, nông dân, người dân bản địa và góp phần phát triển kinh tế vùng.</li>
                                        <li>Đồng hành cùng các nhà đầu tư khai thác tiềm năng giá trị từ mô hình nông trại sinh thái, đảm bảo lợi nhuận bền vững mỗi năm.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
    
