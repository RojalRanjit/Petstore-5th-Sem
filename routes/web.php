<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;


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

Route::get('/', [HomeController::class, 'home'])->name('home');
// ->middleware(['auth']);

Route::get('/about', [HomeController::class, 'about'])->name('about');

Route::get('/service', [HomeController::class, 'service'])->name('service');

Route::get('/product', [HomeController::class, 'product'])->name('product');

Route::get('/blog', [HomeController::class, 'blog'])->name('blog');

Route::get('/login', [HomeController::class, 'login'])->name('login');

Route::get('/register', [HomeController::class, 'register'])->name('register');

Route::get('/adminDashboard', [HomeController::class, 'Dashboard'])->name('adminDashboard');
Route::get('/adminAddPetitems', [HomeController::class, 'AddPetitems'])->name('adminAddPetitems');
Route::post('/addItems', [HomeController::class, 'addItems'])->name('addItems');
Route::get('/Listofitems', [HomeController::class, 'Listofitems'])->name('Listofitems');
Route::get('/delete/{id}', [HomeController::class, 'deleteitem'])->name('deleteitem');
Route::get('/edit/{id}', [HomeController::class, 'edititem'])->name('edititem');
Route::post('/edit', [HomeController::class, 'edited'])->name('edited');



Route::post('/login', [UserController::class, 'loginUser'])->name('loginUser');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::post('/register', [UserController::class, 'registerUser'])->name('registerUser');


