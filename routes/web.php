<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasterSiswaController;
use App\Http\Controllers\MasterContactController;
use App\Http\Controllers\MasterProjectController;
use App\Http\Controllers\LoginController;



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
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/project', function () {
    return view('project');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('admin/dashboard', [DashboardController::class, 'index'])->middleware('auth');
// Route::get('/admin', function () {
//     return view('dashboard');
// });
 
Route::resource('admin/mastersiswa', MasterSiswaController::class);
Route::get('admin/mastersiswa/{mastersiswa}/hapus', [MasterSiswaController::class, 'hapus'])->name('mastersiswa.hapus');
// Route::get('admin/mastersiswa', function () {
//     return view('mastersiswa');
// }); 
Route::resource('admin/mastercontact', MasterContactController::class);
Route::get('admin/mastercontact/{mastercontact}/newcontact', [MasterContactController::class, 'newcontact'])->name('mastercontact.newcontact');
Route::post('admin/mastercontact/{mastercontact}/update', [MasterContactController::class, 'ubah'])->name('mastercontact.ubah');
Route::get('admin/mastercontact/{mastercontact}/hapus', [MasterContactController::class, 'hapus'])->name('mastercontact.hapus');
// Route::get('admin/mastercontact', function () {
//     return view('mastercontact');
// });
Route::resource('admin/masterproject', MasterProjectController::class);
Route::get('admin/masterproject/{masterproject}/newproject', [MasterProjectController::class, 'newproject'])->name('masterproject.newproject');
Route::post('admin/masterproject/{masterproject}/update', [MasterProjectController::class, 'ubah'])->name('masterproject.ubah');
Route::get('admin/masterproject/{masterproject}/hapus', [MasterProjectController::class, 'hapus'])->name('masterproject.hapus');
// Route::get('admin/masterproject', function () {
//     return view('masterproject');
//});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// Route::get('/logout')->middleware('auth');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.auth')->middleware('guest');

Route::get('/pagenotfound', function () {
    return view('pagenotfound');
})->middleware('auth');