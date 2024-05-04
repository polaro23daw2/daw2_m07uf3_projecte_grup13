<?php

use App\Http\Controllers\apartamentsController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ControladorTreballador;
use App\Http\Controllers\LloguerController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('inici');
});

Route::middleware('auth')->group(function () {
    // Rutas que todos los usuarios autenticados pueden acceder
    Route::get('/dashboard-basic', function () {
        return view('dashboard-basic');
    })->name('dashboard-basic');

    // Ruta específica para usuarios no admin
    Route::get('trebs', function () {
        return redirect('trebs/index_basic');
    })->withoutMiddleware('adminAuth');

    Route::get('/pdf/Clients', [PDFController::class, 'generatePDF']);
    Route::get('/pdf/apartaments', [PDFController::class, 'generateApartamentsPDF']);

    ///aqui hago lloga///
    Route::get('/lloga/{dni_client}/{codi_unic}/edit', [LloguerController::class, 'edit'])->name('lloga.edit');
    Route::put('/lloga/{dni_client}/{codi_unic}', [LloguerController::class, 'update'])->name('lloga.update');
    Route::delete('/lloga/{dni_client}/{codi_unic}', [LloguerController::class, 'destroy'])->name('lloga.destroy');

    Route::resource('lloga', LloguerController::class)->except(['edit', 'update', 'destroy']);

    Route::resource('apart', apartamentsController::class);
    Route::resource('clients', ClientController::class);

    Route::get('trebs/index_basic', [ControladorTreballador::class, 'index_basic'])->name('trebs.index_basic');
    Route::get('trebs/show_basic/{tid}', [ControladorTreballador::class, 'show_basic'])->name('trebs.show_basic');
    // Rutas específicas para admin y no admin
    Route::group(['middleware' => 'adminAuth'], function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        // Rutas de admin para 'trebs'
        Route::resource('trebs', ControladorTreballador::class);

    });

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
