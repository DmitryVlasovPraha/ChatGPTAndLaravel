<?php

use App\Http\Controllers\NameMyPetController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatGPTController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\IndexController;
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


Route::get('/chatgpt', [ChatGPTController::class, 'index'])
    ->name('chatgpt.index');

Route::post('/chatgpt/ask', [ChatGPTController::class, 'ask'])
    ->name('chatgpt.ask');

Route::post('/brand/{brand}/edit', [ChatGPTController::class, 'askEdit'])
    ->name('chatgpt.askEdit');

Route::match(['get', 'post'], 'namemypet', [NameMyPetController::class, 'index'])->name('namemypet');

Route::resource('brand', BrandController::class);

Route::get('/',[IndexController::class, 'index'])->name('home');

Route::get('/test',[BrandController::class, 'test'])->name('test');

