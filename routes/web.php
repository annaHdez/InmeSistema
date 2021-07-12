<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;

Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/cache', function() {
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    return "Caché limpio";
})->name('cache');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//1er migración
Route::resource('deptos', 'DeptosController');
Route::resource('detalleProy', 'DetalleProyectoController');
Route::resource('diasfest', 'DiasFestController');
Route::resource('empresas', 'EmpresasController');
Route::resource('posiciones', 'PosicionesController');
Route::resource('siglas', 'SiglasController');

//2da migración
Route::resource('puestos', 'PuestosController');
Route::resource('registrarProy', 'RegistrarProyectoController');

//3ra migración
Route::resource('colab', 'ColaboradoresController');

//4ta migración


//6ta migración
Route::resource('nomina', 'NominaController');

//Extras
Route::resource('org', 'OrganizacionController');
Route::resource('proyectos', 'ProyectoController');
