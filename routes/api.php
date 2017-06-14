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

Route::get('sfu/state/{row}', "MapsApi@sfuState");
Route::get('consolidado2015/{page?}', "MapsApi@consolidado2015");

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get("/data", function(Request $request){
  return response(Opa::select(
    "latitud_inicial as lat", 
    "longitud_inicial as lng", 
    "cve_entfed as state",
    "avance_fisico as advance",
    "cve_ppi as key", 
    //"ent_fed as state_name",
    "nombre as name",
    "ciclo",
    "desc_unidad as unidad",
    "ramo",
    "monto_total_inversion",
    "ejercido",
    "clasificacion_ciudadana as classification")->get())
    ->header('Access-Control-Allow-Origin', '*');
});


Route::get("/data/ramo", function(Request $request){
  return response(Opa::select("ramo", "desc_ramo")->groupBy("ramo", "desc_ramo")->get())
    ->header('Access-Control-Allow-Origin', '*');
});

Route::get("/data/clasificacion", function(Request $request){
  return response(Opa::select("clasificacion_ciudadana")->groupBy("clasificacion_ciudadana")->get())
    ->header('Access-Control-Allow-Origin', '*');
});


Route::get("/data/ejecutor", function(Request $request){
  return response(Opa::select("unidad", "desc_unidad")->groupBy("unidad", "desc_unidad")->get())
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

Route::get("consulta/consolidado2015/{consolidado2015single}", "MapsApi@consolidado2015single");

Route::get("consulta/opa/{id}", "OpaApi@index");