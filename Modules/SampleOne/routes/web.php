<?php

use Illuminate\Support\Facades\Route;
use Modules\SampleOne\App\Http\Controllers\SampleOneController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('sampleones', SampleOneController::class)->names('sampleone');
});
