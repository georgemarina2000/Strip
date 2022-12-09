<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelationController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('one2one',[RelationController::class,'one2one']);
Route::get('one2many',[RelationController::class,'one2many']);
Route::get('filter',[RelationController::class,'fillter']);
Route::get('delete',[RelationController::class,'delete']);
Route::get('add',[RelationController::class,'add']);
Route::get('many2many',[RelationController::class,'many2many']);
Route::get('delete2',[RelationController::class,'delete2']);
Route::get('add2',[RelationController::class,'add2']);
