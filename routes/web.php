<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HelloMiddleware;
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
    return view('welcome');
});

// Route::middleware([HelloMiddleware::class])->group(function () {
//     Route::get('/hello', 'HelloController@index');
//     Route::get('/hello/other', 'HelloController@other');
// });


// Route::post('/hello', 'HelloController@index');
// Route::get('/hello/{msg}', 'HelloController@other');
Route::get('/hello/other', 'HelloController@other');
Route::get('/hello', 'HelloController@index')->name('hello');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
