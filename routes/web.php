<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\D_B;

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
    return view('index');
});

Route::get('home', function () {
    return view('index');
});
Route::view('math','Student/math');
//Route::view('TOC','Student/TOC');
Route::view('OOP','Student/OOP');
Route::view('DBC','Student/DBC');
Route::view('EM','Student/EM');
Route::view('DL','Student/DL');
Route::view('ECT','Student/ECT');

// Route::get('TOC', function () {
//     return view('Student/TOC');
// });

Route::get('login', function () {
    return view('admin/login');
});

Route::get('A-home', function () {
    return view('admin/Admin_home');
});

Route::get('A-math', function () {
    return view('admin/math');
});

Route::get('TOC',[D_B::class, 'select']);