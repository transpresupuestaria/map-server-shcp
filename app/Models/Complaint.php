<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    //
    protected $fillable = [
      "motivoPeticion",
      "estado",
      "dependencia",
      "anonimo",
      "motivoId",
      "nombre",
      "paterno",
      "materno",
      "genero",
      "email",
      "contrasenia",
    ];
}
