<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;

Route::get('/feedback',[FeedbackController::class,'feedback']);

Route::post('/feedbackAdd',[FeedbackController::class,'feedbackAdd']);

Route::get('/home',[AdminController::class,'index'])->name('home');

Route::get('/',[AdminController::class,'home']);

Route::get('/create_room',[AdminController::class,'create_room']);

Route::post('/add_room',[AdminController::class,'add_room']);

Route::get('/view_room',[AdminController::class,'view_room']);

Route::get('/delete_room/{id}',[AdminController::class,'delete_room']);


Route::get('/update_room/{id}',[AdminController::class,'update_room']);

Route::post('/edit_room/{id}',[AdminController::class,'edit_room']);

Route::get('/room_detail/{id}',[HomeController::class,'room_detail']);

Route::get('/create_file',[FileController::class,'create_file']);

Route::post('/save_file',[FileController::class,'save_file']);

Route::get('/show_data', [FileController::class, 'show_file_data'])->name('file.show_data');

Route::get('/view_file/{id}', [FileController::class, 'file_view'])->name('file.view');

Route::get('download_file/{file}', [FileController::class, 'file_download'])->name('file.download');
Route::delete('/delete_file/{id}', [FileController::class, 'remove'])->name('file.delete');





