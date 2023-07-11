<?php


use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return redirect('/welcome');
// });

Route::get('/welcome', function () {
    return view('index');
})->middleware('guest');

Route::get('/home', [ItemController::class, 'displayItem'])->middleware('auth');

Route::get('/grocery/{id}', [ItemController::class, 'searchItem'])->middleware('auth');

Route::post('/cart', [ItemController::class, 'addItem']);

Route::get('/register', function () {
    return view('register');
})->middleware('guest');

Route::post('/register', [UserController::class, 'register']);

Route::get('/login', function () {
    return view('login');
})->middleware('guest');

Route::post('/login', [UserController::class, 'login']);

Route::post('/deleteItem', [ItemController::class, 'deleteItem'])->middleware('auth');

Route::post('/checkOut', [ItemController::class, 'checkOut'])->middleware('auth');

Route::get('/grocery', function () {
    return view('grocery');
})->middleware('auth');

Route::get('/cart', [ItemController::class, 'getCart'])->middleware('auth');

Route::get('/success', function () {
    return view('successCheckout');
})->middleware('auth');

Route::get('/editprofile', function () {
    return view('editProfile');
})->middleware('auth');

Route::post('/editprofile', [UserController::class, 'editProfile']);

Route::get('/savedprofile', function () {
    return view('savedProfile');
})->middleware('auth');

Route::get('/maintenance', function () {
    return view('accountManagement');
})->middleware('auth');

Route::get('/updaterole', function () {
    return view('updateRole');
})->middleware('auth');

Route::get('/logout', function () {

    Auth::logout();
    return view('logoutSuccess');
})->middleware('auth');
