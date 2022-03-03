<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\AlumnoController;

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
    return view('auth.login');
});
    Route::get('/tutor/', function () {
        return view('tutor.index');
    });
Route::get('/tutor/create', [TutorController::class,'create']);

Route::get('/alumno/', function () {
    return view('alumno.index');
});
Route::get('/alumno/create', [AlumnoController::class,'create']);

Route::resource('tutor',TutorController::class)->middleware('auth');
Route::resource('alumno',AlumnoController::class)->middleware('auth');
Auth::routes();

Route::get('/home', [TutorController::class, 'index'])->name('home');
Route::group(['middleware'=>'auth'],function () {
    Route::get('/', [TutorController::class, 'index'])->name('home');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
