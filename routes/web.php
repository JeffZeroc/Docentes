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
    
    Route::resource('/home/docentes', DocenteController::class);;
    
    Route::resource('/home/periodos', PeriodoController::class);;
    Route::resource('/home/carreras', CarreraController::class);;
    Route::resource('/home/facultades', FacultadeController::class);;
    Route::resource('/home/materias', MateriaController::class);;
    Route::resource('/home/docente-materias', DocenteMateriaController::class);;
    Route::get('/home/inicio', function(){
        return view('home');
    });

});

// Route::get('/home', [HomeController::class, 'home'])->name('inicio')->middleware(['auth','verified']);
// Route::resource('/home/docente', DocenteController::class)->middleware('auth');;
// Route::resource('/home/periodo', PeriodoController::class)->middleware('auth');;
// Route::resource('/home/relacion', RelacionController::class)->middleware('auth');;

// Route::get('/home/docente', [HomeController::class, 'docente']);
// Route::get('/home/periodo', [HomeController::class, 'periodo']);
// Route::get('/home/relacion', [HomeController::class, 'relacion']);
// Route::get('/home/docente/nuevo', [HomeController::class, 'docente_nuevo']);
// Route::get('/home/periodo/nuevo', [HomeController::class, 'periodo_nuevo']);
// Route::get('/home/relacion/nuevo', [HomeController::class, 'relacion_nuevo']);
// Route::get('/home', function(){
//     return view('home');
// });



// Route::get('/forgot-password', function () {
//     return view('auth.forgot-password');
// })->middleware('guest')->name('password.request');

// Route::post('/forgot-password', function (Request $request) {
//     $request->validate(['email' => 'required|email']);
 
//     $status = Password::sendResetLink(
//         $request->only('email')
//     );
 
//     return $status === Password::RESET_LINK_SENT
//                 ? back()->with(['status' => __($status)])
//                 : back()->withErrors(['email' => __($status)]);
// })->middleware('guest')->name('password.email');

// Route::get('/reset-password/{token}', function ($token) {
//     return view('auth.reset-password', ['token' => $token]);
// })->middleware('guest')->name('password.reset');

// Route::post('/reset-password', function (Request $request) {
//     $request->validate([
//         'token' => 'required',
//         'email' => 'required|email',
//         'password' => 'required|min:8|confirmed',
//     ]);
 
//     $status = Password::reset(
//         $request->only('email', 'password', 'password_confirmation', 'token'),
//         function ($user, $password) {
//             $user->forceFill([
//                 'password' => Hash::make($password)
//             ])->setRememberToken(Str::random(60));
 
//             $user->save();
 
//             event(new PasswordReset($user));
//         }
//     );
 
//     return $status === Password::PASSWORD_RESET
//                 ? redirect()->route('login')->with('status', __($status))
//                 : back()->withErrors(['email' => [__($status)]]);
// })->middleware('guest')->name('password.update');