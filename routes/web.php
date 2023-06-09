<?php
namespace App\HTTP\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('welcome');
});

Route::get('/some{id}',[SomeController::class,'getSome']);

Route::get('/main',[MainController::class,'index']);
Route::get('/contacts',[ContactsController::class,'index']);
Route::get('/about',[AboutController::class,'index']);

Route::get('/view',[viewController::class,'index']);
Route::get('/add',[AddController::class,'index']);
Route::post('/addinv',[AddInvController::class,'store'])->name('form.submit');
Route::get('/delete',[DeleteController::class,'index']);
Route::post('/deleteinv',[DeleteInvController::class,'delete'])->name('delete.submit');

Route::get('/products',[ProductController::class,'index'])->name('product.index');
Route::get('/products/list',[ProductController::class,'list'])->name('product.list');
Route::get('/products/create',[ProductController::class,'create'])->name('product.create');
Route::post('/products',[ProductController::class,'store'])->name('product.store');
Route::get('/products/{product}',[ProductController::class,'show'])->name('product.show');
Route::get('/products/{product}/edit',[ProductController::class,'edit'])->name('product.edit');
Route::patch('/products/{product}',[ProductController::class,'update'])->name('product.update');
Route::delete('/products/{product}',[ProductController::class,'destroy'])->name('product.delete');

Route::get('/products/{id}/photos',[ProductController::class,'photos'])->name('product.photos');

Route::get('/tags',[TagController::class,'index'])->name('tag.index');
Route::get('/tags/{tag}',[TagController::class,'show'])->name('tag.show');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');