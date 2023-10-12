<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

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

// admin route
// Route::get('admin', function () {
//     return "welcom Mr admin";
// });

// Route::namespace('Admin')->group(function () {
//     Route::get('admin', [AdminController::class, 'index']);
// });



// Route::prefix('admin')->group(function () {
//     Route::get('show', [AdminController::class, 'show']);
//     Route::get('edit', [AdminController::class, 'edit']);
//     Route::get('delete', [AdminController::class, 'set']);
// });

// Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
//     Route::get('show', [AdminController::class, 'show']);
//     Route::get('edit', [AdminController::class, 'edit']);
//     Route::get('delete', [AdminController::class, 'set']);
// });

// Route::get('admin', function () {
//     return 'work';
// })->middleware('auth');

// Route::group(['namespace' => 'Admin'], function () {
//     Route::get('admin', [AdminController::class, 'index']);
//     Route::get('admin2', [AdminController::class, 'index2']);
//     Route::get('admin3', [AdminController::class, 'index3']);
// });

// Route::get('login', function () {
//     return "you can't access this route";
// })->name('login');
