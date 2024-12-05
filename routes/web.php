<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/news', function () {
    return view('news.index'); 
});

Route::get('/news-detail', function () {
    return view('news.detail'); 
});

Route::get('/newsProject', function () {
    return view('news.project'); 
});

Route::get('/notificationPage', function () {
    return view('news.notification'); 
});

Route::get('/event', function () {
    return view('news.event'); 
});

Route::get('/aking-general', function () {
    return view('akingVillage.aking-general'); 
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

Route::get('/pineapple-village-location', function (){
    return view('pineappleVillage.pineapple-villageLocation');
});

Route::get('/pineapple-village-potential', function (){
    return view('pineappleVillage.pineapple-villagePotential');
});

Route::get('/pineapple-village-adviser', function (){
    return view('pineappleVillage.pineapple-villageAdviser');
});

Route::get('/investment-farm', function (){
    return view('investmentFarm');
});

Route::get('/investment-seminar', function (){
    return view('investmentSeminar');
});