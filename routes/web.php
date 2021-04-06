<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserAdminController;
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
Route::get('/myNav', function () {
  return view('mynav');
});
Route::get('/team', function () {
  return view('team');
});


//auth route for both 
Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
}); 
/*
 Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard'); */


Route::group(['middleware' => ['auth','role:admin']], function() {
  Route::get('/dashboard/users', [UserAdminController::class, 'index'])->name('dashboard');
});

Route::group(['middleware' => ['auth','role:admin']], function() {
  Route::resource('dashboard/users', UserAdminController::class);
});
require __DIR__.'/auth.php';
