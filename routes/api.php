<?php

use App\Http\Controllers\BuilderController;
use App\Http\Controllers\FactoryMethod\NewsController;
use App\Http\Controllers\Pool\NewsFetchController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::get('builder-test', [BuilderController::class, 'builderTest']);
Route::get('/news/{type}', [NewsController::class, 'show']);
Route::get('/fetch-news/{source}', [NewsFetchController::class, 'fetch']);
