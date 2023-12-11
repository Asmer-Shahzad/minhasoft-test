<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsignmentController;

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
Route::get('login', 'LoginController@showLoginForm')->name('login_page');
Route::get('register', 'RegisterController@showRegistrationForm')->name('register_page');
Route::post('login', 'LoginController@login')->name('login');
Route::post('register', 'RegisterController@register')->name('register');
Route::get('logout', 'LoginController@logout')->name('logout');


Route::group([
    'middleware' => [
        'auth'
    ],
], 
function () {
    Route::get('consignments/export', 'App\Http\Controllers\ConsignmentController@exportPdf')->name('consignments.export');
Route::resource('consignments','App\Http\Controllers\ConsignmentController');

    Route::get('/', function () {
        return view('home');
    });
});


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
