<?php

use App\Http\Controllers\ContactController;
use App\Models\Contact;
use App\Models\User;
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

Route::get('/my_welcome', function() {
//    dd(Route::current());
    return view('my_welcome', ["message" => "THIS IS TEST MESSAGE!"]);
});

Route::get('/test_responses/{user}', function(User $user) {
    return $user;
});

Route::get('/child', function() {
    return view('child');
});

Route::get('/home', function() {
    dd("HOME");
})->name('home');

Route::get('/test_role/{id}', [ContactController::class, 'properRole'])->middleware('verified_role:simple');

Route::get('/witout_token', [ContactController::class, 'sendToken'])->name('contact.send_token');

Route::middleware('verified_token')->post('/with_token', function() {
    dd("TEST token: ". request()->get('token'));
})->name('contact.with_token');



Route::get('/con/{contact}', function(Contact $con) {
    dd($con->name);
});

Route::get('/contacts/showroute', function() {
    $route = Route::current();
        
    $name = Route::currentRouteName();
        
    $action = Route::currentRouteAction();
        
    dump($route);
    dump($name);
    dd($action);    
});

Route::controller(ContactController::class)->group(function() {
    Route::get('/index', 'index');
    Route::get('/testowa333', 'testowa333')->name('testowa333');
});

Route::get('/contacts/{contact}', [ContactController::class, 'show']);

Route::prefix('admin')->group(function() {
    Route::get('/show_ad', [ContactController::class, 'show_ad']);
});


Route::get('/test1/{id}', function($id) {
    echo "ID1: NOthiNG {$id}"; 
})->name('testowa1');

Route::get('/test2/{id}', function($id) {
    echo "ID2: " . $id; 
});

Route::get('/test/{name}', function($name) {
   echo "HELLLOO: {$name}"; 
})->whereAlpha('name');

//Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::fallback(function() {
   echo "NIC WIĘCEJ SIĘ NIE DA ZROBIĆ :)"; 
});
