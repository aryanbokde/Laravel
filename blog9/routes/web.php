<?php

use App\Http\Controllers\MemberController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UsersController;
// use App\Http\Controllers\FormController;
// use App\Http\Controllers\AuthorController;
// use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserAuth;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SalaryController;
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

// Route::get('/users', [UsersController::class, 'index']);
// Route::get('/users', [UsersController::class, 'apiCall']);

// Route::post('users', [UsersController::class, 'testRequest']);
// Route::view('login', 'user1');


// Route::view('store', 'store');
// Route::post('store', [StoreController::class, 'dummy']);

Route::get('/login', function(){
    if (session()->has('email')) {
        return redirect('/profile');
    }
    return view('/login');
});

Route::get('/profile', function(){
    if (session()->has('email')) {
        return view('/profile');
    }
    return redirect('login');
});

Route::get('/logout', function(){
    if (session()->has('email')) {
        session()->pull('email', null);
    }
    return redirect('login');
});

Route::post('/login', [UserAuth::class, 'login']);

Route::view('/upload', 'upload');
Route::post('/upload', [UploadController::class, 'uploadPhoto']);

Route::get('/member', [MemberController::class, 'show']);

Route::view('/addmember', 'addmember');
Route::post('/addmember', [MemberController::class, 'addMember']);

Route::get('/deletemember/{id}', [MemberController::class, 'deletemember']);

Route::get('/edit/{id}', [MemberController::class, 'showMemberDetail']);
Route::post('/edit', [MemberController::class, 'updateMember']);

// Flight CRUD opration

Route::get('/flights', [FlightController::class, "showFlight"]);

Route::get('/editflight/{id}', [FlightController::class, "editFlight"]);
Route::post('/editflights', [FlightController::class, "updateFlight"]);

Route::view('/addflight', 'addflight');
Route::post('/addflight', [FlightController::class, 'addNewFlight']);

Route::get('/delflight/{id}', [FlightController::class, 'deleteFlight']);


//Employee 
Route::get('/employee', [ EmployeeController::class, 'showEmployee']);
Route::get('/addsalary', [SalaryController::class, 'getAllList']);
Route::post('/addsalary', [SalaryController::class, 'addSalary']);

Route::get('/employee/detail/{id}', [EmployeeController::class, 'employeeDetail']);








// Route::get('/about', function () {
//     return view("about");
// });

// Route::get('/users', [UsersController::class, 'loadView']);
// Route::view('/form', "form"); 
// Route::post('/form', [FormController::class, 'getForm']);
// Route::view('/contact', "contact"); //first parameter url and second is blade-template-url.php

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