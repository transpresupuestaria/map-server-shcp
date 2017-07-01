<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Opa;
use App\Models\Escuelas;
use App\Models\entidades2017;
use App\Models\EntidadesContratos2017;


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

  public function escuelas($id){
    $_res = Escuelas::where("CLAVECENTROTRABAJO", $id)->get();

    $res = [];
    $res["total"]      = $_res->count();
    $res["resultados"] = $_res;
    return response()->json($res)->header("Access-Control-Allow-Origin", "*");
  }

  public function entidades($folio){
    $_res = entidades2017::where("FOLIO", $folio)->get();

    $res = [];
    $res["total"]      = $_res->count();
    $res["resultados"] = $_res;
    return response()->json($res)->header("Access-Control-Allow-Origin", "*");
  }
}
