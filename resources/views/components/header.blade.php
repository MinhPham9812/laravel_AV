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
                    <img alt="logo" class="header__logo-img" src="assets/images/logo_Aking.svg">
                    <div class="header__logo-text">
                        <span class="header__logo-text--aking">AKING</span>
                        <span class="header__logo-text--village">VILLAGE</span>
                    </div>
                </div>
            </a>

            <!-- Main navigation menu -->
            <nav class="header__nav">
                <ul class="header__menu">
                    <li class="header__menu-item"><a class="header__menu-link" href="{{ url('/aking-general') }}">ANKING
                            VILLAGE</a></li>
                    <li class="header__menu-item"><a class="header__menu-link"
                            href="{{ url('/pineapple-village-model') }}">DỰ ÁN LÀNG DỨA</a></li>
                    <li class="header__menu-item"><a class="header__menu-link" href="{{ url('/investment-farm') }}">ĐẦU
                            TƯ ĐẤT FARM</a></li>
                    <li class="header__menu-item"><a class="header__menu-link"
                            href="{{ url('/investment-seminar') }}">HỘI THẢO ĐẦU TƯ</a></li>
                    <li class="header__menu-item"><a class="header__menu-link" href="{{ url('/news') }}">TIN TỨC</a>
                    </li>
                    <li class="header__menu-item"><a class="header__menu-link" href="{{ url('/q-a') }}">Q&A</a></li>
                    <li class="header__menu-item"><a class="header__menu-link" href="">CONTACT</a></li>
                </ul>
            </nav>

            <!-- Social icons -->
            <div class="header__social">
                <a class="header__social-icon" href="">f</a>
                <div class="header__social-language">
                    <a class="header__social-lang header__social-lang--vi" href="">VI</a>
                    <a class="header__social-lang header__social-lang--en" href="">EN</a>
                </div>
            </div>

            <!-- Button search -->
            <div class="header__search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
    </div>
    <!-- Sidebar Structure -->
    <div class="header__overlay"></div> <!-- Overlay, hiển thị khi mở sidebar -->

    <div class="header__mobile">
        <span class="header__mobile-close">&times;</span> <!-- Nút đóng sidebar -->
        <ul class="header__mobile-menu">
            <li class="header__mobile-menu-item"><a class="header__mobile-menu-link"
                    href="{{ url('/aking-general') }}">ANKING VILLAGE</a></li>
            <li class="header__mobile-menu-item"><a class="header__mobile-menu-link"
                    href="{{ url('/pineapple-village-model') }}">DỰ ÁN LÀNG DỨA</a></li>
            <li class="header__mobile-menu-item"><a class="header__mobile-menu-link"
                    href="{{ url('/investment-farm') }}">ĐẦU TƯ FARM</a></li>
            <li class="header__mobile-menu-item"><a class="header__mobile-menu-link"
                    href="{{ url('/investment-seminar') }}">HỘI THẢO ĐẦU TƯ</a></li>
            <li class="header__mobile-menu-item"><a class="header__mobile-menu-link" href="{{ url('/news') }}">TIN
                    TỨC</a></li>
            <li class="header__mobile-menu-item"><a class="header__mobile-menu-link" href="#">Q&A</a></li>
            <li class="header__mobile-menu-item"><a class="header__mobile-menu-link" href="#">CONTACT</a></li>

            <div class="header__mobile-social">
                <a class="header__mobile-social-icon" href="">f</a>
                <a class="header__mobile-lang header__mobile-lang--active" href="#">VI</a>
                <a class="header__mobile-lang" href="#">EN</a>
            </div>
        </ul>
    </div>
</div>
