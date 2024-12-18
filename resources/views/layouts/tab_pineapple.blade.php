@extends('layouts.master')

@section('tab-pineapple')
    <x-breadcrumb class="breadcrumb--pineapple">
        @slot('title')
            LÀNG DỨA AKING FARM
        @endslot
        <p class="breadcrumb__subtitle">
            DỰ ÁN KHAI THÁC NÔNG SẢN KẾT HỢP MÔ HÌNH DU LỊCH SINH THÁI VÀ HOMESTAY
            ĐẦU TIÊN TẠI TỈNH VĨNH LONG
        </p>
    </x-breadcrumb>

    @component('components.tabs', [
        'class' => 'tabs--pineapple',
        'tabs' => [
            [
                'route' => 'pineapple-village-model',
                'label' => 'Mô hình Làng Dứa',
                'arrow_right' => 'pineapple-village-location'
            ],
            [
                'route' => 'pineapple-village-location',
                'label' => 'Vị trí đắc địa',
                'arrow_left' => 'pineapple-village-model',
                'arrow_right' => 'pineapple-village-potential'
            ],
            [
                'route' => 'pineapple-village-potential',
                'label' => 'Tiềm năng dứa Vĩnh Long',
                'arrow_left' => 'pineapple-village-location',
                'arrow_right' => '/'
            ],
            [
                'route' => '/',
                'label' => 'Tiến độ dự án',
                'arrow_left' => 'pineapple-village-potential',
                'arrow_right' => 'pineapple-village-adviser'
            ],
            [
                'route' => 'pineapple-village-adviser',
                'label' => 'Ban cố vấn chuyên môn',
                'arrow_left' => '/'
            ]
        ]
    ])
    @endcomponent

    <div class="tab-content">
        
        @if(Request::is('pineapple-village-model'))
            @yield('pineapple-village-model')   
        @elseif(Request::is('pineapple-village-location'))
            @yield('pineapple-village-location') 
        @elseif(Request::is('pineapple-village-potential'))
            @yield('pineapple-village-potential')  
        @elseif(Request::is('pineapple-village-adviser'))
            @yield('pineapple-village-adviser')     
        @endif
    </div>
@endsection