<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Device;
use App\Http\Controllers\Admin;

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

Route::get('/dashboard', [Device::class, 'index'])->name('dashboard');

Route::post("/device/store", [Device::class, 'store']);
Route::get("/dashboard/pending", [Device::class, 'afterRegist']);

Route::get('/admin', [Admin::class, 'index']);
Route::post('/admin/approve', [Admin::class, 'approve']);
Route::post('/admin/delete', [Admin::class, 'delete']);
Route::post('/admin/update', [Admin::class, 'update']);

Route::get('/rssi', [Device::class, 'guzzle']);
require __DIR__.'/auth.php';
