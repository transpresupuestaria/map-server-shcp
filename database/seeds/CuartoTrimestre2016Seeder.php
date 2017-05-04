<?php

use Illuminate\Database\Seeder;
use League\Csv\Reader;

class CuartoTrimestre2016Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $table      = "cuarto_trimestre2016s";
      $file_path  = base_path() . "/data/cuartotrimestre_2016_utf8.csv";
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
        DB::table($table)->insert($row);
      }

      $this->command->info('Cuarto trimestre 2016 table seeded!');
        //
    }
}
