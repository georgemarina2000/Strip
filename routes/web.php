<?php

use App\Http\Controllers\RelationController;
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

//Route::get('one2one',[RelationController::class,'one2one']);
//Route::get('one2many',[RelationController::class,'one2many']);
//Route::get('fillter',[RelationController::class,'fillter']);
//Route::get('delete',[RelationController::class,'delete']);
//Route::get('add',[RelationController::class,'add']);
//Route::get('many2many',[RelationController::class,'many2many']);
//Route::get('delete2',[RelationController::class,'delete2']);
//Route::get('add2',[RelationController::class,'add2']);
