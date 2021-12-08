<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\GradoController;
use App\Http\Controllers\ProfesoreController;
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

Route::resource('profesores', ProfesoreController::class);


Route::resource('alumnos', AlumnoController::class);


Route::resource('grados', GradoController::class);
//Rutas para profesores: 

/*Route::get('profesores', [ProfesoreController::class, 'index'])->name('profesores.index');

Route::get('profesores/create', [ProfesoreController::class, 'create'])->name('profesores.create');

Route::post('profesores', [ProfesoreController::class, 'store' ])->name('profesores.store');

Route::get('profesores/{profesor}', [ProfesoreController::class, 'show'])->name('profesores.show');

Route::get('profesores/{profesor}/edit', [ProfesoreController::class, 'edit'])->name('profesores.edit');

Route::put('profesores/{profesor}', [ProfesoreController::class, 'update'])->name('profesores.update');

 Route::delete('profesores/{profesore}', [ProfesoreController::class, 'destroy'])->name('profesores.destroy');*/


 //Rutas para Alumnos
/*Route::get('alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');

Route::get('alumnos/create', [AlumnoController::class, 'create'])->name('alumnos.create');

Route::post('alumnos', [AlumnoController::class, 'store' ])->name('alumnos.store');

Route::get('alumnos/{alumno}', [AlumnoController::class, 'show'])->name('alumnos.show');

Route::get('alumnos/{alumno}/edit', [AlumnoController::class, 'edit'])->name('alumnos.edit');

Route::put('alumnos/{alumno}', [AlumnoController::class, 'update'])->name('alumnos.update');

 Route::delete('alumnos/{alumno}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');*/



 //Rutas para grados 

 /*Route::get('grados', [GradoController::class, 'index'])->name('grados.index');
 
 Route::get('grados/create', [GradoController::class, 'create'])->name('grados.create');
 
 Route::post('grados', [GradoController::class, 'store' ])->name('grados.store');
 
 Route::get('grados/{grado}', [GradoController::class, 'show'])->name('grados.show');
 
 Route::get('grados/{grado}/edit', [GradoController::class, 'edit'])->name('grados.edit');
 
 Route::put('grados/{grado}', [GradoController::class, 'update'])->name('grados.update');
 
  Route::delete('grados/{grado}', [GradoController::class, 'destroy'])->name('gradoss.destroy');*/
 
 


