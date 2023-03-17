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
Route::get('/permission/history',[PermissionController::class,'indexHistory']);

Route::get('/create_permission',[PermissionController::class,'create']);
Route::post('/create_permission',[PermissionController::class,'store']);

Route::get('/sick_permission',[PermissionController::class,'sick']);
Route::get('/edit_sick/{id}',[PermissionController::class,'edit_sick']);
Route::post('/save_update_sick/{id}',[PermissionController::class,'update_sick']);
Route::post('/cancel/sick/{id}',[PermissionController::class,'cancel_sick']);

Route::get('/permit_permission',[PermissionController::class,'permit']);
Route::get('/edit_permit/{id}',[PermissionController::class,'edit_permit']);
Route::post('/save_update_permit/{id}',[PermissionController::class,'update_permit']);
Route::post('/cancel/permit/{id}',[PermissionController::class,'cancel_permit']);

Route::get('/leave_permission',[PermissionController::class,'leave']);
Route::get('/edit_leave/{id}',[PermissionController::class,'edit_leave']);
Route::post('/save_update_leave/{id}',[PermissionController::class,'update_leave']);
Route::post('/cancel/leave/{id}',[PermissionController::class,'cancel_leave']);

Route::get('/permission_history',[PermissionController::class,'history']);

Route::get('/accepted',[PermissionController::class,'accepted']);
Route::post('/accepted',[PermissionController::class,'store_accepted']);

Route::get('/edit_permission_acceptation/{id}',[PermissionController::class,'acceptation_form']);
Route::post('/save_acceptation/{id}',[PermissionController::class,'update_acceptation']);

Route::get('/rejected',[PermissionController::class,'rejected']);
Route::post('/rejected',[PermissionController::class,'store_rejected']);

Route::get('/edit_permission_rejection/{id}',[PermissionController::class,'rejection_form']);
Route::post('/save_rejection/{id}',[PermissionController::class,'update_rejection']);

