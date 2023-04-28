<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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
 



Route::get('/home',[homeController::class,'redirect'])->middleware('auth','verified');

Route::get('/',[homeController::class,'index']);

Route::get('/add_doctor_view',[AdminController::class,'addview']);

Route::post('/upload_doctor',[AdminController::class,'upload']);
Route::post('/appointment',[HomeController::class,'appointment']);
Route::get('/myappointment',[HomeController::class,'myappointment']);
Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);
Route::get('/showappointment',[AdminController::class,'showappointment']);

Route::get('/approved/{id}',[AdminController::class,'approved']);

Route::get('/canceled/{id}',[AdminController::class,'canceled']);

Route::get('/showdoctor',[AdminController::class,'showdoctor']);

Route::get('/deletedoctor/{id}',[AdminController::class,'deletedoctor']);

Route::get('/updatedoctor/{id}',[AdminController::class,'updatedoctor']);


Route::post('/editdoctor/{id}',[AdminController::class,'editdoctor']);


Route::get('/emailview/{id}',[AdminController::class,'emailview']);

Route::post('/sendemail/{id}',[AdminController::class,'sendemail']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
