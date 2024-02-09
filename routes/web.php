<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;





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

// Route::get('/', function () {
//     return view('website.pages.pages.password-reset');
// });

//front end
Route::get('/', [ViewController::class, 'home'])->name('/');
Route::get('/product-details', [ViewController::class, 'product_details'])->name('product-details');
//front end



//Authedication start
Route::group(['middleware'=>'redirect.authenticated'],function(){

    Route::get('/login', [AuthController::class, 'loginform'])->name('login');

    Route::get('/register', [AuthController::class, 'registerform'])->name('register');

    Route::get('/forgot-password', [AuthController::class, 'forgotform'])->name('forgot-password');
    Route::get('/password-reset/{email}/{token}', [AuthController::class, 'passwordresetform'])->name('password-reset');

});
Route::post('/register/post', [AuthController::class, 'register_post'])->name('register.post');
Route::post('/login', [AuthController::class, 'auth_login'])->name('auth.login');
Route::post('/forgot-password', [AuthController::class, 'forgotPassword'])->name('auth.forgot-password');
Route::post('/reset-password', [AuthController::class, 'password_reset'])->name('auth.reset');

Route::prefix('admin')->middleware(['LoginCheck'])->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/user-list', [AuthController::class, 'user_list'])->name('user-list');
    Route::get('/users-data', [AuthController::class, 'show_userlist'])->name('users.data');
    Route::post('/user-edit', [AuthController::class, 'users_edit'])->name('user-edit');
    Route::post('/user-update', [AuthController::class, 'user_update'])->name('user-update');
    Route::post('/user-delete', [AuthController::class, 'user_delete'])->name('user.delete');


    //product start
Route::get('/products', [ProductController::class, 'show_product'])->name('admin.product-list');
// Route::get('/admin/add-product', [ProductController::class, 'add_product'])->name('admin.add-product');
Route::post('/product-store', [ProductController::class, 'product_store'])->name('product-store');
Route::get('/product-fetchall', [ProductController::class, 'product_fetchAll'])->name('product-fetchAll');
Route::delete('/product-delete', [ProductController::class, 'product_delete'])->name('product-delete');
Route::get('/product-edit', [ProductController::class, 'product_edit'])->name('product-edit');
Route::post('/product-update', [ProductController::class, 'product_update'])->name('product-update');
//product end


    //category start
Route::get('/ajax-crud-datatable', [CategoryController::class, 'category']);
Route::get('/category-list', [CategoryController::class, 'category_list'])->name('category-list');
Route::post('/category-store', [CategoryController::class, 'store_category']);
Route::post('/category-edit', [CategoryController::class, 'edit_category']);
Route::post('/category-delete', [CategoryController::class, 'destroy_category']);
//category  end

});
Route::prefix('user')->middleware(['LoginCheck'])->group(function () {
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});





