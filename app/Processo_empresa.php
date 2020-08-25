<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Processo_empresa extends Model
{
    //
    protected $table = "processo_empresa";
    protected $fillable =[
        'id','empresa_id','processo_id','parametro_pesquisa','descricao_justificativa'
    ];
}
