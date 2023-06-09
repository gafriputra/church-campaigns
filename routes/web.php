<?php

use App\Http\Controllers\CampaignController;
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

Route::get('/', [CampaignController::class, 'index'])->name('home');
Route::get('/donasi', [CampaignController::class, 'donasi'])->name('donasi');
Route::get('/refresh', [CampaignController::class, 'refresh'])->name('refresh');
Route::get('/login', function (){
    return redirect('/admin/login');
})->name('login');
