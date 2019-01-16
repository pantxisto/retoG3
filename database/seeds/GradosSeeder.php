<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class GradosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grados')->insert([
           'siglas' => 'ASIR',
           'nomGrado'  => 'Administracion de Sistemas',
           'famProfesional'  => 'Informatica'
   		]);

   		DB::table('grados')->insert([
           'siglas' => 'DAW',
           'nomGrado'  => 'Desarrollo de Aplicaciones Web',
           'famProfesional'  => 'Informatica'
   		]);

   		DB::table('grados')->insert([
           'siglas' => 'DAM',
           'nomGrado'  => 'Desarrollo de Aplicaciones Multiplataforma',
           'famProfesional'  => 'Informatica'
   		]);
    }
}
