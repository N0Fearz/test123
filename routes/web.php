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
Route::get('/voorraadmanager', [VoorraadController::class, 'index']);
Route::get('/verkoper', [VerkoopController::class, 'index']);
Route::get('/picker', [PickerController::class, 'index']);
Route::get('/picker/pick/{id}', [PickerController::class, 'show'])->name('order_pick');
Route::get('/verkoper/order/{id}', [VerkoopController::class, 'show'])->name('order_verkoop');
Route::get('/verkoper/toevoegen', [VerkoopController::class, 'add_order'])->name('add_order');
Route::get('/verkoper/order/edit/{id}', [VerkoopController::class, 'edit_rule'])->name('edit_order');
Route::get('/verkoper/rule/add/{id}', [VerkoopController::class, 'add_rule'])->name('add_rule');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
