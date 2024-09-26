<?php

use Illuminate\Support\Facades\Route;

// Import PageController
use App\Http\Controllers\PagesController;

// Import ReportsController
use App\Http\Controllers\ReportsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function(){
    return 'Hello all...';
    // return '<h1>Hello all...<h1>';
    // return 5+7;
});

Route::get('/user/{id}', function($id){
    return'Welcome user: '.$id;
});

/*
Route::get('/calculate/{num1}/{num2}', function($a,$b) {
    return 'Result: '.($a+$b);
})->name('calculate');
*/

//PageController - calculate
Route::get('/calculate/{num1}/{num2}', [PagesController::class, 'calculate']);

//PageController - about
Route::get('/about', [PagesController::class, 'about']);

//PageController - admin
Route::get('/admin', [PagesController::class, 'admin']);

//PageController - service
Route::get('/services', [PagesController::class, 'service']);

//ReportsController - reports
Route::resource('/reports', ReportsController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
