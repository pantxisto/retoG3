<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    //
    protected $table = 'departamentos';
    protected $primaryKey = 'idDepart';
    protected $fillable = ['idDepart', 'nomDepart', 'siglas'];
    protected $guarded = ['created_at', 'update_at'];

    public function getTableColumns($table)
    {
        return DB::getSchemaBuilder()->getColumnListing($table);

        // OR

        return Schema::getColumnListing($table);

    }
}
