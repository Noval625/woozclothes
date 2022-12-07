<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;

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

Route::get('/wel', function () {
    return view('welcomee');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');

// Route::get('/profile', function () {
//     return view('admin.admin_profile_view');
// })->middleware(['auth'])->name('admin.profile');

require __DIR__.'/auth.php';

Route::controller(AdminController::class)->group(function(){
Route::get('/admin/logout','destroy')->name('admin.logout');
Route::get('/admin/profile','profile')->name('admin.profile');
Route::get('/admin/editprofile','EditProfile')->name('edit.profile');
Route::post('/store/profile', 'StoreProfile')->name('store.profile');
Route::get('/change/password', 'ChangePassword')->name('change.password');
Route::post('/update/password', 'UpdatePassword')->name('update.password');
});


Route::middleware(['auth',  'admin'])->name('admin.')->prefix('admin')->group(function() {
    Route::resource('barang', BarangController::class);
});
