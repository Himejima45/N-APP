<?php

use App\Http\Controllers\PlanesController;
use App\Http\Controllers\RecetaController;
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

Route::get('/', function () {
    return view('welcome');
})->middleware('auth')->name('home');

Auth::routes();

Route::get('/perfil', function () {
    return view('profile.profile');
})->name('perfil');

// Planes
Route::controller(PlanesController::class)->group(function () {
    Route::get('/plan-nutricional', 'nutricional')->name('plan-nutricional');
    Route::get('/plan-ejercicios', 'ejercicio')->name('plan-ejercicios');
    Route::get('/plan-ejercicios/personalizado', 'ejercicio_personalizado')->name('ejercicio-personalizado');
    Route::post('/plan-ejercicios/personalizado/store', 'guardar_ejercicio')->name('guardar-ejercicio');
    Route::get('/plan-nutricional/personalizado', 'nutricional_personalizado')->name('nutricional-personalizado');
    Route::get('/plan-ejercicios/entrenador', 'plan_entrenador')->name('plan_entrenador');
    Route::get('/plan-ejercicios/especialista', 'plan_entrenador')->name('plan_especialista');
    // Route::get('/plan-ejercicios/especialista', 'especialista')->name('plan_especialista');
});

// Recetas
Route::controller(RecetaController::class)->group(function () {
    Route::get('/receta', 'index')->name('receta');
    Route::get('/crear-receta', 'create')->name('crear-receta');
    Route::post('/receta/store', 'store')->name('guardar-receta');
});

Route::get('/logros', function () {
    return view('estadisticas.logros_metas');
})->name('logros');

Route::get('/entrenamiento', function () {
    return view('estadisticas.entrenamiento');
})->name('entrenamiento');

Route::get('/peso', function () {
    return view('estadisticas.peso');
})->name('peso');

Route::get('/nutricional', function () {
    return view('estadisticas.nutricional');
})->name('nutricional');

Route::get('/alarma', function () {
    return view('configuracion.alarma');
})->name('alarma');

Route::get('/cuenta', function () {
    return view('configuracion.cuenta');
})->name('cuenta');

Route::get('/datos', function () {
    return view('configuracion.datos');
})->name('datos');
