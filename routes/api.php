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
  return response(Opa::select(
    "latitud_inicial as lat", 
    "longitud_inicial as lng", 
    "cve_entfed as state",
    "avance_fisico as advance",
    "cve_ppi as key", "ciclo","ramo")->get())
    ->header('Access-Control-Allow-Origin', '*');
});

Route::get("/data/ramo", function(Request $request){
  return response(Opa::select("ramo", "desc_ramo")->groupBy("ramo", "desc_ramo")->get())
    ->header('Access-Control-Allow-Origin', '*');
});


Route::get("/data/estado", function(Request $request){
  return response(Opa::select("ent_fed", "cve_entfed")->groupBy("ent_fed", "cve_entfed")->get())
    ->header('Access-Control-Allow-Origin', '*');
});

Route::get("/test", function(Request $request){
  return response(Opa::first())
    ->header('Access-Control-Allow-Origin', '*');
});