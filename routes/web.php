<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariController;
use App\Http\Controllers\AfectatsController;
use App\Http\Controllers\AlertantController;
use App\Http\Controllers\ComarquesController;
use App\Http\Controllers\IncidenciesController;
use App\Http\Controllers\MunicipisController;
use App\Http\Controllers\AmbulanciaController;


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
    return view('index');
});
Route::get('/prueba', [UsuariController::class, 'showLogin'])->name('login');
Route::post('/login', [UsuariController::class, 'login'] );
Route::get('/logout', [UsuariController::class, 'logout']);
Route::get('/administrativo', function () {
    return view('Administrativo.administrativo');
});
Route::get('/admin', function () {
    return view('Admin.admin');
});
Route::get('/ambulancia', function () {
    return view('Ambulancia.ambulancia');
});

Route::get('/videos', function () {
    return view('videos.videos');
});

Route::resource('alertants', AlertantController::class);
Route::resource('afectats', AfectatsController::class);
Route::resource('incidencies', IncidenciesController::class);
Route::resource('municipis', MunicipisController::class);
Route::resource('comarques', ComarquesController::class);
Route::resource('ambulancia', AmbulanciaController::class);

