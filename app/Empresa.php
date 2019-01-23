<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    //
    protected $table = 'empresas';

    public function ofertas()
    {
        return $this->hasMany('App\Oferta', 'idEmpresa');
    }
}
