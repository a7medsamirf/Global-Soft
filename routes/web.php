<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
/*use App\Http\Controllers\ContactController;*/
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


Route::get('/', 'HomeController@index');
Route::get('/team', 'TeamController@index');
Route::get('/client', 'ClientController@index');
/*Route::get('/contact', 'ContactController@contact');*/


Route::get('/contact', function () { return view('contact'); });



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

