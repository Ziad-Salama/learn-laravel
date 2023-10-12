<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use function PHPUnit\Framework\isNull;

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
    return view('welcome');
});


// user route
// Route::get('users', function () {
//     return view('users');
// });

// required parameter
// Route::get('client/{id}', function ($id) {
//     return "Client id: " . $id;
// })->name('client');

// optional parameter
// Route::get('product/{id?}', function ($id = null) {
//     // check the id is empty
//     if (empty($id)) {
//         return "Hallow The Product";
//     }
//     return "Product Id: " . $id;
// })->name('product');

// Route::get('show', [UserController::class, 'show']);

// Route::resource('client', ClientController::class);

// Route::get('users', [UserController::class, 'show']);


// Route::get('show', [UserController::class, 'show']);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')
    ->middleware('verified');
