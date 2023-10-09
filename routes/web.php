<?php

use App\Http\Controllers\front\majorsController;
use App\Http\Controllers\front\homeController;
use App\Http\Controllers\front\doctorsController;
use App\Http\Controllers\front\contactsController;
use App\Http\Controllers\admin\admin_homeController;
use App\Http\Controllers\admin\BookingController;
use App\Http\Controllers\admin\admin_majorsController;
use App\Http\Controllers\admin\admin_doctorsController;
use App\Http\Controllers\admin\admin_contactsController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Models\product;
use App\Models\category;


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

Route::get('/',[homeController::class, 'index'])->name('front.pages.home');
Route::get('/majors',[majorsController::class, 'index'])->name('front.pages.majors');
Route::get('/doctors',[doctorsController::class, 'index'])->name('front.pages.doctors');
Route::get('/showDoctor',[doctorsController::class, 'show'])->name('front.pages.doctors.show');
Route::get('/login',[loginController::class, 'index'])->name('login');
Route::get('/register',[registerController::class,'index'])->name('register');
Route::get('/contacts',[contactsController::class, 'index'])->name('front.pages.contacts');
Route::get('/admin_home',[admin_homeController::class, 'index'])->name('admin.pages.home');
Route::get('/booking',[BookingController::class, 'index'])->name('admin.pages.booking');
Route::get('/admin_majors',[admin_majorsController::class, 'index'])->name('admin.pages.majors');
Route::get('/admin_doctors',[admin_doctorsController::class, 'index'])->name('admin.pages.doctors');
Route::get('/admin_contacts',[admin_contactsController::class, 'index'])->name('admin.pages.contacts');

// Route::get('/users', [userController::class ,'index'] );
// Route::get('/users/{id}', [userController::class ,'show'] );
// Route::get('/products', function(){
//     $products=product::get();
//     return view('products', ['products' => $products]);
// });
// Route::get('/categories', function(){
//     $categories=category::tosql();
//     dd($categories);
//     // return view('categories', ['categories' => $categories]);
// });


