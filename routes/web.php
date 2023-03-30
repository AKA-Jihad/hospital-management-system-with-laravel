<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/',[HomeController::class,'index']);
Route::get('/home',[HomeController::class,'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_doctor_view',[AdminController::class, 'add_view']);
Route::post('/upload_doctor',[AdminController::class, 'upload']);


Route::post('/appointment',[HomeController::class, 'appointment']);
Route::get('/my-appointment',[HomeController::class, 'my_appointment']);
Route::get('/cancel_appoint/{id}',[HomeController::class, 'cancel_appoint']);
Route::get('/show_appointment',[AdminController::class, 'show_appointment']);
Route::get('/approved/{id}',[AdminController::class, 'approved']);
Route::get('/canceled/{id}',[AdminController::class, 'canceled']);
Route::get('/show_doctor',[AdminController::class, 'show_doctor']);
Route::get('/deletedoctor/{id}',[AdminController::class, 'deletedoctor']);
Route::get('/editdoctor/{id}',[AdminController::class, 'editdoctor']);
Route::post('/update_doctor/{id}',[AdminController::class, 'update_doctor']);

