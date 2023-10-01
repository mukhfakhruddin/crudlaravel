<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

Route::get('/pegawai', [EmployeeController::class, 'index']) -> name('pegawai');

Route::get('/tambahpegawai', [EmployeeController::class, 'tambahpegawai']) -> name('tambahpegawai');
Route::post('/insertdata', [EmployeeController::class, 'insertdata']) -> name('insertdata');

Route::get('/tampilkandata/{id}', [EmployeeController::class, 'tampilkandata']) -> name('tampilkandata');
Route::post('/updatedata/{id}', [EmployeeController::class, 'updatedata']) -> name('updatedata');

Route::get('/delete/{id}', [EmployeeController::class, 'delete']) -> name('delete');

Route::get('/exportpdf', [EmployeeController::class, 'exportpdf']) -> name('exportpdf');
Route::get('/exportexcel', [EmployeeController::class, 'exportexcel']) -> name('exportexcel');

Route::post('/importexcel', [EmployeeController::class, 'importexcel']) -> name('importexcel');