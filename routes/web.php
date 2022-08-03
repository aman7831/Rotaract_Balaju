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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/events', [App\Http\Controllers\HomeController::class, 'events'])->name('events');





//Admin
Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');

Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
Route::get('/profile', [App\Http\Controllers\AdminController::class, 'profile'])->name('profile');

//Member details
Route::get('/memberdetails/{id}/edit', [App\Http\Controllers\AdminController::class, 'memberdetailsedit'])->name('memberdetailsedit');
Route::get('/memberdetails', [App\Http\Controllers\MembersProfileController::class, 'index'])->name('memberdetails');
Route::post('/memberdetails', [App\Http\Controllers\MembersProfileController::class, 'store'])->name('member_details');
Route::get('/memberdetails/{id}', [App\Http\Controllers\MembersProfileController::class, 'destroy'])->name('member_delete');
Route::post('/memberdetails/{id}', [App\Http\Controllers\MembersProfileController::class, 'update'])->name('member_update');


Route::get('/applynow', [App\Http\Controllers\HomeController::class, 'index'])->name('ApplyNow');
//Check new application
Route::get('/newapplication', [App\Http\Controllers\newapplicationController::class, 'index'])->name('newapplication');



Route::post('/search', [App\Http\Controllers\AdminController::class, 'search'])->name('search');