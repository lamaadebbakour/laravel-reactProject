<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\clothing;
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
Route::get('clothing',function(){
    return clothing::all();
});
Route::get('clothing/{id}',function($id){
    return clothing::find($id);
});
Route::post('clothing',function(Request $request){
    return clothing::create($request->all());
});