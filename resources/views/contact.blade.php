@extends('layouts.master')

@section('title', 'Contact')

@section('contact')
    <x-breadcrumb class="breadcrumb--contact">
        @slot('title')
            LIÊN HỆ
        @endslot
    </x-breadcrumb>

    <section class="contact">
        <div class="l-container">
            <div class="c-row">
                <div class="c-row__col">
                    <div class="c-content">
                        <p class="c-desc">
                            <strong>AKING HOLDINGS</strong> <br>
                            CÔNG TY CỔ PHẦN ĐẦU TƯ VÀ KHAI THÁC BẤT ĐỘNG SẢN NÔNG NGHIỆP
                        </p>
                        <p class="c-desc">
                            <strong>Văn phòng đại diện</strong> <br>
                            <span>Địa chỉ: </span>45A Lý Tự Trọng, Bến Nghé, Quận 1, Thành phố Hồ Chí Minh <br>
                            <span>Điện thoại: </span>0283 79 379 37 - 0283 79 379 37<br>
                            <span>Fax: </span>0283 79 379 37<br>
                            <span>Email: </span>info@akingholdings.vn
                        </p>
                        <p class="c-desc">
                            <strong>Văn phòng kinh doanh</strong> <br>
                            <span>Địa chỉ: </span>45A Lý Tự Trọng, Bến Nghé, Quận 1, Thành phố Hồ Chí Minh <br>
                            <span>Điện thoại: </span>0283 79 379 37 - 0283 79 379 37<br>
                            <span>Fax: </span>0283 79 379 37<br>
                            <span>Email: </span>info@akingholdings.vn
                        </p>
                    </div>
                </div>
                <div class="c-row__col">
                    <h2 class="c-title2">AKING HOLDINGS</h2>
                    <p class="c-desc">Quý khách vui lòng liên hệ Aking Village qua điện thoại, email hoặc điền vào mẫu thông
                        tin bên dưới</p>
                    <form action="" class="c-form" id="contactForm" method="POST" novalidate="novalidate">
                        <input name="_token" type="hidden" value="2C1WU0Stvd0Q4kkWYjpAW0yUas9dZ4V5bvKfrHil">
                        <div class="c-form__group">
                            <input class="c-form__input" name="name" placeholder="Họ và tên *" type="text">
                        </div>
                        <div class="c-form__group">
                            <input class="c-form__input" name="address" placeholder="Địa chỉ *" type="text">
                        </div>
                        <div class="c-form__group">
                            <input class="c-form__input" name="phone" placeholder="Số điện thoại" type="text">
                        </div>
                        <div class="c-form__group">
                            <input class="c-form__input" name="email" placeholder="Email *" type="email">
                        </div>
                        <div class="c-form__group c-form__group--radio">
                            <label>Quan tâm dự án <input checked="checked" class="u--radio" name="type" type="radio"
                                    value="1">
                                <span class="u-checkmark"></span>
                            </label>
                            <label>Liên hệ khác <input class="u--radio" name="type" type="radio" value="2">
                                <span class="u-checkmark"></span>
                            </label>
                        </div>
                        <div class="c-form__group">
                            <select class="c-form__input u--select" id="" name="project">
                                <option disabled="" hidden="" selected="" value="">Chọn dự án</option>
                                <option value="Dự án làng dứa">Dự án làng dứa</option>
                                <option value="Dự án đầu tư nông trại">Dự án đầu tư nông trại</option>
                                <option value="Dự án đầu tư đất">Dự án đầu tư đất</option>
                            </select>
                        </div>
                        <div class="c-form__group">
                            <textarea class="c-form__input u--textarea" cols="30" id="" name="content" placeholder="Nội dung"
                                rows="6"></textarea>
                        </div>
                        <button class="c-btn2 u-btn" type="submit">GỬI THÔNG TIN NGAY</button>
                        <input name="proengsoft_jsvalidation" type="hidden">
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
