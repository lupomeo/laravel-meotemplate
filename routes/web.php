<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UsersmController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('students', [StudentController::class, 'index'])->name('students');
    Route::get('students/list', [StudentController::class, 'getStudents'])->name('students.list');
    Route::post('edit-product', [StudentController::class, 'edit']);
    Route::post('store-product', [StudentController::class, 'store']);
    Route::post('delete-product', [StudentController::class, 'destroy']);
    Route::get('usersm', [UsersmController::class, 'index'])->name('usersm');
    Route::get('usersm/list', [UsersmController::class, 'getUsersm'])->name('usersm.list');
    Route::post('store-user', [UsersmController::class, 'store']);
    Route::post('delete-user', [UsersmController::class, 'destroy']);
    Route::post('edit-usersm', [UsersmController::class, 'edit']);
    Route::post('save-profile', [UsersmController::class, 'saveprofile']);
});

// useless routes
// Just to demo sidebar dropdown links active states.
Route::get('/buttons/text', function () {
    return view('buttons-showcase.text');
})->middleware(['auth'])->name('buttons.text');

Route::get('/buttons/icon', function () {
    return view('buttons-showcase.icon');
})->middleware(['auth'])->name('buttons.icon');

Route::get('/buttons/text-icon', function () {
    return view('buttons-showcase.text-icon');
})->middleware(['auth'])->name('buttons.text-icon');

require __DIR__ . '/auth.php';
