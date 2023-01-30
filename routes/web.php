<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\PermissionController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/developer',[DeveloperController::class,'index'])->name('Developer');
Route::get('/developer/create',[DeveloperController::class,'create']);
Route::post('/developer/store',[DeveloperController::class,'store']);

Route::get('/permission',[PermissionController::class,'index'])->name('Permission');
Route::get('/create_permission',[PermissionController::class,'create']);
Route::post('/create_permission',[PermissionController::class,'store']);
Route::get('/sick_permission',[PermissionController::class,'sick']);
Route::get('/permit_permission',[PermissionController::class,'permit']);
Route::get('/leave_permission',[PermissionController::class,'leave']);
