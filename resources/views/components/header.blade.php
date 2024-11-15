<div class="header">
    <div class="l-container">
        <div class="c-row">
            <!-- Bar-menu -->
            <button class="header__bars-btn">
                <i class="fa-solid fa-bars"></i>
            </button>

            <!-- Logo -->
            <a href="{{ url('/') }}">
                <div class="header__logo">
                    <img src="assets/images/logo_Aking.svg" alt="logo" class="header__logo-img">
                    <div class="header__logo-text">
                        <span class="header__logo-text--aking">AKING</span>
                        <span class="header__logo-text--village">VILLAGE</span>
                    </div>
                </div>
            </a>

            <!-- Main navigation menu -->
            <nav class="header__nav">
                <ul class="header__menu">
                    <li class="header__menu-item"><a href="{{ url('/aking-general') }}" class="header__menu-link">ANKING VILLAGE</a></li>
                    <li class="header__menu-item"><a href="" class="header__menu-link">DỰ ÁN LÀNG DỨA</a></li>
                    <li class="header__menu-item"><a href="" class="header__menu-link">ĐẦU TƯ FARM</a></li>
                    <li class="header__menu-item"><a href="" class="header__menu-link">HỘI THẢO ĐẦU TƯ</a></li>
                    <li class="header__menu-item"><a href="{{ url('/news') }}" class="header__menu-link">TIN TỨC</a></li>
                    <li class="header__menu-item"><a href="" class="header__menu-link">Q&A</a></li>
                    <li class="header__menu-item"><a href="" class="header__menu-link">CONTACT</a></li>
                </ul>
            </nav>

            <!-- Social icons -->
            <div class="header__social">
                <a href="" class="header__social-icon">f</a>
                <div class="header__social-language">
                    <a href="" class="header__social-lang header__social-lang--vi">VI</a>
                    <a href="" class="header__social-lang header__social-lang--en">EN</a>
                </div>
            </div>

            <!-- Button search -->
            <div class="header__search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>

            <!-- Sidebar Structure -->
            <div class="header__overlay"></div> <!-- Overlay, hiển thị khi mở sidebar -->

            <div class="header__mobile">
                <span class="header__mobile-close">&times;</span> <!-- Nút đóng sidebar -->
                <ul class="header__mobile-menu">
                    <li class="header__mobile-menu-item"><a href="#" class="header__mobile-menu-link">ANKING VILLAGE</a></li>
                    <li class="header__mobile-menu-item"><a href="#" class="header__mobile-menu-link">DỰ ÁN LÀNG DỨA</a></li>
                    <li class="header__mobile-menu-item"><a href="#" class="header__mobile-menu-link">ĐẦU TƯ FARM</a></li>
                    <li class="header__mobile-menu-item"><a href="#" class="header__mobile-menu-link">HỘI THẢO ĐẦU TƯ</a></li>
                    <li class="header__mobile-menu-item"><a href="#" class="header__mobile-menu-link">TIN TỨC</a></li>
                    <li class="header__mobile-menu-item"><a href="#" class="header__mobile-menu-link">Q&A</a></li>
                    <li class="header__mobile-menu-item"><a href="#" class="header__mobile-menu-link">CONTACT</a></li>
                    
                    <div class="header__mobile-social">
                        <a href="" class="header__mobile-social-icon">f</a>
                        <a href="#" class="header__mobile-lang header__mobile-lang--active">VI</a>
                        <a href="#" class="header__mobile-lang">EN</a>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- end Header -->

