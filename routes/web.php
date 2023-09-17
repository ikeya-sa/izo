<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\Admin\AdminController;
Route::controller(AdminController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('index', 'index')->name('index');
    Route::get('admin', 'admin')->name('admin');
    Route::get('admin/create', 'add')->name('admin.add');
    Route::post('admin/create', 'create')->name('admin.create');
    Route::get('admin/edit', 'edit')->name('admin.edit');
    Route::post('admin/edit', 'update')->name('admin.update');
});

use App\Http\Controllers\Admin\NewsController;
Route::controller(NewsController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('news', 'news')->name('news');
    Route::get('news/create', 'add')->name('news.add');
    Route::post('news/create', 'create')->name('news.create');
    Route::get('news/edit', 'edit')->name('news.edit');
    Route::post('news/edit', 'update')->name('news.update');
});

use App\Http\Controllers\Admin\ContactController;
Route::controller(ContactController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('contact', 'contact')->name('contact');
    Route::get('contact/edit', 'edit')->name('contact.edit');
    Route::post('contact/edit', 'update')->name('contact.update');
});

Auth::routes();

Route::get('logout', 'Auth\LoginController@logout')->name('custom-logout');

use App\Http\Controllers\Visitor\VisitorController;
Route::controller(VisitorController::class)->group(function () {
    Route::get('index', 'index');
    Route::get('about', 'about');
    Route::get('discography', 'discography');
    Route::get('lesson', 'lesson');
    Route::get('contact', 'add');
    Route::post('contact', 'create');
    Route::get('thanks', 'thanks');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
