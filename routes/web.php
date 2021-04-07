<?php

use App\Http\Controllers\PenyakitController;
use App\Models\Penyakit;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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



Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');

    //Gejala
    Route::prefix('gejala')->group(function () {
       
    Route::get('/datagejala', [App\Http\Controllers\GejalaController::class, 'index'])->name('datagejala');
    Route::get('/creategejala', [App\Http\Controllers\GejalaController::class, 'create'])->name('creategejala');
    Route::post('/savegejala', [App\Http\Controllers\GejalaController::class, 'store'])->name('savegejala'); 
    
    });
    //Penyakit
    Route::prefix('penyakit')->group(function () {
        
    Route::get('/datapenyakit', [App\Http\Controllers\PenyakitController::class, 'index'])->name('datapenyakit');
    Route::get('/createpenyakit', [App\Http\Controllers\PenyakitController::class, 'create'])->name('createpenyakit');
    Route::post('/createpenyakit', [App\Http\Controllers\PenyakitController::class, 'store']);
   
    // Route::get('create/{id}', [App\Http\Controllers\PenyakitController::class, 'create'])->name('penyakit.create');
    // Route::post('create', [App\Http\Controllers\PenyakitController::class, 'store']);
    
    });

});


require __DIR__.'/auth.php';
