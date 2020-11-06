<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ReserveController;

Route::group(['prefix' => 'groups'], function ($router) {
    Route::get('/', [GroupController::class, 'index']);
});

Route::group(['prefix' => 'historical'], function ($router) {
    Route::get('/reserves', [ReserveController::class, 'index']);
    Route::post('/reserve', [ReserveController::class, 'store']);
});
