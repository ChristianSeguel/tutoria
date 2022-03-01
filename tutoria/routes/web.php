<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TutorController;

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
    return view('welcome');
});
    Route::get('/tutor/', function () {
        return view('tutor.index');
    });
Route::get('/tutor/create', [TutorController::class,'create']);

Route::resource('tutor',TutorController::class);
