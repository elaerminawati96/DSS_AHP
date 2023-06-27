<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AHPController;

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
    Route::get('/', [AHPController::class, 'index'])->name('index');
    Route::get('/schedules', [AHPController::class, 'schedules'])->name('schedules');
    Route::get('/schedules/create', [AHPController::class, 'create'])->name('schedules.create');
    
// Route::get('/', function () {
//     // return redirect(route('dashboard'));
//     return view('welcome');
// });

// Route::get('/login', function () {
//     return view('auth.login');
// });

// Route::get('/forgot-password', function () {
//     return view('auth.forgot-password');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// Route::get('/users/create', function () {
//     return view('users.create');
// })->name('users.create');
// Route::get('/employee/create', function () {
//     return view('employee.create');
// })->name('employee.create');
