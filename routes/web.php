<?php
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;

 


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

Route::resource('/userdetails', UserController::class);
Route::view('register','auth.register')->middleware('guest');

Route::post('store',[RegisterController::class,'store']);
Route::view('home','home')->middleware('auth');
Route::view('login','auth.login')->middleware('guest')->name('login');
Route::post('authenticate',[LoginController::class,'authenticate']);
Route::get('logout',[LoginController::class,'logout']);

//Route::controller(UserController::class)->group(function(){
    
    //Route::post('userdetails', 'import')->name('userdetails');
//});

Route::post('/userdetails',[UserController::class,'import'])->name('userdetails');
Route::resource("/coursedetails", CourseController::class);

Route::controller(CourseController::class)->group(function(){
    
    Route::post('coursedetails', 'import')->name('coursedetails');
});
