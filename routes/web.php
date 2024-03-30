<?php

use App\Http\Controllers\FAQSController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



//Admin Routes
Route::group(['middleware' => ['auth','role']], function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    //FAQ
    Route::get('/faqs', [FAQSController::class, 'index'])->name('faqs');
    Route::get('/faqs/status/{id}', [FAQSController::class, 'status'])->name('status');
    Route::get('/faqs/add', [FAQSController::class, 'faqaAdd'])->name('faqs.add');
    Route::post('/faqs/insert', [FAQSController::class, 'faqsInsert'])->name('faqs.insert');
    Route::get('/faqs/delete/{id}', [FAQSController::class, 'faqsDelete'])->name('faqs.delete');
    Route::get('/faqs/edit/{id}', [FAQSController::class, 'faqsEdit'])->name('faqs.edit');
    Route::post('/faqs/update/{id}',[FAQSController::class, 'faqsUpdate'])->name('faqs.update');
    //Blog Post
    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/blog/add', [BlogController::class, 'blogAdd'])->name('blog.add');
    //Blog Category
    Route::get('/blog/category', [BlogController::class, 'category'])->name('category');
    Route::get('/blog/category/add', [BlogController::class, 'categoryAdd'])->name('category.add');
    Route::post('/blog/category/insert', [BlogController::class, 'categoryInsert'])->name('category.insert');
});