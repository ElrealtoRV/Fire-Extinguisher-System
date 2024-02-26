<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SideBarController;
use App\Http\Controllers\Admin\TopBarController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RequestController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ExtinguisherController;




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


//SIDEBAR CONTROLLER
Route::get('/admin/sidebar', [SideBarController::class, 'SideDisplay'])->name('admin.sidebar');
//TOPBAR CONTROLLER
Route::get('/admin/topbar', [TopBarController::class, 'TopDisplay'])->name('admin.topbar');
Route::get('/admin/topbar', [TopBarController::class, 'showUsername'])->name('admin.topbar');
//ADMIN DASHBOARD CONTROLLER
Route::get('/admin/dashboard', [DashboardController::class, 'showDashboard'])->name('admin/dashboard');

//ADMIN User Controller

    Route::get('/admin/user', [UserController::class, 'UserDisplay'])->name('admin/user');
    Route::post('/admin/user', [UserController::class, 'store'])->name('admin.store.user');
    Route::get('/admin/CreateNew', [UserController::class, 'CreateUserDisplay'])->name('admin/CreateNew');
    Route::get('edit-user/{id}', [UserController::class, 'edit'])->name('admin/edit.user');
    Route::put('update-user/{id}', [UserController::class, 'update'])->name('admin/update.user');
    Route::get('/user/{id}', [UserController::class, 'ViewUser'])->name('admin/viewuser');
    Route::get('admin/user/{id}', [UserController::class, 'destroy'])->name('admin.delete.user');
    Route::delete('admin/user/{id}', [UserController::class, 'destroy'])->name('admin.delete.user');
    Route::get('/admin/filter/users', [UserController::class, 'filterUsers'])->name('admin.filter.users');
    Route::get('/admin/dashboard', [UserController::class, 'DashUserDisplay']);
    Route::get('/admin/dashboard', [UserController::class, 'DashfilterUsers']);

//ADMIN Request Controller

    Route::get('/admin/request', [RequestController::class, 'ReqDisplay'])->name('admin/request');
    Route::get('admin/approve/user/{id}', [RequestController::class, 'approve'])->name('admin.approve.user');
    Route::get('admin/deny/user/{id}', [RequestController::class, 'Deny'])->name('admin.deny.user');

    Route::get('/admin/login', [LoginController::class, 'showAdminLoginForm'])->name('Auth/admin/login');
    Route::post('/admin/login', [LoginController::class, 'adminLogin']);
    Route::get('/admin/logout', [LoginController::class, 'logout'])->name('admin/logout');

    Route::get('/Admin/logout', [LoginController::class, 'logout'])->name('Admin/logout');


//ADMIN Setting Controller
Route::get('/admin/settingView', [SettingController::class, 'SettingDisplay'])->name('admin/settingView');

//ADMIN fireextingushie table
Route::get('/admin/extinguisher', [ExtinguisherController::class, 'ExtDisplay'])->name('admin/extinguisher');
Route::get('/admin/Addnew', [ExtinguisherController::class, 'AddFire'])->name('admin/Addnew');
Route::post('/admin/extinguisher/addnew', [ExtinguisherController::class, 'store'])->name('admin.extinguisher.addnew');
Route::get('/admin/extinguisher/add', [ExtinguisherController::class, 'show'])->name('admin.extinguisher.add');
