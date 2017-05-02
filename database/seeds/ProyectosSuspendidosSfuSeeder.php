<?php

use Illuminate\Database\Seeder;

use League\Csv\Reader;

class ProyectosSuspendidosSfuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $table      = "proyectos_suspendidos_sfus";
      $file_path  = base_path() . "/data/proyectos_suspendidos_sfu_utf8.csv";
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

      $this->command->info('SFU table seeded!');
    }
}
