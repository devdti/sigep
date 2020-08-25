<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relatorio extends Model
{
    //
    protected $table="relatorio";
    protected $fillable =[
        'id','processo_id','processo_empresa_id','item_id','valor'
    ];
}
