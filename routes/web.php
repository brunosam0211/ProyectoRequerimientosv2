<?php
use App\Models\Evento;
use App\Models\Cargo;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\DetalleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetEventoController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Auth;
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
//Route::get('/', [HomeController::class, 'home3'])->name('home3');
Route::get('/', function () {
    $evento = Evento::where ('estado','=','1')->get();
    $cargo = Cargo::all();
    return view('layouts.bienvenido',compact('evento','cargo'));
});

Auth::routes();
Route::get('/iniciar', [App\Http\Controllers\HomeController::class, 'iniciar'])->name('iniciar');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home2'])->name('home');
Route::get('/dashboard',[HomeController::class,'home2'])->middleware(['auth'])->name('banner');

Route::resource('exalumno',AlumnoController::class);
Route::get('cancelar',function(){
    return redirect()->route('exalumno.index');
})->name('cancelar');
Route::get('exalumno/{id}/confirmar',[AlumnoController::class,'confirmar'])->name('exalumno.confirmar');
Route::get('/vertodo',[AlumnoController::class,'vertodo'])->name('exalumno.vertodo');
Route::get('/pdfal',[PDFController::class,'pdfalumnos'])->name('exalumno.pdf');
Route::resource('cargo',CargoController::class);

Route::resource('detalle',DetalleController::class);
Route::get('cancelar2',function(){
    return redirect()->route('detalle.index');
})->name('cancelar2');
Route::get('detalle/{id}/confirmar',[DetalleController::class,'confirmar'])->name('detalle.confirmar');
Route::get('/vertodo2',[DetalleController::class,'vertodo'])->name('detalle.vertodo');
Route::get('/pdf1',[PDFController::class,'pdfcargos'])->name('cargo.pdf');
Route::get('cargo/{id}/boleta',[PDFController::class,'uncargo'])->name('cargo.boleta');

Route::resource('evento',EventoController::class);

Route::get('cancelar3',function(){
    return redirect()->route('evento.index');
})->name('cancelar3');
Route::get('evento/{id}/confirmar',[EventoController::class,'confirmar'])->name('evento.confirmar');

Route::resource('inscripcion',DetEventoController::class);
Route::get('cancelar4',function(){
    return redirect()->route('inscripcion.index');
})->name('cancelar4');
Route::get('inscripcion/{id}/confirmar',[DetEventoController::class,'confirmar'])->name('inscripcion.confirmar');
Route::get('/vertodo3',[DetEventoController::class,'vertodo'])->name('inscripcion.vertodo');
Route::get('/pdf2',[PDFController::class,'pdfinscripciones'])->name('inscripcion.pdf');
Route::get('inscripcion/{id}/boleta',[PDFController::class,'unainscripcion'])->name('inscripcion.boleta');
