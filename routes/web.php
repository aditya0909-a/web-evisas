<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/landingpage/companyprofile', function () {
    return view('companyprofile');
});

Route::get('/landingpage/visitorvisa', function () {
    return view('visitorvisa');
});

Route::get('/landingpage/visitorvisa/voa', function () {
    return view('voa');
});

Route::get('/landingpage/visitorvisa/singleentry', function () {
    return view('singleentry');
});
