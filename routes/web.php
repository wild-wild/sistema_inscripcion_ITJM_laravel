<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\login;
use App\Http\Controllers\registro;
use App\Http\Livewire\Content\MenuConfiguracion;
use App\Http\Livewire\Content\MenuInscripcion;
use App\Http\Livewire\Content\MenuPago;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Content\MenuPrincipal;
use App\Http\Livewire\Content\MenuRegistro;
use App\Http\Livewire\Content\MenuReporte;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puede registrar rutas web para su aplicación. Estos
| las rutas son cargadas por el RouteServiceProvider dentro de un grupo que
| contiene el grupo de middleware "web". ¡Ahora crea algo grandioso!
|
*/
//ruta de inicio
Route::get('/', HomeController::class);
//ruta de registro
Route::get('registro', [registro::class, 'registro'])->name('registro');
//ruta de login
Route::get('login', [login::class, 'login'])->name('login');
//ruta de login administrador
Route::get('loginAdmin', [adminController::class, 'loginAdmin'])->name('loginAdmin');
//livewire menu principal
Route::get('principal', MenuPrincipal::class, 'principal')->name('principal');
//livewire menu registro
Route::get('registro', MenuRegistro::class, 'registro')->name('Mregistro');
//livewire menu inscripcion
Route::get('inscripcion', MenuInscripcion::class, 'inscripcion')->name('inscripcion');
//livewire menu pago
Route::get('pago', MenuPago::class, 'pago')->name('pago');
//livewire menu reporte
Route::get('reporte', MenuReporte::class, 'reporte')->name('reporte');
//livewire menu configuracion
Route::get('configuracion', MenuConfiguracion::class, 'configuracion')->name('configuracion');
