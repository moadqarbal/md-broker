<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

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
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }
    return view('admin.users.login');
});


// Admin Routes - Only accessible by 'su'
//Uesrs
Route::get('/admin/users/add', [UserController::class, 'create'])->name('users.create')->middleware('superuser');
Route::get('/admin/users/', [UserController::class, 'index'])->name('users.index')->middleware('superuser');
Route::post('/admin/users/store', [UserController::class, 'store'])->name('users.store')->middleware('superuser');
Route::get('/admin/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit')->middleware('superuser');
Route::put('/admin/users/{id}', [UserController::class, 'update'])->name('users.update')->middleware('superuser');
Route::get('/admin/users/{id}', [UserController::class, 'show'])->name('users.show')->middleware('superuser');
Route::delete('/admin/users/{id}', [UserController::class, 'destroy'])->name('users.destroy')->middleware('superuser');


// Accessible by both 'su' and 'admin'
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('admin'); // Change middleware if needed
Route::get('/lockscreen', [UserController::class, 'lockscreen'])->name('users.lockscreen')->middleware('admin');
Route::post('/unlock', [UserController::class, 'unlock'])->name('users.unlock')->middleware('admin');;
Route::get('/mlogout', [UserController::class, 'logout'])->name('users.logout')->middleware('admin');
Route::get('/admin/myprofile', [UserController::class, 'editProfile'])->name('admin.myprofile')->middleware('admin');;
Route::put('/admin/myprofile', [UserController::class, 'updateProfile'])->name('admin.myprofile.update')->middleware('admin');;


// Accessible for all 
Route::get('/mlogin', [UserController::class, 'showLoginForm'])->name('admin.login.form')->middleware('guest');
Route::post('/mlogin', [UserController::class, 'login'])->name('users.login')->middleware('guest');


Route::get('/unauthorized', function () {
    return view('admin.status.unauthorized');
})->name('unauthorized');
