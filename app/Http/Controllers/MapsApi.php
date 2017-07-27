<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ProyectosSuspendidosSfu;
use App\Consolidado2015;
use App\Models\entidades2017;

use DB;

class MapsApi extends Controller
{
  const PAGE_SIZE = 500;
  public function sfuState(Request $request, $row = "COMPROMETIDO_PER"){
    //$value = $request->input("value");

    $response = ProyectosSuspendidosSfu::select(DB::raw("KA_ENTIDAD_FEDERATIVA as state_id, sum({$row}) as {$row}"))
                ->groupBy("KA_ENTIDAD_FEDERATIVA")
                ->get();

    return response()->json($response)->header("Access-Control-Allow-Origin", "*");
  }

  public function consolidado2015single(Request $request, $magic_num){
    $response = Consolidado2015::find($magic_num);

    if(!$response){
      abort(404);
    }

    return response()
           ->json($response)
           ->header("Access-Control-Allow-Origin", "*");
  }

  public function consolidado2015(Request $request, $page = 1){
    $branch = $request->input("branch");
    $state  = $request->input("state");
    $year   = $request->input("year");
    $_page  = (int)$page >0 ? (int)$page - 1 : 0; 

    $response = Consolidado2015::where("LONGITUD","!=", "")->where("LATITUD", "!=", "");
    $total    = Consolidado2015::where("LONGITUD","!=", "")->where("LATITUD", "!=", "");

    if($branch){
      $response = $response->where("ID_RAMO", $branch);
      $total    = $total->where("ID_RAMO", $branch);
    }

    if($state){
      $response = $response->where("ID_ENTIDAD_FEDERATIVA", $state);
      $total    = $total->where("ID_ENTIDAD_FEDERATIVA", $state);
    }

    if($year){
      $response = $response->where("CICLO", $year);
      $total    = $total->where("CICLO", $year);
    }

    $response = $response->take(self::PAGE_SIZE)->skip($_page * self::PAGE_SIZE)->get();
    $total    = $total->count();
    $_response = [
      "total"    => $total,
      "results"  => $response,
      "page"     => $_page + 1,
      "pageSize" => self::PAGE_SIZE,
      "pages"    => ceil($total/self::PAGE_SIZE)
    ];

    return response()->json($_response)->header("Access-Control-Allow-Origin", "*");
  }

  public function entidades(Request $request, $page = 1){
    /*
    {"type" : "search", "field" : "NOMBRE_PROYECTO"},
    {"type" : "state", "field" : "ID_ENTIDAD_FEDERATIVA"},
    {"type" : "city", "field" : "ID_MUNICIPIO"},
    {"type" : "branch", "field" : "ID_RAMO"},
    {"type" : "year", "field" : "CICLO_RECURSO"}
    */
    $branch = $request->input("branch");
    $state  = $request->input("state");
    $year   = $request->input("year");
    $city   = $request->input("city");
    $_page  = (int)$page >0 ? (int)$page - 1 : 0; 

    $response = entidades2017::where("LONGITUD","!=", "")->where("LATITUD", "!=", "");

    $total    = entidades2017::where("LONGITUD","!=", "")->where("LATITUD", "!=", "");

    if($branch){
      $response = $response->where("ID_RAMO", $branch);
      $total    = $total->where("ID_RAMO", $branch);
    }

    if($state){
      $response = $response->where("ID_ENTIDAD_FEDERATIVA", $state);
      $total    = $total->where("ID_ENTIDAD_FEDERATIVA", $state);
    }

    if($year){
      $response = $response->where("CICLO_RECURSO", $year);
      $total    = $total->where("CICLO_RECURSO", $year);
    }

    if($city){
      $response = $response->where("ID_MUNICIPIO", $city);
      $total    = $total->where("ID_MUNICIPIO", $city);
    }

    $response = $response->take(self::PAGE_SIZE)->skip($_page * self::PAGE_SIZE)->get();
    $total    = $total->count();
    $_response = [
      "total"    => $total,
      "results"  => $response,
      "page"     => $_page + 1,
      "pageSize" => self::PAGE_SIZE,
      "pages"    => ceil($total/self::PAGE_SIZE)
    ];

    return response()->json($_response)->header("Access-Control-Allow-Origin", "*");
  }

  public function entidadesv2(Request $request){
    /*
    {"type" : "search", "field" : "NOMBRE_PROYECTO"},
    {"type" : "state", "field" : "ID_ENTIDAD_FEDERATIVA"},
    {"type" : "city", "field" : "ID_MUNICIPIO"},
    {"type" : "branch", "field" : "ID_RAMO"},
    {"type" : "year", "field" : "CICLO_RECURSO"}
    */
    $name   = $request->input("NOMBRE_PROYECTO");
    $state  = $request->input("ID_ENTIDAD_FEDERATIVA");
    $city   = $request->input("ID_MUNICIPIO");
    $branch = $request->input("ID_RAMO");
    $year   = $request->input("CICLO_RECURSO");
    $page   = $request->input("page") >= 0 ? $request->input("page") : 0; 

//  ->whereIn('id', [1, 2, 3])
    $response = entidades2017::where("LONGITUD","!=", "")->where("LATITUD", "!=", "");

    $total    = entidades2017::where("LONGITUD","!=", "")->where("LATITUD", "!=", "");

    if($branch){
      $branch   = explode("|", $branch);
      $response = $response->whereIn("ID_RAMO", $branch);
      $total    = $total->whereIn("ID_RAMO", $branch);
    }

    if($state){
      $state   = explode("|", $state);
      $response = $response->whereIn("ID_ENTIDAD_FEDERATIVA", $state);
      $total    = $total->whereIn("ID_ENTIDAD_FEDERATIVA", $state);
    }

    if($year){
      $year   = explode("|", $year);
      $response = $response->whereIn("CICLO_RECURSO", $year);
      $total    = $total->whereIn("CICLO_RECURSO", $year);
    }

    if($city){
      $city     = explode("|", $city);
      $response = $response->whereIn("ID_MUNICIPIO", $city);
      $total    = $total->whereIn("ID_MUNICIPIO", $city);
    }

    if($name){
      $response = $response->where("NOMBRE_PROYECTO", "like", "%$name%");
      $total    = $total->where("NOMBRE_PROYECTO", "like", "%$name%");
    }

    $response = $response->take(self::PAGE_SIZE)->skip($page * self::PAGE_SIZE)->get();
    $total    = $total->count();
    $_response = [
      "total"    => $total,
      "results"  => $response,
      "page"     => $page,
      "pageSize" => self::PAGE_SIZE,
      "pages"    => ceil($total/self::PAGE_SIZE)
    ];

    return response()->json($_response)->header("Access-Control-Allow-Origin", "*");
  }
}
