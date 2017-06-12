<?php

use App\Models\Opa;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  $execs = Opa::select("desc_unidad")->groupBy("desc_unidad")->orderBy("desc_unidad", "asc")->get();
    return view('home')->with(["execs" => $execs]);
});

Route::get('/mapa2', function () {
  $execs = Opa::select("desc_unidad")->groupBy("desc_unidad")->orderBy("desc_unidad", "asc")->get();
    return view('home2')->with(["execs" => $execs]);
});

Route::get('/ficha', function () {
    return view('ficha');
});

Route::get('/fichav2', function () {
    return view('fichav2');
});

Route::get('/fichapre', function () {
    return view('fichapre');
});

Route::get('/ficha_ef', function () {
    return view('ficha_ef');
});
Route::get('/ficha_escuelas', function () {
    return view('ficha_escuelas');
});

Route::get('/carrusel', function () {
    return view('carrusel');
});

Route::post('denuncia/guardar', 'Complaints@save');
