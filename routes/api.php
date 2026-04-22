<?php

use App\Http\Controllers\BuilderController;
use App\Http\Controllers\FactoryMethod\NewsController;
use App\Http\Controllers\SendWelcomeEmailController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::get('builder-test', [BuilderController::class, 'builderTest']);
Route::get('/news/{type}', [NewsController::class, 'show']);

Route::get('send-welcome-email', [SendWelcomeEmailController::class, 'send']);

Route::get('/deploy', function () {

    if (request('key') !== 'my_secret_123') {
        abort(403);
    }

    chdir(base_path());

    $output = shell_exec('git reset --hard && git pull origin main 2>&1');

    return "<pre>$output</pre>";
});
