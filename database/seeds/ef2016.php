<?php

use Illuminate\Database\Seeder;
use League\Csv\Reader;

class ef2016 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $table      = "ef2016s";
      $file_path  = base_path() . "/data/__ef2016.csv";
      // recomendación de la librería de CSV para mac OSX
      if (! ini_get("auto_detect_line_endings")){
        ini_set("auto_detect_line_endings", '1');
      }
      // elimina todo lo que hay en la tabla
      DB::table($table)->delete();

      // genera y configura el lector de CSV
      $reader = Reader::createFromPath($file_path);

      // guarda los datos del CSV en la tabla
      $data = $reader->fetchAssoc();
      foreach($data as $row){
        if($row['ID_LOCALIDAD'] == ''){
          $row['ID_LOCALIDAD'] = NULL;
        }

        if($row['ID_MUNICIPIO'] == ''){
          $row['ID_MUNICIPIO'] = NULL;
        }

        if($row['ID_RECURSO'] == ''){
          $row['ID_RECURSO'] = NULL;
        }

        if($row['ID_RAMO'] == ''){
          $row['ID_RAMO'] = NULL;
        }

        if($row['CICLO_RECURSO'] == ''){
          $row['CICLO_RECURSO'] = NULL;
        }

        if(empty($row['LONGITUD'])){
          $row['LONGITUD'] = NULL;
        }

        if(empty($row['LATITUD'])){
          $row['LATITUD'] = NULL;
        }


        DB::table($table)->insert($row);
      }

      $this->command->info('ef2016 table seeded!');
    }
}
