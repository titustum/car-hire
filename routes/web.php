<?php

use App\Http\Controllers\CarsController;
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
    return view('index');
});
Route::get('login',function(){
    return view('login');
});
Route::get('register',function(){
    return view('register');
});
Route::get('brands', [CarsController::class, 'brand']);
Route::get('types', [CarsController::class, 'Types']);
Route::get('listings', [CarsController::class, 'Listing']);
Route::get('transactions', [CarsController::class, 'Transaction']);
Route::get('clients', [CarsController::class, 'Clients']);
Route::get('setting', [CarsController::class, 'Setting']);
Route::get('profile', [CarsController::class, 'Profile']);
//login
Route::get('admin/login', [CarsController::class, 'Login']);
//register
Route::get('admin/register', [CarsController::class, 'register']);



