<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\XXX\AAAController;
Route::controller(AAAController::class)->prefix('XXX')->group(function() {
    Route::get('xxx/aaa', 'bbb');
});

