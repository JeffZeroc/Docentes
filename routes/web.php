<?php

use App\Http\Controllers\CarreraController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\DocenteMateriaController;
use App\Http\Controllers\FacultadeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\PeriodoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
// use Illuminate\Auth\Events\PasswordReset;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Password;
// use Illuminate\Support\Str;

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

// Route::get('/', function(){
//     return view('layouts/new_app_master');
// });

Route::redirect('/', '/inicio');

Route::get('/inicio', function(){
    return view('inicio');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    
    Route::get('/home', [HomeController::class, 'home'])->name('inicio');
    Route::resource('/home/users', UserController::class);
    
    Route::resource('/home/docentes', DocenteController::class);
    
    Route::resource('/home/periodos', PeriodoController::class);
    Route::resource('/home/carreras', CarreraController::class);
    Route::resource('/home/facultades', FacultadeController::class);
    Route::get('/home/materias/create/{id}', [MateriaController::class, 'getCategoria']);
    Route::resource('/home/materias', MateriaController::class);
   
    Route::resource('/home/docente-materias', DocenteMateriaController::class);
    Route::get('/home/inicio', function(){
        return view('home');
    });

});