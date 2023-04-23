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

//-------- ГЛАВНАЯ СТРАНИЦА --------//
Route::get('/', 'MainController@index')->name('home.index');
//-------- ОТЗЫВЫ --------//
Route::get('/reviews', 'ReviewController@index')->name('review.index');
Route::post('/review', 'ReviewController@create')->name('review.create');
//-------- ПРОСМОТР АВТОМОБИЛЯ --------//
Route::get('/audi/{model}', 'CarController@show')->name('car.show');
//-------- ДОБАВЛЕНИЕ АВТОМОБИЛЯ --------//
Route::get('/car/index/create', 'CarController@index')->name('car.index');
Route::post('/car/create', 'CarController@create')->name('car.create');
//-------- ERROR 404 --------//
Route::fallback(function () {
    return '<link rel="stylesheet" href="public/css/404.css">
            <div class="error_404">Ошибка 404 | Страница не найдена</div>';
});
