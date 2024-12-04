<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
    
});

Route::get('/dashboard', function () {
    return view('dashboard');
    
});

Route::resource('tasks', TaskController::class);

Route::post('/dashboard', [DashboardController::class, 'store'])->name('dashboard.store');
