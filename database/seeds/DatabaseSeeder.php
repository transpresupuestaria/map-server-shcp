<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->call(CuartoTrimestre2016Seeder::class);
      $this->call(Consolidado2015Seeder::class);
      //$this->call(ef2016::class);
      $this->call(Entidades2017Seeder::class);
      $this->call(EntidadesContratos2017Seeder::class);
      $this->call(EscuelasSeeder::class);
      $this->call(OpaSeeder::class);
      $this->call(ProyectosSuspendidosSfuSeeder::class);
        // $this->call(UsersTableSeeder::class);
    }
}
