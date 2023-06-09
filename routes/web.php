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
    return view('welcome');
});
use Illuminate\Support\Facades\Http;

Route::get('/', function () {
    $url = 'https://api.exchangerate-api.com/v4/latest/USD';

    $response = Http::get($url);

    $data = $response->json();
    $exchangeRate = $data['rates']['TRY'];

    return '1 Dolar = ' . $exchangeRate . ' TRY';
});
