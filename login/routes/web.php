<?php

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/teste', [App\Http\Controllers\CategoriaControlador::class, 'index']);

Route::get('/admin', [App\Http\Controllers\AdminControlador::class, 'index'])->name('admin.index');

Route::get('/admin/login', [App\Http\Controllers\Auth\AdminLoginControlador::class, 'index'])->name('admin.login');

Route::post('/admin/login', [App\Http\Controllers\Auth\AdminLoginControlador::class, 'login'])->name('admin.login.submit');

//add um adm

Route::get('addadm', function() {
    $adm = new Admin();
    $adm->name = "ADM Supremo";
    $adm->email = "adm@gmail.com";
    $adm->password = Hash::make("adm123");
    $adm->save();

});

//Route::get('/teste', [CategoriaControlador::class, 'index']);