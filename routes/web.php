<?php

use App\Http\Controllers\AdminCotroller;
use App\Http\Controllers\HomeController;
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



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/',[AdminCotroller::class,'home']);

Route::get('/home',[AdminCotroller::class,'index'])->name('home');

Route::get('/create_room',[AdminCotroller::class,'create_room'])->name('create_room');
Route::post('/add_room',[AdminCotroller::class,'add_room'])->name('add_room');

Route::get('/view_room',[AdminCotroller::class,'view_room'])->name('view_room');

Route::get('/room_delete/{id}',[AdminCotroller::class,'room_delete'])->name('room_delete');

Route::get('/room_update/{id}',[AdminCotroller::class,'room_update'])->name('room_update');
Route::post('/edit_room/{id}',[AdminCotroller::class,'edit_room'])->name('edit_room');

//gallary
Route::get('/view_gallary',[AdminCotroller::class,'view_gallary'])->name('view_gallary');
Route::post('/upload_gallary',[AdminCotroller::class,'upload_gallary'])->name('upload_gallary');
Route::get('/delete_gallary/{id}',[AdminCotroller::class,'delete_gallary'])->name('delete_gallary');



Route::get('/bookings',[AdminCotroller::class,'bookings'])->name('bookings');
Route::get('/delete_booking/{id}',[AdminCotroller::class,'delete_booking'])->name('delete_booking');

Route::get('/approve_booking/{id}',[AdminCotroller::class,'approve_booking'])->name('approve_booking');

Route::get('/rejected_booking/{id}',[AdminCotroller::class,'rejected_booking'])->name('rejected_booking');


Route::get('/room_details/{id}',[HomeController::class,'room_details'])->name('room_details');

Route::post('/add_booking/{id}',[HomeController::class,'add_booking'])->name('add_booking');







