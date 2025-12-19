<?php

use Illuminate\Support\Facades\Route;
use Modules\Bubd\App\Http\Controllers\BubdController;

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('bubds', BubdController::class)->names('bubd');
});
