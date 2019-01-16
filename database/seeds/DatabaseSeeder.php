<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UsersTableSeeder::class);
        $this->call(EmpresasSeeder::class);
        $this->call(DepartamentosSeeder::class);
        $this->call(CurriculumsSeeder::class);
        $this->call(GradosSeeder::class);
        $this->call(OfertaSolicitadaSeeder::class);
        $this->call(OfertasSeeder::class);
        $this->call(TituloGradosSeeder::class);
        $this->call(UsuariosSeeder::class);
    }
}
