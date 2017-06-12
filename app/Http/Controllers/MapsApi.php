<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ProyectosSuspendidosSfu;
use App\Consolidado2015;

use DB;

class MapsApi extends Controller
{
  const PAGE_SIZE = 10;
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
}
