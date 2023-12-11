<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TenantController;

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

Auth::routes();

Route::get('/fetch-data', [TenantController::class, 'fetchData'])->name('fetchData');

Route::get('/tenant-tenants', [TenantController::class, 'showTenants'])->name('showTenants');

//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/form', [TenantController::class, 'showForm']);

Route::post('/process-form', [TenantController::class, 'processForm'])->name('process.form');

Route::post('/import-excel', [TenantController::class, 'postImport'])->name('postImport');

Route::post('/tenant-view', [TenantController::class, 'viewTenant'])->name('viewTenant');

Route::post('/update-tenant', [TenantController::class, 'updateTenant'])->name('update.tenant');









