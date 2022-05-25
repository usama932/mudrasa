<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\EnrollController;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\InstructorsController;
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

Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard',[HomeController::class,'index' ] )->name('dashboard');
});
Route::resource('enroll', EnrollController::class);
Route::resource('students', StudentController::class);
Route::resource('courses', CourseController::class);
Route::resource('instructors', InstructorsController::class);

require __DIR__.'/auth.php';
