<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\HomeController::class)->name('home');


Route::resource('projects', \App\Http\Controllers\ProjectController::class);
Route::resource('releases', \App\Http\Controllers\ReleaseController::class);
Route::resource('features', \App\Http\Controllers\FeatureController::class);
