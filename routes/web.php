<?php

use App\Http\Controllers\GoogleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
//use App\User;
use App\Models\User;
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

Route::get('/', 'EmpresaController@index')->name('inicio');

Route::get('/empresa', 'EmpresaController@empresa')
    ->name('empresa')
    ->middleware('auth');

// Route::get('/empresa', 'EmpresaController@empresa')
//     ->name('empresa')
//     ->middleware('auth');

Route::get('create', 'EmpresaController@create')
    ->name('create')
    ->middleware('auth');
Route::post('create', 'EmpresaController@store')
    ->name('create')
    ->middleware('auth');

Route::get('editar/{empresa}', 'EmpresaController@editar')
    ->name('editar')
    ->middleware('auth');
Route::put('editar/{empresa}', 'EmpresaController@update')->middleware('auth');

Route::get('/delete/{empresa}', 'EmpresaController@delete')->middleware('auth');

Route::get('contenido/{empresa}', 'EmpresaController@contenido')->name(
    'contenido'
);

Route::get('login', 'TargetController@login')
    ->name('login')
    ->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')
    ->name('home')
    ->middleware('auth');

Route::get('create_usuario', 'HomeController@create')
    ->name('create_usuario')
    ->middleware('auth');

Route::post('/create_usuario', 'HomeController@store')
    ->name('create_usuario')
    ->middleware('auth');

Route::get('editar_usuario/{usuario}', 'HomeController@editar_usuario')
    ->name('editar_usuario')
    ->middleware('auth');
Route::put(
    'editar_usuario/{usuario}',
    'HomeController@update_usuario'
)->middleware('auth');
Route::get(
    '/delete_usuario/{usuario}',
    'HomeController@delete_usuario'
)->middleware('auth');
// Route::post('create', 'HomeController@store')->name('crear-home');

Auth::routes();

Route::get('contacto', 'HomeController@contacto')->name('contacto');
Route::get('contacto_index', 'HomeController@contacto_index')->name(
    'contacto_index'
);
Route::get('login_empresa', 'HomeController@login_empresa')->name(
    'login_empresa'
);
Route::get('registrar_empresa', 'HomeController@registrar_empresa')->name(
    'registrar_empresa'
);

// Route::get('/login-google', function () {
//     return Socialite::driver('google')->redirect();
// });

// Route::get('/google-callback', function () {
//     $user = Socialite::driver('google')->user();

//     $userExists = User::where('external_id', $user->id)
//         ->where('external_auth', 'google')
//         ->exists();

//     if ($userExists) {
//         Auth::login($userExists);
//     } else {
//         $userNew = User::create([
//             'name' => $user->name,
//             'email' => $user->email,

//             'avatar' => $user->avatar,
//             'external_id' => $user->id,
//             'external_auth' => 'google',
//         ]);

//         Auth::login($userNew);
//     }

//     return redirect('/');
// });

// Route::get('google', 'GoogleController@redirectToGoogle');
// Route::get('google/cal<lback', 'GoogleController@handleGoogleCallback');
Route::prefix('google')
    ->name('google.')
    ->group(function () {
        Route::get('login', [GoogleController::class, 'loginWithGoogle'])->name(
            'login'
        );
        Route::any('callback', [
            GoogleController::class,
            'callbackFromGoogle',
        ])->name('callback');
    });
