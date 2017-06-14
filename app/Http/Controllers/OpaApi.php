<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Opa;

class OpaApi extends Controller
{
  public function index($id){
    $res = Opa::where("cve_ppi", $id)->get();

    foreach($res as $r){
      $r->urlimages = [];
      $r->monto_asigautact = 0;
      $r->desc_clas_ciudadana = $r->clasificacion_ciudadana;
      $r->fase = "concluido";
    }
    $response = [];
    $response["total"]      = $res->count();
    $response["resultados"] = $res;
    return response()->json($response)->header("Access-Control-Allow-Origin", "*");
  }
}
