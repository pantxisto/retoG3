<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    //
    protected $table = 'ofertas';
    protected $primaryKey = 'idOferta';

        public function empresas()
    {
        return $this->hasOne('App\Empresa', 'idEmpresa');
    }
}
