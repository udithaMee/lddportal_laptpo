<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserAdminController;
use App\Http\Controllers\PostController;
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
  Route::get('/documents', function () {
    return view('documents');

});



//auth route for both 
Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
}); 


Route::group(['middleware' => ['auth','role:admin']], function() {
  Route::get('/dashboard/users', [UserAdminController::class, 'index'])->name('dashboard.users');
  
});

//Route::group(['middleware' => ['auth','role:teacher']], function() {
Route::get('/dashboard/report', [PostController::class,'index'])->name('dashboard.report');
Route::post('/dashboard/report', [PostController::class,'store']);
//});
/*
 Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard'); */

require __DIR__.'/auth.php';
