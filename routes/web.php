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
    return view('visitorvisa.voa');
});

Route::get('/landingpage/visitorvisa/singleentry', function () {
    return view('visitorvisa.singleentry');
});

Route::get('/landingpage/visitorvisa/multipleentry', function () {
    return view('visitorvisa.multipleentry');
});

Route::get('/landingpage/visitorvisa/singleentry/C1', function () {
    return view('visitorvisa.single-entry.C1');
});

Route::get('/landingpage/visitorvisa/singleentry/C2', function () {
    return view('visitorvisa.single-entry.C2');
});

Route::get('/landingpage/visitorvisa/singleentry/C6', function () {
    return view('visitorvisa.single-entry.C6');
});

Route::get('/landingpage/visitorvisa/singleentry/C7A', function () {
    return view('visitorvisa.single-entry.C7A');
});

Route::get('/landingpage/visitorvisa/singleentry/C7C', function () {
    return view('visitorvisa.single-entry.C7C');
});

Route::get('/landingpage/visitorvisa/singleentry/C9', function () {
    return view('visitorvisa.single-entry.C9');
});

Route::get('/landingpage/visitorvisa/singleentry/C10', function () {
    return view('visitorvisa.single-entry.C10');
});

Route::get('/landingpage/visitorvisa/singleentry/C12', function () {
    return view('visitorvisa.single-entry.C12');
});

Route::get('/landingpage/visitorvisa/singleentry/C18', function () {
    return view('visitorvisa.single-entry.C18');
});

Route::get('/landingpage/visitorvisa/singleentry/C22B', function () {
    return view('visitorvisa.single-entry.C22B');
});

Route::get('/landingpage/visitorvisa/multipleentry/D1', function () {
    return view('visitorvisa.multiple-entry.D1');
});

Route::get('/landingpage/visitorvisa/multipleentry/D2', function () {
    return view('visitorvisa.multiple-entry.D2');
});

Route::get('/landingpage/visitorvisa/multipleentry/D12', function () {
    return view('visitorvisa.multiple-entry.D12');
});

Route::get('/landingpage/kitas', function () {
    return view('kitas');
});

Route::get('/landingpage/kitas/investorkitas', function () {
    return view('kitas.investorkitas');
});

Route::get('/landingpage/kitas/workingkitas', function () {
    return view('kitas.workingkitas');
});

Route::get('/landingpage/kitas/retirementkitas', function () {
    return view('kitas.retirementkitas');
});

Route::get('/landingpage/kitas/remoteworker', function () {
    return view('kitas.remoteworker');
});

Route::get('/landingpage/kitas/familymemberskitas', function () {
    return view('kitas.familymemberskitasholder');
});

Route::get('/landingpage/kitas/familymembersindonesian', function () {
    return view('kitas.familymembersindonesian');
});

Route::get('/landingpage/kitas/studentkitas', function () {
    return view('kitas.studentkitas');
});

Route::get('/landingpage/kitas/exindonesianvisa', function () {
    return view('kitas.exindonesianvisa');
});

Route::get('/landingpage/kitas/goldenvisa', function () {
    return view('kitas.goldenvisa');
});

Route::get('/landingpage/kitas/familymemberskitas/E31B', function () {
    return view('kitas.familymemberskitas.E31B');
});

Route::get('/landingpage/kitas/familymemberskitas/E31E', function () {
    return view('kitas.familymemberskitas.E31E');
});

Route::get('/landingpage/kitas/familymemberskitas/E31H', function () {
    return view('kitas.familymemberskitas.E31H');
});