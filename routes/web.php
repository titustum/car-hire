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
//clients home page
Route::get('/admin/index',function(){
    return view('/admin/index');
});
//home when loggedin
//changed from
// Route::get('/', [CarsController::class, 'index']); 
// to
Route::get('admin/index', [CarsController::class, 'index']); 

Route::get('brands', [CarsController::class, 'brand']);
Route::get('types', [CarsController::class, 'Types']);
Route::get('listings', [CarsController::class, 'Listing']);
Route::get('admin/transactions', [CarsController::class, 'Transaction']);
Route::get('admin/clients', [CarsController::class, 'Clients']);
Route::get('setting', [CarsController::class, 'Setting']);
Route::get('profile', [CarsController::class, 'Profile']);
//login
Route::get('admin/login', [CarsController::class, 'Login']);
//register
Route::get('admin/register', [CarsController::class, 'register']);
//logout
Route::get('logout',[CarsController::class, 'Logout']);


