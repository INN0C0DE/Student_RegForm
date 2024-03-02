<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentInfoController; 
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('public.home');
});
Route::get('/about', function () {
    return view('public.about');
})->name('about');
Route::get('/login', function () {
    return view('public.login');
});
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');