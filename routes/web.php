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
//auth route for both 
Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});
// for users
Route::group(['middleware' => ['auth', 'role:admin']], function() { 
    Route::get('/dashboard/register', 'App\Http\Controllers\DashboardController@create')->name('register');
});
Route::group(['middleware' => ['auth', 'role:admin']], function() { 
    Route::post('/dashboard/register', 'App\Http\Controllers\DashboardController@store')->name('register');
});
/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard'); */

require __DIR__.'/auth.php';
