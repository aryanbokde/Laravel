<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\FormController;

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

Route::view('/form', "form"); 
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view("about", []);
});
Route::get('/users', [UsersController::class, 'loadView']);

Route::view('/form', "form"); 
Route::post('/form', [FormController::class, 'getForm']);



Route::view('/contact', "contact"); //first parameter url and second is blade-template-url.php


//Group Middleware 
// Route::group(['middleware' => ['protectedPage']], function () {
//     Route::view('/form', "form"); 
//     Route::get('/', function () {
//         return view('welcome');
//     });
//     Route::get('/about', function () {
//         return view("about", []);
//     });
//     Route::get('/users', [UsersController::class, 'loadView']);
//     Route::view('/form', "form"); 
//     Route::post('/form', [FormController::class, 'getForm']);
// });


// // Single Page middleware 
// Route::get('/about', function () {
//     return view("about");
// })->middleware('protectedPage');