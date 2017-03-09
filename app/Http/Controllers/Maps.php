<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Maps extends Controller
{
  public function index(){
    return view("mapv2");
  }
}
