<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebNotificationController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {return view('welcome');});
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
#Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/push-notificaiton', [WebNotificationController::class, 'index'])->name('push-notificaiton');
Route::post('/store-token', [WebNotificationController::class, 'storeToken'])->name('store.token');
Route::post('/send-web-notification', [WebNotificationController::class, 'sendWebNotification'])->name('send.web-notification');
Route::get('/notification', function () {return view('notification');});
Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/languageDemo', 'App\Http\Controllers\HomeController@languageDemo');
Route::get('/alpha', function () {return view('alpha');});
Route::get('/beta', function () {return view('beta');});