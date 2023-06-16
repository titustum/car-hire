<?php

use App\Http\Controllers\CarsController;
use Illuminate\Support\Facades\DB;
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
    $cars = DB::select("SELECT * FROM cars WHERE car_type = '4X4'");
        return view('index',compact('cars'));
    // return view('index');
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
Route::get('admin/transactions', [CarsController::class, 'Transaction'])->middleware(App\Http\Middleware\AuthCheck::class);
Route::get('admin/clients', [CarsController::class, 'Clients'])->middleware(App\Http\Middleware\AuthCheck::class);
Route::get('setting', [CarsController::class, 'Setting']);
Route::get('profile', [CarsController::class, 'Profile']);
//login
Route::get('admin/login', [CarsController::class, 'Login']);
//register
Route::get('admin/register', [CarsController::class, 'register']);
//logout
Route::get('logout',[CarsController::class, 'Logout']);

//4x4 contents
Route::get('4X4s',[CarsController::class, 'power']);
//saloon contents
Route::get('saloons',[CarsController::class, 'saloon']);
//trucks contents
Route::get('trucks',[CarsController::class, 'truck']);
//saloon contents
Route::get('bikes',[CarsController::class, 'bike']);
//proceed to bookings page
Route::get('bookings/{id}',[CarsController::class, 'bookings']);
//paersonal details page
Route::get('proceed/personal-details',function(){
    $details = session()->get('details',[]);
    $details = [
        "car_image"=>'image',
        "car_brand"=>'Toyota',
        "car_name"=>'Landcruiser L-300',
        "price"=>32000,
    ];

    session()->put('details',$details);
    return view('personal_details');
});




