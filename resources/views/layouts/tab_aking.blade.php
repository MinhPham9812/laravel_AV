@extends('layouts.master')

@section('tab-aking')
    <x-slider class="slider--aking">
        @slot('title')
            AKING VILLAGE
        @endslot
        <p class="slider__subtitle">
            MÔ HÌNH HỢP TÁC PHÁT TRIỂN VÌ MỘT NỀN <br> 
            NÔNG NGHIỆP XANH - SẠCH VÀ SINH LỜI BỀN VỮNG
        </p>
    </x-slider>

    @component('components.tabs', [
        'class' => 'tabs--aking',
        'tabs' => [
            [
                'route' => 'aking-general',
                'label' => 'Mô hình Aking Village',
                'arrow_right' => 'aking-potential'
            ],
            [
                'route' => 'aking-potential',
                'label' => 'Tiềm năng BĐS nông nghiệp',
                'arrow_left' => 'aking-general',
                'arrow_right' => 'aking-roadmap'
            ],
            [
                'route' => 'aking-roadmap',
                'label' => 'Lộ trình đầu tư & khai thác',
                'arrow_left' => '',
                'arrow_right' => ''
            ],
            [
                'route' => '',
                'label' => 'Hệ giá trị Lion',
                'arrow_left' => '',
                'arrow_right' => ''
            ],
            [
                'route' => '/',
                'label' => 'Chủ đầu tư',
                'arrow_left' => ''
            ]
        ]
    ])
    @endcomponent

    <div class="tab-content">
        
        @if(Request::is('aking-general'))
            @yield('aking-general') 
        @elseif(Request::is('aking-potential')) 
            @yield('aking-potential') 
        @elseif(Request::is('aking-roadmap')) 
            @yield('aking-roadmap')         
        @endif
    </div>
@endsection