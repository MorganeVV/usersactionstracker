<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActionsController;
use App\Http\Controllers\AjaxController;


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

Route::get('/', function(){
    return view('details/home');
});

Route::get('/contact', function () {
    return view('details/contact');
});
Route::post('/contact', [ActionsController::class, 'processForm']) -> name('processForm');


Route::post('/ajaxRequest', [AjaxController::class, 'ajaxRequestPost']);
