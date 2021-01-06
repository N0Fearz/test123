<?php

use App\Http\Controllers\RedirectController;
use App\Http\Controllers\PickerController;
use App\Http\Controllers\VerkoopController;
use App\Http\Controllers\VoorraadController;
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
    return view('auth/login');
});

Route::get('redirect', [RedirectController::class, 'index']);
Route::get('/voorraadmanager', [VoorraadController::class, 'index'])->name('voorraadmanager_index');
Route::get('/verkoper', [VerkoopController::class, 'index'])->name('verkoper_index');
Route::get('/picker', [PickerController::class, 'index'])->name('picker_index');
Route::get('/picker/pick/{id}', [PickerController::class, 'show'])->name('order_pick');
Route::get('/verkoper/order/{id}', [VerkoopController::class, 'show'])->name('order_verkoop');
Route::get('/verkoper/toevoegen', [VerkoopController::class, 'add_order'])->name('add_order');
Route::get('/verkoper/order/rule/edit/{id}', [VerkoopController::class, 'edit_rule'])->name('edit_rule');
Route::get('/verkoper/rule/add/{id}', [VerkoopController::class, 'add_rule'])->name('add_rule');
Route::get('/verkoper/order/edit/{id}', [VerkoopController::class, 'edit_order'])->name('edit_order');
Route::get('/voorraad/stock/edit/location/{id}', [VoorraadController::class, 'show'])->name('edit_location');
Route::post('/verkoper/order/store', [VerkoopController::class, 'store'])->name('store_order');
Route::post('/verkoper/order/rule/store', [VerkoopController::class, 'store_rule'])->name('store_rule');
Route::put('/verkoper/order/update/{id}', [VerkoopController::class, 'update'])->name('update_order');
Route::patch('/verkoper/order/rule/update/{id}', [VerkoopController::class, 'update_rule'])->name('update_rule');
Route::patch('/voorraad/stock/update/location/{id}', [VoorraadController::class, 'update'])->name('update_location');
Route::patch('/voorraad/stock/update/number/{id}', [VoorraadController::class, 'update_number'])->name('update_number');
Route::get('/verkoper/order/rule/delete/{id}', [VerkoopController::class, 'destroy'])->name('delete_rule');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
