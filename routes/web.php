<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocioController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\PrestamoController;

use App\Mail\MailMailable;
use Illuminate\Support\Facades\Mail;

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

Route::resource('/socios', SocioController::class);
Route::resource('/libros', LibroController::class);
Route::resource('/prestamos', PrestamoController::class);
Route::name('imprimir')->get('/imprimir', [SocioController::class, 'imprimir']);

Route::get('mail', function() {
    $correo = new MailMailable;
    Mail::to('isesric2001@gmail.com')->send($correo);

    return view('welcome');
});