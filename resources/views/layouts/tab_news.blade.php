@extends('layouts.master')

@section('content')
<div id="tabs">
    <ul class="nav nav-tabs">
        
        <li class="nav-item">
            <a class="nav-link active" id="news-link" href="javascript:void(0)">Tin Aking Village</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="newsProject-link" href="javascript:void(0)">Tin dự án</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="notificationPage-link" href="javascript:void(0)">Thông báo</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="javascript:void(0)">Sự kiện</a>
          </li>
    </ul>
</div>
  
  <div id="tab-content">
    <div id="news" class="tab-pane active">
      <div class="swiper">
        <!-- Additional required wrapper -->
          <div class="swiper-wrapper">

              <!-- Slider News -->
              <div class="swiper-slide">
                @yield('tab_content')
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
    <div id="newsProject" class="tab-pane"></div> <!-- Tab 2 -->
    <div id="notificationPage" class="tab-pane"></div> <!-- Tab 3 -->
</div>
@endsection