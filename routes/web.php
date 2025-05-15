<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [ContactController::class, 'index']);
Route::get('/testowa333', [ContactController::class, 'testowa333'])->name('testowa133');

Route::get('/test1/{id}', function($id) {
    echo "ID1: NOthiNG {$id}"; 
})->name('testowa1');

Route::get('/test2/{id}', function($id) {
    echo "ID2: " . $id; 
});

Route::get('/test/{name}', function($name) {
   echo "HELLLOO: {$name}"; 
})->whereAlpha('name');

Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
