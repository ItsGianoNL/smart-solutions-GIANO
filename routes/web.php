<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pagina', function () {
    $numbers = [
        "een",
        "twee",
        "drie",
    ];
    return view('pagina', ['numbers' => $numbers]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/muziek', function () {
    return view('muziek');
});

Route::get('/overons', function () {
    return view('overons');
});



