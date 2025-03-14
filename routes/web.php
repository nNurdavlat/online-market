<?php

use App\Http\Controllers\FileUploadController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/file-upload', [FileUploadController::class, 'index']);
Route::post('/file-upload', [FileUploadController::class, 'store']);
Route::get('/files', [FileUploadController::class, 'show']);
