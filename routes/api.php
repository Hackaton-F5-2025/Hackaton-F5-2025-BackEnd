<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ReplacementController;
use App\Http\Controllers\Api\ApplianceController;

Route::get("/replacement", [ReplacementController::class, "index"])->name("apiireplacement");
Route::get("/replacement/{id}", [ReplacementController::class, "show"])->name("show");
Route::post("/replacement", [ReplacementController::class, "store"])->name("store");
Route::put("/replacement/{id}", [ReplacementController::class, "update"])->name("update");
Route::delete("/replacement/{id}", [ReplacementController::class, "destroy"])->name("destroy");

Route::get("/liance", [ApplianceController::class, "index"])->name("apiiliance");
Route::get("/liance/{id}", [ApplianceController::class, "show"])->name("apiishow");
Route::post("/liance", [ApplianceController::class, "store"])->name("apiistore");
Route::put("/liance/{id}", [ApplianceController::class, "update"])->name("apiiupdate");
Route::delete("/liance/{id}", [ApplianceController::class, "destroy"])->name("apiidestroy");