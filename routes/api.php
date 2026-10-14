<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KritikDanSaranController;
use App\Http\Controllers\SurveyKepuasanController;

Route::get('/get-kritik-dan-saran', [KritikDanSaranController::class, 'index']);
Route::post('/post-kritik-dan-saran', [KritikDanSaranController::class, 'store']);
Route::get('/get-survey-kepuasan', [SurveyKepuasanController::class, 'index']);
Route::post('/post-survey-kepuasan', [SurveyKepuasanController::class, 'store']);
