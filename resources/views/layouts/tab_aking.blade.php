@extends('layouts.master')

@section('tab-aking')
    <x-breadcrumb class="breadcrumb--aking">
        @slot('title')
            AKING VILLAGE
        @endslot
        <p class="breadcrumb__subtitle">
            MÔ HÌNH HỢP TÁC PHÁT TRIỂN VÌ MỘT NỀN <br> 
            NÔNG NGHIỆP XANH - SẠCH VÀ SINH LỜI BỀN VỮNG
        </p>
    </x-breadcrumb>

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
                'arrow_left' => 'aking-potential',
                'arrow_right' => 'aking-lionValue'
            ],
            [
                'route' => 'aking-lion-value',
                'label' => 'Hệ giá trị Lion',
                'arrow_left' => 'aking-roadmap',
                'arrow_right' => '/'
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
        @elseif(Request::is('aking-lion-value')) 
            @yield('aking-lionValue')        
        @endif
    </div>
@endsection