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

use App\Http\Controllers\Admin\AdminController;
Route::controller(AdminController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('index', 'index')->name('index');
    Route::get('admin', 'admin')->name('admin');
    Route::get('admin/create', 'add')->name('admin.add');
    Route::post('admin/create', 'create')->name('admin.create');
    Route::get('admin/edit', 'edit')->name('admin.edit');
    Route::post('admin/edit', 'update')->name('admin.update');
    Route::get('admin/delete', 'delete')->name('admin.delete');
});

use App\Http\Controllers\Admin\NewsController;
Route::controller(NewsController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('news', 'news')->name('news');
    Route::get('news/create', 'add')->name('news.add');
    Route::post('news/create', 'create')->name('news.create');
    Route::get('news/edit', 'edit')->name('news.edit');
    Route::post('news/edit', 'update')->name('news.update');
    Route::get('news/delete', 'delete')->name('news.delete');
});

use App\Http\Controllers\Admin\ContactController;
Route::controller(ContactController::class)->prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('contact', 'contact')->name('contact');
    Route::get('contact/edit', 'edit')->name('contact.edit');
    Route::post('contact/edit', 'update')->name('contact.update');
});

Auth::routes();

Route::get('logout', 'Auth\LoginController@logout')->name('custom-logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\Visitor\VisitorController;
Route::controller(VisitorController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('about', 'about')->name('about');
    Route::get('discography', 'discography')->name('discography');
    Route::get('lesson', 'lesson')->name('lesson');
    Route::get('contact', 'contact')->name('contact');
    Route::post('contact', 'store')->name('store');
    Route::get('confirm', 'confirm')->name('confirm');
    Route::post('confirm', 'create')->name('create');
    Route::get('thanks', 'thanks')->name('thanks');
});
