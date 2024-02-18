<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SideBarController;
use App\Http\Controllers\TopBarController;
use App\Http\Controllers\EditAccountController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\RequestController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ExtinguisherController;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ProfileController;



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
Route::middleware(['auth'])->group(function () {
//HOME CONTROLLER
Route::get('/home', [HomeController::class, 'homeDisplay'])->name('home');
//SIDEBAR CONTROLLER
Route::get('/sidebar', [SideBarController::class, 'SideDisplay'])->name('sidebar');
//TOPBAR CONTROLLER
Route::get('/topbar', [TopBarController::class, 'TopDisplay'])->name('topbar');
Route::get('/topbar', [TopBarController::class, 'showUsername'])->name('topbar');
//ADMIN DASHBOARD CONTROLLER
Route::get('/admin/dashboard', [DashboardController::class, 'DashDisplay'])->name('dashboard');
Route::get('/admin/dashboard', [DashboardController::class, 'showDashboard']);
Route::post('/admin/add-todo', [DashboardController::class, 'addTodo']);
//ADMIN User Controller

    Route::get('/admin/user', [UserController::class, 'UserDisplay'])->name('admin/user');
    Route::post('/admin/user', [UserController::class, 'store'])->name('admin.store.user');
    Route::get('/admin/CreateNew', [UserController::class, 'CreateUserDisplay'])->name('CreateNew');
    Route::get('edit-user/{id}', [UserController::class, 'edit'])->name('admin/edit.user');
    Route::put('update-user/{id}', [UserController::class, 'update'])->name('admin/update.user');
    Route::get('/user/{id}', [UserController::class, 'ViewUser'])->name('admin/viewuser');
    Route::get('admin/user/{id}', [UserController::class, 'destroy'])->name('admin.delete.user');
    Route::delete('admin/user/{id}', [UserController::class, 'destroy'])->name('admin.delete.user');
    Route::get('/admin/filter/users', [UserController::class, 'filterUsers'])->name('admin.filter.users');

//ADMIN Request Controller

    Route::get('/admin/request', [RequestController::class, 'ReqDisplay'])->name('admin/request');
    Route::get('admin/approve/user/{id}', [RequestController::class, 'approve'])->name('admin.approve.user');
    Route::get('admin/deny/user/{id}', [RequestController::class, 'Deny'])->name('admin.deny.user');

//fire extinguisher.
Route::get('/extinguisher', [ExtinguisherController::class, 'ExtDisplay'])->name('extinguisher');

//Report Controller
Route::get('/report', [ReportController::class, 'ReportDisplay'])->name('report');
//Edit Account Controller
Route::get('/EditAccount', [EditAccountController::class, 'AccountDisplay'])->name('Setting/EditAccount');
});

Route::group(['namespace' => 'Admin'], function () {
    // Other routes

    Route::get('/admin/login', [LoginController::class, 'showAdminLoginForm'])->name('Auth/admin/login');
    Route::post('/admin/login', [LoginController::class, 'adminLogin']);
    Route::get('/admin/logout', [LoginController::class, 'logout']);
});

// Route::get('/admin/login', [LoginController::class, 'LoginDisplay'])->name('Auth/admin/login')->middleware('guest');
// Route::post('/admin/login', [LoginController::class, 'processLogin'])->name('dashboard');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
//Signup
Route::get('/signup', [SignupController::class, 'SignDisplay'])->name('Auth/signup')->middleware('guest');
Route::post('/signup', [SignupController::class, 'store'])->name('signup.store');

//TODO LIST
Route::get('/todos', [TodoController::class, 'index']);
Route::post('/todos', [TodoController::class, 'store']);

//Acount Controller
Route::get('/account',[AccountController::class, 'AccountDisplay'])->name('account');   
Route::get('/account', [AccountController::class, 'storeAccount'])->name('account');
Route::post('/update-profile', [AccountController::class, 'updateProfile'])->name('update.profile');

//Profile Controller
Route::post('/update-profile-photo', [ProfileController::class, 'updatePhoto'])->name('updateProfilePhoto');

//ADMIN Setting Controller
Route::get('/admin/settingView', [SettingController::class, 'SettingDisplay'])->name('admin/settingView');