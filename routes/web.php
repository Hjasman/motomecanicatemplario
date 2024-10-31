<?php

use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientessController;
use App\Http\Controllers\CRMController;
use App\Http\Controllers\DiagnosticoController;
use App\Http\Controllers\HojaTrabajoController;
use App\Http\Controllers\ResolucionController;
use App\Http\Controllers\VehiculosController;
use App\Http\Controllers\serviciosController;
use App\Http\Controllers\SolicitudController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('home');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/clientes' ,[ClientessController::class, 'principal'])->name('clientes.principal');
    Route::get('clientes/new', [ClientessController::class,'newc'])->name('clientes.newc');
    Route::post('clientes/save', [ClientessController::class,'savec'])->name('clientes.savec');
    Route::delete('clientes/del/{client}', [ClientessController::class,'deletec'])->name('clientes.deletec');
    Route::get('clientes/{client}/edit' ,[ClientessController::class, 'editarc'])->name('clientes.editarc');
    Route::put('clientes/{client}/up', [ClientessController::class,'updatec'])->name('clientes.updatec');   
    Route::get('clientes/most/{client}', [ClientessController::class,'mostrarc'])->name('clientes.mostarc');

    Route::get('/vehiculo', [VehiculosController::class,'principalv'])->name('vehiculo.principalv');
    Route::get('vehiculo/new', [VehiculosController::class,'newv'])->name('vehiculo.newv');
    Route::post('vehiculo/save', [VehiculosController::class,'savev'])->name('vehiculo.savev');
    Route::delete('vehiculo/del/{ruedadel}', [VehiculosController::class,'deletev'])->name('vehiculo.deletev');
    Route::get('vehiculo/{rueda}/edit', [VehiculosController::class,'editarv'])->name('vehiculo.editarv');
    Route::put('vehiculo/{ruedau}/up', [VehiculosController::class,'updatev'])->name('vehiculo.updatev');   
    Route::get('vehiculo/most/{ruedam}', [VehiculosController::class,'mostrarv'])->name('vehiculo.mostarv');

    Route::get('/productos', [ProductosController::class,'principalp'])->name('productos.principalp');
    Route::get('productos/new', [ProductosController::class,'newp'])->name('productos.newp');
    Route::post('productos/save', [ProductosController::class,'savep'])->name('productos.savep');
    Route::delete('productos/del/{productd}', [ProductosController::class,'deletep'])->name('productos.deletep');
    Route::get('productos/e/{producto}/edit', [ProductosController::class,'editarp'])->name('productos.editarp');
    Route::put('productos/{producto}/up', [ProductosController::class,'updatep'])->name('productos.updatep');   
    Route::get('productos/most/{producto}', [ProductosController::class,'mostrarp'])->name('productos.mostarp');
    
    Route::get('/servicios', [serviciosController::class,'principals'])->name('servicios.principals');
    Route::get('servicios/new', [ServiciosController::class,'news'])->name('servicios.news');
    Route::post('servicios/save', [ServiciosController::class,'saves'])->name('servicios.saves');
    Route::delete('servicios/del/{servicio}', [ServiciosController::class,'deletes'])->name('servicios.deletes');
    Route::get('servicios/e/{servicio}/edit', [ServiciosController::class,'editars'])->name('servicios.editars');
    Route::put('servicios/{servicio}/up', [ServiciosController::class,'updates'])->name('servicios.updates');   
    Route::get('servicios/most/{servicio}', [ServiciosController::class,'mostrars'])->name('servicios.mostrars');

    Route::get('/hojatrabajo', [HojaTrabajoController::class,'principalh'])->name('hojatrabajo.principalh');
    Route::get('hojatrabajo/new', [HojaTrabajoController::class,'newh'])->name('hojatrabajo.news');
    Route::post('hojatrabajo/save', [HojaTrabajoController::class,'saveh'])->name('hojatrabajo.saves');
    Route::delete('hojatrabajo/del/{servicio}', [HojaTrabajoController::class,'deleteh'])->name('hojatrabajo.deletes');
    Route::get('hojatrabajo/e/{servicio}/edit', [HojaTrabajoController::class,'editarh'])->name('hojatrabajo.editars');
    Route::put('hojatrabajo/{servicio}/up', [HojaTrabajoController::class,'updateh'])->name('hojatrabajo.updates');   
    Route::get('hojatrabajo/most/{servicio}', [HojaTrabajoController::class,'mostrarh'])->name('hojatrabajo.mostrars');

    Route::get('/solicitud', [SolicitudController::class,'principalsl'])->name('solicitud.principalsl');
    Route::post('solicitud/quest/cl', [SolicitudController::class,'buscarcli'])->name('solicitud.buscarcli');
    Route::get('solicitud/solicitud2', [SolicitudController::class,'solicitud2'])->name('solicitud.solicitud22');
    Route::post('solicitud/quest/{c}/ve', [SolicitudController::class,'buscarveh'])->name('solicitud.buscarveh');
    Route::get('solicitud/solicitud3', [SolicitudController::class,'solicitud3'])->name('solicitud.solicitud3');
    Route::get('solicitud/llenasolicitud', [SolicitudController::class,'llenasol'])->name('solicitud.llenasol');
    Route::get('solicitud/solicitud_mst', [SolicitudController::class,'mostrar'])->name('solicitud.mostar');
    

    Route::get('diagnostico/llenadiagnostico', [DiagnosticoController::class,'llenadiag'])->name('diagnostico.llenadiag');
    Route::get('diagnostico/llenadiag2', [DiagnosticoController::class,'llenadodiag'])->name('diagnostico.llenadodiag');
    Route::get('diagnostico/editardiag', [DiagnosticoController::class,'editardiag'])->name('diagnostico.editardiag');

    Route::get('resolucion/resolucion', [ResolucionController::class,'resol'])->name('resolucion.resol');
    Route::get('resolucion/editarresolucion', [ResolucionController::class,'edit'])->name('resolucion.edit');
    Route::get('resolucion/nuevoresolucion', [ResolucionController::class,'nuevor'])->name('resolucion.nuevo');

    Route::get('crm/crmprincipal', [CRMController::class,'crmprinc'])->name('crm.crmprinc');
    Route::get('crm/crmcitas', [CRMController::class,'crmcita'])->name('crm.crmcita');
    Route::get('crm/crmllamadas', [CRMController::class,'crmllamada'])->name('crm.crmllamada');
    Route::get('crm/crmsatisfaccion', [CRMController::class,'crmsatisfac'])->name('crm.crmsatisfac');
    Route::get('crm/crmwhatts', [CRMController::class,'crmwatt'])->name('crm.crmwatt');
    Route::get('crm/crmestadistica', [CRMController::class,'crmestadistic'])->name('crm.crmestadistic');
    
    

});
require __DIR__.'/auth.php';

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
