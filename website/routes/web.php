<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customcontroler;
use App\Http\Controllers\singleAction;
use App\Http\Controllers\Form;
use App\Http\Controllers\employe;
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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::get('/about/{name}/{id}', function(string $name, $id){
//    echo "$name, $id";
// });

// route::get('/about', function(){
//     return view('about');
// });
// route::get('/contact', function(){
//     return view('contact');
// });


// Route::get('/', [customcontroller::class,'home']);
// Route::get('/about', [customcontroller::class,'about']);
// Route::get('/contact', [customcontroller::class,'contact']);

// Route::controller(customcontroler::class)->group(function(){
//     Route::get('/{name}/{id?}', 'home')->name('home');
//     // Route::get('/welcome', 'home')->name('home');
//     Route::get('/about', 'about')->name('about');
//     // Route::get('/contact', 'contact')->name('contact');
// });
// Route::get('/contact', singleAction::class)->name('contact');

// Route::get('/register',[Form::class, 'register']);
// Route::post('/register',[Form::class, 'register_data']);

// Route::get('/user-view',[Form::class, 'user_view']);

Route::get('/employe',[Form::class, 'employe']);
Route::post('/employe',[Form::class, 'employe_data']);

Route::get('/emp-view',[Form::class, 'emp_view']);