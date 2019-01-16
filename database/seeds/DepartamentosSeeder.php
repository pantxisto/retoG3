<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DepartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamentos')->insert([
           'nomDepart' => 'Informatica',
           'siglas'  => 'INFOR',
   		]);

   		DB::table('departamentos')->insert([
           'nomDepart' => 'Quimica',
           'siglas'  => 'QMK',
   		]);

   		DB::table('departamentos')->insert([
           'nomDepart' => 'Electronica',
           'siglas'  => 'ELEC',
   		]);

   		DB::table('departamentos')->insert([
           'nomDepart' => 'Comercio Y Marketing',
           'siglas'  => 'CYM',
   		]);
    }
}
