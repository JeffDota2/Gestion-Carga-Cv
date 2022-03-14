<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CargaController;

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
    return view('auth.login');
});




Auth::routes();

//Route::get('/cargas',[CargaController::class, 'list']);
//Route::post('/import_carga',[CargaController::class, 'import_carga'])->name('import_carga');
    
Route::get('hojas/pdf',[App\Http\Controllers\HojaController::class, 'pdf'])->name('hojas.pdf');
Route::resource('hojas',App\Http\Controllers\HojaController::class)->middleware('auth');

Route::get('empresariales/pdf',[App\Http\Controllers\EmpresarialeController::class, 'pdf'])->name('empresariales.pdf');
Route::resource('empresariales', App\Http\Controllers\EmpresarialeController::class)->middleware('auth');

Route::get('rubricas/pdf',[App\Http\Controllers\RubricaController::class, 'pdf'])->name('rubricas.pdf');
Route::resource('rubricas', App\Http\Controllers\RubricaController::class)->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('EnvioDatos',[App\Http\Controllers\RegistroController::class, 'Insertar']);

Route::get('Listado',[App\Http\Controllers\ListadoController::class, 'index'])->name('datos.index')->middleware('auth');

Route::get('/registro', [App\Http\Controllers\RegistroController::class, 'create'])->name('datos.store')->middleware('auth');