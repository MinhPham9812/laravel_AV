@extends('layouts.master')

@section('tab-news')
    <x-breadcrumb class="breadcrumb--news">
        @slot('title')
            TIN TỨC
        @endslot
    </x-breadcrumb>

    @component('components.tabs', [
        'class' => 'tabs--news',
        'tabs' => [
            [
                'route' => 'news',
                'label' => 'Tin Aking Village',
                'arrow_right' => 'newsProject',
                'active_routes' => ['news', 'news-detail']
            ],
            [
                'route' => 'newsProject',
                'label' => 'Tin dự án',
                'arrow_left' => 'news',
                'arrow_right' => 'notificationPage'
            ],
            [
                'route' => 'notificationPage',
                'label' => 'Thông báo',
                'arrow_left' => 'newsProject',
                'arrow_right' => 'event'
            ],
            [
                'route' => 'event',
                'label' => 'Sự kiện',
                'arrow_left' => 'notificationPage'
            ]
        ]
    ])
    @endcomponent

  <div class="tab-content">
      <!-- Kiểm tra xem có ở trang news_detail hay không -->
      @if(Request::is('news-detail'))
          @yield('news-detail') <!-- Load nội dung chi tiết bài viết -->
      @elseif(Request::is('news'))
        <div class="tab-content__pane tab-content__pane--active" id="news">
          <div class="swiper swiper-base">
            <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                  <!-- Slider News -->
                  <div class="swiper-slide">
                    @yield('tin-aking')
                  </div>
                  <!-- end Slider News -->

                  <div class="swiper-slide">
                    <div class="news">slider 2</div>
                </div>
                <div class="swiper-slide">
                    <div class="news">slider 3</div>
                </div>
                <div class="swiper-slide">
                    <div class="news">slider 4</div>
                </div>
              </div>
                <!-- Pagination -->
                    <div class="swiper-pagination"></div>
          </div>
        </div> 
      @elseif(Request::is('newsProject'))  
        <div class="tab-content__pane" id="newsProject">
          @yield('newsProject')  
        </div> 
      @elseif(Request::is('notificationPage'))  
        <div class="tab-content__pane" id="notificationPage">
          @yield('notificationPage')
        </div> 
      @elseif(Request::is('event'))  
        <div class="tab-content__pane" id="event">
          @yield('event')
        </div>
      @endif
  </div>

  @endsection