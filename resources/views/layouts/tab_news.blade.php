@extends('layouts.master')

@section('content')
<div id="tabs">
  <ul class="nav nav-tabs"> 
      <li class="nav-item {{ Request::is('news') ? 'active' : '' }}">
          <a class="nav-link" id="news-link" href="{{ url('/news')}}">Tin Aking Village</a>
          <a class="nav-arrow-right fa-solid fa-chevron-right" href="{{ url('/newsProject')}}"></a>  <!-- Mũi tên phải -->
      </li>
      <li class="nav-item {{ Request::is('newsProject') ? 'active' : '' }}">
          <a class="nav-arrow-left fa-solid fa-chevron-left"  href="{{ url('/news')}}"></a> <!-- Mũi tên trái -->
          <a class="nav-link" id="newsProject-link" href="{{ url('/newsProject')}}">Tin dự án</a>
          <a class="nav-arrow-right fa-solid fa-chevron-right" href="{{ url('/notificationPage')}}"></a> <!-- Mũi tên phải -->
      </li>
      <li class="nav-item {{ Request::is('notificationPage') ? 'active' : '' }}">
          <a class="nav-arrow-left fa-solid fa-chevron-left" href="{{ url('/newsProject')}}"></a> <!-- Mũi tên trái -->
          <a class="nav-link" id="notificationPage-link" href="{{ url('/notificationPage')}}">Thông báo</a>
          <a class="nav-arrow-right fa-solid fa-chevron-right" href="{{ url('/event')}}"></a> <!-- Mũi tên phải -->
      </li>
      <li class="nav-item {{ Request::is('event') ? 'active' : '' }}">
        <a class="nav-arrow-left fa-solid fa-chevron-left" href="{{ url('/notificationPage')}}"></a> <!-- Mũi tên trái -->
        <a class="nav-link" href="{{ url('/event')}}">Sự kiện</a>
    </li>
  </ul>
</div>

  
  <div id="tab-content">
    <!-- Kiểm tra xem có ở trang news_detail hay không -->
    @if(Request::is('news-detail'))
        @yield('news-detail') <!-- Load nội dung chi tiết bài viết -->
    @elseif(Request::is('news'))
      <div id="news" class="tab-pane active">
        <div class="swiper">
          <!-- Additional required wrapper -->
            <div class="swiper-wrapper">

                <!-- Slider News -->
                <div class="swiper-slide">
                  @yield('tin-aking')
                </div>
                <!-- end Slider News -->

                <div class="swiper-slide">slider 2</div>

                <div class="swiper-slide">slider 3</div>
                
                <div class="swiper-slide">slider 4</div>
            </div>
              <!-- Pagination -->
                  <div class="swiper-pagination"></div>
        </div>
      </div> 
    @elseif(Request::is('newsProject'))  
      <div id="newsProject" class="tab-pane">
        @yield('newsProject')  
      </div> 
    @elseif(Request::is('notificationPage'))  
      <div id="notificationPage" class="tab-pane">
        @yield('notificationPage')
      </div> 
    @elseif(Request::is('event'))  
      <div id="event" class="tab-pane">
        @yield('event')
      </div>
    @endif
  </div>
@endsection