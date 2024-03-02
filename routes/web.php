<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AuthadminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use Illuminate\Support\Facades\Route;

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

/* ------------  Admin login -------------- */
Route::get('/admin/login',[AuthadminController::class,'adminLogin'])->name('admin.login');
Route::post('/admin/login',[AuthadminController::class,'adminAuth'])->name('admin.auth');

/* ------------  Admin -------------- */
Route::group(['middleware' => 'admin'], function (){

    /* ------------  Admin user logout -------------- */
    Route::get('/admin/logout',[AuthadminController::class,'adminLogout'])->name('admin.logout');

    /* ------------  Admin dashboard-------------- */
    Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');

    /* ------------ user Admin list -------------- */
    Route::get('/admin/user/list',[AdminUserController::class,'adminUserList'])->name('admin.userList');
    Route::get('/admin/user/add',[AdminUserController::class,'addUser'])->name('admin.addUser');
    Route::post('/admin/user/add',[AdminUserController::class,'addNewUser'])->name('admin.addNewUser');

    Route::get('/admin/user/edit/{id}',[AdminUserController::class,'editUser'])->name('admin.editUser');
    Route::post('/admin/user/edit/{id}',[AdminUserController::class,'updateUser'])->name('admin.updateUser');
    Route::get('/admin/user/delete/{id}',[AdminUserController::class,'deleteUser'])->name('admin.deleteUser');

    /* ------------ category -------------- */
    Route::get('/admin/category/list',[CategoryController::class,'categoryList'])->name('category.list');
    Route::get('/admin/category/add',[CategoryController::class,'add'])->name('category.add');
    Route::post('/admin/category/insert',[CategoryController::class,'insert'])->name('category.insert');

    Route::get('/admin/category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
    Route::post('/admin/category/edit/{id}',[CategoryController::class,'update'])->name('category.update');
    Route::get('/admin/category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');

    /* ------------ sub category -------------- */
    Route::get('/admin/subcategory/list',[SubcategoryController::class,'subcategoryList'])->name('subcategory.list');
    Route::get('/admin/subcategory/add',[SubcategoryController::class,'add'])->name('subcategory.add');
//    Route::post('/admin/subcategory/insert',[SubcategoryController::class,'insert'])->name('subcategory.insert');
//
//    Route::get('/admin/subcategory/edit/{id}',[SubcategoryController::class,'edit'])->name('subcategory.edit');
//    Route::post('/admin/subcategory/edit/{id}',[SubcategoryController::class,'update'])->name('subcategory.update');
//    Route::get('/admin/subcategory/delete/{id}',[SubcategoryController::class,'delete'])->name('subcategory.delete');
});

Route::get('/', function () {
    return view('welcome');
});
