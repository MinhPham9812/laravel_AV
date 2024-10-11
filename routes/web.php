<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/tabs', function () {
    return view('tabs');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/news-detail', function () {
    return view('news_detail');
});

Route::get('/newsProject', function () {
    return view('newsProject');
});

Route::get('/notificationPage', function () {
    return view('notificationPage');
});