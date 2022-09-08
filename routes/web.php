<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\ScopeController;
use App\Http\Controllers\TraitController;

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

//basic crud
Route::resource('products', ProductController::class);

//export data as excel
Route::get('exportexcel', [ExportController::class, 'exportExcel']);

//scopes - types (local scope,local dynamic scope, global scope)
Route::get('scopes', [ScopeController::class, 'laravelScopes']);

//event and listener
Route::get('doevents', [EventController::class, 'doEvents']);

//laravel crud using traits
Route::get('traits', [TraitController::class, 'productList']);

//laravel autocomplete types
