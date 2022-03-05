<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ExprianceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ContactController;

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


Route::get('/',[FrontendController::class,'index'])->name('index');

//Banner route start
Route::prefix('banner')->group(function(){
    Route::get('/index',[AdminController::class,'index'])->name('banner.index');
    Route::get('/edit/{id}',[AdminController::class,'edit']);
    Route::put('/update/{id}',[AdminController::class,'update'])->name('banner.update');
});
//banner route end

//service route
Route::prefix('service')->group(function(){
    Route::get('/create',[ServicesController::class,'create'])->name('service.create');
    Route::post('/store',[ServicesController::class,'store'])->name('service.store');
    Route::get('/index',[ServicesController::class,'index'])->name('service.index');
    Route::get('/edit/{id}',[ServicesController::class,'edit'])->name('service.edit');
    Route::put('/update/{id}',[ServicesController::class,'update'])->name('service.update');
    Route::get('/delete/{id}',[ServicesController::class,'destroy'])->name('service.delete');
});
//service end

//About Route start
Route::prefix('about')->group(function(){
    Route::get('/allinfo',[AboutController::class,'index'])->name('about.info');
    Route::get('/edit/{id}',[AboutController::class,'edit'])->name('about.edit');
    Route::post('/update/{id}',[AboutController::class,'update'])->name('about.update');
});
//end arout route

//skill route start
Route::prefix('/skill')->group(function(){
    Route::get('/sk_create',[SkillController::class,'create'])->name('skill.create');
    Route::post('/store',[SkillController::class,'store'])->name('skill.store');
    Route::get('/index',[SkillController::class,'index'])->name('skill.index');
    Route::get('/edit/{id}',[SkillController::class,'edit'])->name('skill.edit');
    Route::post('/update/{id}',[SkillController::class,'update'])->name('skill.update');
    Route::get('/delete/{id}',[SkillController::class,'delete'])->name('skill.delete');
});
//skill route end

//expriance start
Route::prefix('/expriance')->group(function(){
    Route::get('/create',[ExprianceController::class,'create'])->name('expriance.create');
    Route::post('/store',[ExprianceController::class,'store'])->name('expriance.store');
    Route::get('/index',[ExprianceController::class,'index'])->name('expriance.index');
    Route::get('/edit/{id}',[ExprianceController::class,'edit'])->name('expriance.edit');
    Route::post('/update/{id}',[ExprianceController::class,'update'])->name('expriance.update');
    Route::get('/delete/{id}',[ExprianceController::class,'delete'])->name('expriance.delete');
});
//expriance end

//Route of Teamp
Route::prefix('/team')->group(function(){
    Route::get('/create',[TeamController::class,'create'])->name('team.create');
    Route::post('/store',[TeamController::class,'store'])->name('team.store');
    Route::get('/index',[TeamController::class,'index'])->name('team.index');
    Route::get('/edit/{id}',[TeamController::class,'edit'])->name('team.edit');
    Route::post('/update/{id}',[TeamController::class,'update'])->name('team.update');
    Route::get('/delete/{id}',[TeamController::class,'delete'])->name('team.delete');
});
//end of Team

//contact route start
Route::prefix('/contact')->group(function(){
    Route::post('/send',[ContactController::class,'send'])->name('contact.send');
    Route::get('/create',[ContactController::class,'create'])->name('contact.create');
    Route::post('/store',[ContactController::class,'store'])->name('contact.store');
    Route::get('/index',[ContactController::class,'index'])->name('contact.index');
    Route::get('/edit/{id}',[ContactController::class,'edit'])->name('contact.edit');
    Route::post('/update/{id}',[ContactController::class,'update'])->name('contact.update');
    Route::get('/delete/{id}',[ContactController::class,'delete'])->name('contact.delete');
});
//contact rout end

Auth::routes();

Route::get('/admin', [HomeController::class, 'index'])->name('home');
