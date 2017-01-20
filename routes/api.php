<?php

use Illuminate\Http\Request;
use App\Models\Opa;

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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get("/data", function(Request $request){
  return response(Opa::select("latitud_inicial", "longitud_inicial", "cve_ppi")->get())
    ->header('Access-Control-Allow-Origin', '*');
});
