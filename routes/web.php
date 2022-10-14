<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;

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

Route::get('/', [SchoolController::class, 'index']);
Route::get('/classes/{staffId}', [SchoolController::class, 'classes']);
Route::get('/students/{classId}', [SchoolController::class, 'students']);
// Route::prefix('school')->group(function () {
// 	Route::get('getAllStaff', [SchoolController::class, 'getAllStaff'])->name('getAllStaff');
// });

// Route::resource('school', SchoolController::class);