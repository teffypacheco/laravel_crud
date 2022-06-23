<?php

use App\Http\Controllers\PacienteController;
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
    return redirect('login');
});

Route::get('/eps', [PacienteController::class, 'getAll']);

Route::get('/eps/edit/{idPaciente}', [PacienteController::class, 'edit']);

Route::get('/eps/getAll', [PacienteController::class, 'getAll']);

Route::post('/eps/addPaciente', [PacienteController::class, 'addPaciente']);

Route::delete('/eps/deleteById/{idPaciente}', [PacienteController::class, 'deleteById']);

Route::put('/eps/updatePaciente/{idPaciente}', [PacienteController::class, 'updatePaciente']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/eps/create', function () {
    return view('eps.create');
});
