<?php

use App\Http\Controllers\PlanesController;
use App\Http\Controllers\RecetaController;
use App\Http\Controllers\EjercicioController;
use App\Http\Controllers\datosController;
use App\Http\Controllers\nacionalidadController;
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
    Route::get('/receta/{id}/edit', 'edit')->name('editar-receta');
    Route::put('/receta/{id}/update', 'update')->name('actualizar-receta');
    Route::delete('/receta/{id}/delete', 'delete')->name('borrar-receta');
});

// Ejercicios
Route::controller(EjercicioController::class)->group(function () {
    Route::get('/ejercicio', 'index')->name('ejercicio');
    Route::get('/crear-ejercicio', 'create')->name('crear-ejercicio');
    Route::post('/ejercicio/store', 'store')->name('guardar-ejercicio');
    Route::get('/ejercicio/{id}/edit', 'edit')->name('editar-ejercicio');
    Route::put('/ejercicio/{id}/update', 'update')->name('actualizar-ejercicio');
    Route::delete('/ejercicio/{id}/delete', 'delete')->name('borrar-ejercicio');
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

Route::controller(datosController::class)->group(function () {

    Route::get('/datos', 'new')->name('datos');
    Route::get('/crear-datos', 'create')->name('crear-datos');
    Route::post('/datos/store', 'store')->name('guardar-datos');
    Route::get('/edit', 'index')->name('edit');
    Route::get('/profile/show', 'newt')->name('datost');
    Route::get('/peso', 'show')->name('peso');
});

// Si hay varias rutas que usan el mismo controlador es mejor agruparlas con el metodo Route::controller
// Las rutas deben llevar / al inicio
Route::get('editar/{datos}/editar', [datosController::class, 'editar'])->name('editar.d');
Route::put('editar/{datos}', [datosController::class, 'update'])->name('actualizar.d');





Route::controller(nacionalidadController::class)->group(function () {

    Route::get('/pais', 'index')->name('pais');
});
