<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ElementoController;


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

Route::get('/', HomeController::class)->name('home');

/*
Route::get('/elementos', ElementoController::class)->name('elementos.index');

Route::get('/elementos/crear', [ElementoController::class, 'create'])->name('elementos.create');

Route::post('/elementos/crear', [ElementoController::class, 'store'])->name('elementos.store');

//Route::get('/elementos/{elemento}/{version?}', [ElementoController::class, 'show'])->name('elementos.show');
Route::get('/elementos/{elemento}', [ElementoController::class, 'show'])->name('elementos.show');

Route::get('/elementos/{elemento}/edit', [ElementoController::class, 'edit'])->name('elementos.edit');
Route::put('/elementos/{elemento}', [ElementoController::class, 'update'])->name('elementos.update');

Route::delete('/elementos/{elemento}', [ElementoController::class, 'destroy'])->name('elementos.destroy');
*/

//Lo siguiente sustituye a todo lo de arriba
//Route::resource('elementos',ElementoController::class);

//Esto cambia la url principal pero hace que funcione
Route::resource('loquesea',ElementoController::class)->parameters(['loquesea'=>'elemento'])->names('elementos');


/*
Route::get('/', function () {
	//return view('welcome');
	return 'Laravel app<br><a href="/elementos">elementos</a>';
});

Route::get('/elementos/{elemento}', function ($elemento) {
	return 'Elementos de Laravel app: '.$elemento;
});
*/
