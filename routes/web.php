<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FamilyDataController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ViolationController;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

    Route::get('/index', [ViolationController::class, 'index'])->name('index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('employee', [EmployeeController::class, 'index'])->name('employee.index');
Route::get('employee/create', [EmployeeController::class, 'create'])->name('employee.create');
Route::post('employee/create', [EmployeeController::class, 'store'])->name('employee.store');
Route::get('employee/{id_number}/edit', [EmployeeController::class, 'edit'])->name('employee.edit');
Route::put('employee/{id_number}/edit', [EmployeeController::class, 'update'])->name('employee.update');
Route::get('employee/{id_number}/delete', [EmployeeController::class, 'destroy'])->name('employee.destroy');
Route::patch('employee/{id_number}/archive', [EmployeeController::class, 'archive']);
Route::get('employee/archived', [EmployeeController::class, 'showArchived']);



Route::get('violations', [ViolationController::class, 'index'])->name('violations.index');
Route::get('violations/create', [ViolationController::class, 'create'])->name('violations.create');
Route::post('violations', [ViolationController::class, 'store'])->name('violations.store');
Route::get('violations/{violation}/edit', [ViolationController::class, 'edit'])->name('violations.edit');
Route::put('violations/{violation}', [ViolationController::class, 'update'])->name('violations.update');
Route::delete('violations/{violation}', [ViolationController::class, 'destroy'])->name('violations.destroy');


Route::resource('family-data', FamilyDataController::class);


Route::resource('attendance', AttendanceController::class);


