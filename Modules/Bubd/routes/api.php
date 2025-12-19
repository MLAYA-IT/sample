<?php

use Illuminate\Support\Facades\Route;
use Modules\Bubd\App\Http\Controllers\BubdController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('bubds', BubdController::class)->names('bubd');
});
