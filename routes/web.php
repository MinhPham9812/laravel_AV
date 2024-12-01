<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/news', function () {
    return view('news.index'); // Thay đổi đường dẫn
});

Route::get('/news-detail', function () {
    return view('news.detail'); // Thay đổi đường dẫn
});

Route::get('/newsProject', function () {
    return view('news.project'); // Thay đổi đường dẫn
});

Route::get('/notificationPage', function () {
    return view('news.notification'); // Thay đổi đường dẫn
});

Route::get('/event', function () {
    return view('news.event'); // Thay đổi đường dẫn
});

Route::get('/aking-general', function () {
    return view('akingVillage.aking-general'); // Thay đổi đường dẫn
});

Route::get('/aking-potential', function (){
    return view('akingVillage.aking-potential');
});

Route::get('/aking-roadmap', function (){
    return view('akingVillage.aking-roadmap');
});

Route::get('/aking-lion-value', function (){
    return view('akingVillage.aking-lionValue');
});

Route::get('/pineapple-village-model', function (){
    return view('pineappleVillage.pineapple-villageModel');
});