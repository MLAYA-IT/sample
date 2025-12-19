<?php

use Illuminate\Support\Facades\Route;
use Modules\SampleOne\App\Http\Controllers\SampleOneController;

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('sampleones', SampleOneController::class)->names('sampleone');
});
