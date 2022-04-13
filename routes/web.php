<?php

use App\Http\Controllers\InicioControler;
use Illuminate\Support\Facades\Route;

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
Route::get('/', InicioControler::class);
//ruta de registro
Route::get('registro','App\Http\Controllers\inicioControler@registro');
//barra lateral
route::get('panel','App\Http\Controllers\inicioControler@panel');
