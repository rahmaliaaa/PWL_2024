<?php

use Illuminate\Support\Facades\Route; //mengimpor Route untuk mendefinisikan rute dalam Laravel.
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;

Route::get('/greeting', [WelcomeController::class, 'greeting']);


/*
Route::resource('photos', PhotoController::class)->only(['index', 'edit']);
Route::resource('photos', PhotoController::class)->except(['create', 'store', 'update', 'destroy']);



use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\IdController;

Route::get('/hello', [WelcomeController::class, 'hello']); //controller single action

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/article', [PageController::class, 'article']);
Route::get('/id/{id}', [PageController::class, 'id']);


Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/article', [ArticleController::class, 'index']);
Route::get('/id/{id}', [IdController::class, 'index']);
*/


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return 'Hello World';
});
Route::get('/world', function () {
    return 'World';
});
Route::get('/', function () {
    return 'Selamat Datang';
});
Route::get('/about', function () {
    return 'NIM: 2341760130. [Nama: Rahmalia Mutia Farda]';
});
Route::get('/user/{name}', function ($name) { 
    return 'Nama saya '.$name; 
});
Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name; 
}); 
*/