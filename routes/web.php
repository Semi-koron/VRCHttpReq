<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurveyController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/surveys', [SurveyController::class, 'index']);
Route::get('/{region}/{generation}/{feedback}', [SurveyController::class, 'create']);
