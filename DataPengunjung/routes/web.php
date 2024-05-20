<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pengunjung', [EmployeeController::class, 'index'] )->name('pengunjung');

Route::get('/tambahpengunjung', [EmployeeController::class, 'tambahpengunjung'] )->name('tambahpengunjung');
Route::post('/insertdata', [EmployeeController::class, 'insertdata'] )->name('insertdata');

Route::get('/tampilkandata/{id}', [EmployeeController::class, 'tampilkandata'] )->name('tampilkandata');
Route::post('/updatedata/{id}', [EmployeeController::class, 'updatedata'] )->name('updatedata');

Route::get('/delete/{id}', [EmployeeController::class, 'delete'] )->name('delete');



