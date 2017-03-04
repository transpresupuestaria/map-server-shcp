<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Hash;

// models
use App\Models\Complaint;



class Complaints extends Controller
{
    //
    /**
     * Guarda una nueva denuncia
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
      $data  = $request->except('_token');
      $pass  =  uniqid() . "GF";
      if($request->contrasenia){

        $data['contrasenia'] = Hash::make($request->contrasenia);
        $data['pass']        = Hash::make($pass);
      }
      $complaint           = new Complaint($data);
      $complaint->save();
      $folio =  "OPA-" . $complaint->id;//uniqid() . "GF";
      return response()->json(["folio" => $folio,"passFolio"=>$pass]);
    }

}
