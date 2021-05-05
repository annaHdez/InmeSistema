<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;

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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cache', function() {
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    return "Caché limpio";
})->name('cache');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('deptos', 'DeptosController');
Route::resource('posiciones', 'PosicionesController');
Route::resource('puestos', 'PuestosController');
Route::resource('colab', 'ColabController');
Route::resource('empresas', 'EmpresasController');
Route::resource('proyectos', 'ProyectoController');
Route::resource('nomina', 'NominaController');
Route::resource('users', 'UserController');
