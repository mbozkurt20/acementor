<?php

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
    return view('welcome');
});

Route::get('cache',function (){
   \Illuminate\Support\Facades\Artisan::call('config:clear');
   \Illuminate\Support\Facades\Artisan::call('cache:clear');
   \Illuminate\Support\Facades\Artisan::call('key:generate');
});

Route::view('terms-conditions','components.contracts.terms');
Route::view('privacy-policy','components.contracts.privacy');
Route::view('acceptable-use-policy','components.contracts.acceptable');

Route::view('contract','components.contract');
Route::view('teams','components.teams');
Route::view('services','components.services');
