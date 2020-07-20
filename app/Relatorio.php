<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relatorio extends Model
{
    //
    protected $table="relatorio";
    protected $fillable =[
        'id_processo','id_item','id_empresa','valor'
    ];
}
