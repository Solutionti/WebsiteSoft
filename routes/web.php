<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
});

Route::get('servicios', function () {
    return view('servicios');
});

Route::get('plan', function () {
    return view('plan');
});

Route::get('contactanos', function () {
    return view('contactanos');
});

Route::get('comprar', function () {
    return view('comprar');
});

Route::get('software1', function () {
    return view('software');
});
