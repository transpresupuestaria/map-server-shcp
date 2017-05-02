<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ProyectosSuspendidosSfu;

use DB;

class MapsApi extends Controller
{
  public function sfuState(Request $request, $row = "COMPROMETIDO_PER"){
    //$value = $request->input("value");

    $response = ProyectosSuspendidosSfu::select(DB::raw("KA_ENTIDAD_FEDERATIVA as state_id, sum({$row}) as {$row}"))
                ->groupBy("KA_ENTIDAD_FEDERATIVA")
                ->get();

    return response()->json($response)->header("Access-Control-Allow-Origin", "*");
  }
}
