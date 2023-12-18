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

Route::get('/register',[Form::class, 'register']);
Route::post('/register',[Form::class, 'register_data']);
Route::get('/user-view',[Form::class, 'user_view'])->name('user-view');
Route::get('/user-dlt/{id}',[Form::class, 'dlt'])->name('user-dlt');
Route::get('/user-update/{id}',[Form::class, 'update'])->name('user-update');
Route::post('/user-edit/{id}',[Form::class, 'edit'])->name('edit');


Auth::routes();

Route::get('/register', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
