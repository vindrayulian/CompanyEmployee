<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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


Route::get('/employee',[EmployeeController::class, 'index'])->name('home_employee');
Route::get('/employee-tambah',[EmployeeController::class, 'tambah'])->name('employee_tambah');
Route::POST('/employee-create',[EmployeeController::class, 'create'])->name('employee_create');