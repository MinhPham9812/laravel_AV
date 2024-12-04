@extends('layouts.master')

@section('title', 'Đầu Tư Đất Farm')

@section('investment-farm')
<x-breadcrumb class="breadcrumb--farm" tag="h2">
    @slot('title')
        ĐẦU TƯ ĐẤT FARM
    @endslot
    <p class="breadcrumb__subtitle">
        ĐẦU TƯ ĐẤT FARM
    </p>
</x-breadcrumb>

<div class="farm">
    <div class="l-container">
        <div class="c-img1">
            <figure>
                <img src="/assets/images/farm/farmBanner1.jpg" alt="ĐẦU TƯ ĐẤT FARM">
            </figure>
        </div>
        <div class="c-line1"></div>
        <div class="c-block2">
            <div class="c-block2__inner">
                <h2 class="c-block2__title">CAM KẾT MUA LẠI ĐẤT TỪ NHÀ ĐẦU TƯ</h2>
                <ul class="c-block2__list">
                    <li class="c-block2__item">
                        <p>
                            <span class="c-block2__txt c-block2__txt1">Năm thứ 2:</span>
                            <span class="c-block2__txt c-block2__txt2">Giá suất đầu tư hiện tại</span>
                            <span class="c-block2__txt c-block2__txt3">+20 % giá trị đất</span>
                        </p>
                    </li>
                    <li class="c-block2__item">
                        <p>
                            <span class="c-block2__txt c-block2__txt1">Năm thứ 3 - Năm thứ 4:</span>
                            <span class="c-block2__txt c-block2__txt2">30% giá suất đầu tư </span>
                            <span class="c-block2__txt c-block2__txt3">+ 30% giá trị đất</span>
                        </p>
                    </li>
                    <li class="c-block2__item">
                        <p>
                            <span class="c-block2__txt c-block2__txt1">Năm thứ 5 - Năm thứ 7:</span>
                            <span class="c-block2__txt c-block2__txt2">Giá suất đầu tư </span>
                            <span class="c-block2__txt c-block2__txt3">+ 50% giá trị đất</span>
                        </p>
                    </li>
                    <li class="c-block2__item">
                        <p>
                            <span class="c-block2__txt c-block2__txt1">Năm thứ 8 - Năm thứ 10:</span>
                            <span class="c-block2__txt c-block2__txt2">Giá suất đầu tư</span>
                            <span class="c-block2__txt c-block2__txt3">+ 100% giá trị đất</span>
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="c-block3">
            <div class="c-block3__inner">
                <h3 class="c-block3__title">GIÁ TĂNG <span>15%-20%</span> CHO<br>CÁC GIAI ĐOẠN MỞ BÁN TIẾP THEO</h3>
            </div>
        </div>
    </div>
</div>

<section class="form">
    <div class="l-container">
        <div class="form__inner">
            <h2 class="form__title">ĐĂNG KÝ TRỞ THÀNH NHÀ ĐẦU TƯ TẠI <span class="u-txt1">AKING VILLAGE</span></h2>
            <form class="c-form seminar-form">
                <div class="c-form__group">
                    <div class="w-50 input-wrapper">
                        <select class="c-form__input u--select" name="gender">
                            <option value="" selected disabled hidden>Anh / Chị</option>
                            <option value="Anh">Anh</option>
                            <option value="Chị">Chị</option>
                        </select>
                    </div>
                    <div class="w-50 input-wrapper">
                        <input class="c-form__input" name="name" type="text" placeholder="Họ và tên">
                    </div>
                </div>
                <div class="c-form__group">
                    <div class="w-50 input-wrapper">
                        <input class="c-form__input" name="phone" type="number" placeholder="Số điện thoại">
                    </div>
                    <div class="w-50 input-wrapper">
                        <input class="c-form__input" name="email" type="email" placeholder="Email">
                    </div>
                </div>
                <div class="c-form__group">
                    <textarea class="c-form__input u--textarea" name="content" cols="30" rows="7" placeholder="Ý kiến của quý khách"></textarea>
                </div>
                <button type="submit" class="c-btn2 u-btn">GỬI THÔNG TIN NGAY</button>
            </form>
        </div>
    </div>
</section>
@endsection