<?php

use App\Http\Controllers\ChirpController;
use App\Http\Controllers\EmpleadosController;
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
Route::get('/mi_primer_ruta', function(){
    return 'hello world, esta es mi primera ruta';
});
Route::get('/name/{name}/lastname/{lastname}', function($name, $lastname ){
    return 'hola soy '.$name.' '.$lastname; 
});
Route::resource('chirp', ChirpController::class);

Route::resource('empleados', EmpleadosController::class);
Route::resource('categoria',CategoriaController::class);
Route::resource('departamento',Departamento::class);
Route::resource('empleado',EmpleadoController::class);
Route::resource('empresa',EmpresaController::class);
Route::resource('equipoasignado',EquipoasignadoController::class);
Route::resource('equipo',EquipoController::class);
Route::resource('ordentrabajo',OrdentrabajoController::class);
Route::resource('personal',PersonalController::class);
Route::resource('tecnico',TecnicoController::class);
Route::resource('tipomantenimineto',TipomantenimientoController::class);
/*Route::resource('chirps', ChirpController::class)
    ->only(['index', 'store'])
    ->middleware(['auth', 'verified']);*/