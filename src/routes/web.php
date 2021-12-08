<?php

use Illuminate\Support\Facades\Route;
use AR\Calculator\Controllers as Controller;

Route::get("calculator", [
    Controller\CalculatorController::class,
    "index"
]);

Route::post("/result", [
        Controller\CalculatorController::class,
        "result"
    ])->name("calculated-result");
